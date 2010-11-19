<?php defined('SYSPATH') OR die('No direct access allowed.');

define('GITHUB_DATA_DB_REFRESH', 5);
define('GITHUB_DATA_FETCH_REFRESH', 5*60);

/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Ajax_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function fetch_data_from_url($url, $stale_age) {
    $cachePath = APPPATH.'cache/';
    $cacheKey = sha1($url);
    $cacheFilename = $cachePath.$cacheKey;

    if (file_exists($cacheFilename)
        && filemtime($cacheFilename) >= time() - $stale_age) {
      $data = file_get_contents($cacheFilename);

    } else {
      // Data is stale. Fetch it from github.
      $data = @file_get_contents($url);

      file_put_contents($cacheFilename, $data);
    }

    return $data;
  }

  // Welcome to clowntown. This method is insanely long. It basically does some caching of
  // github info in a db and returns the results in JSON form.
  public function github($username, $reponame) {
    header('Content-type: application/json');

    if (!preg_match('/^[a-z0-9_]+$/i', $username) ||
        !preg_match('/^[a-z0-9_]+$/i', $reponame)) {
      echo json_encode(array('error' => "Invalid username or reponame"));
      exit;
    }
    $db = Database::instance();

    // Basic, known information about the repo.
    $repo = array(
      'repoid' => null,
      'username' => $username,
      'reponame' => $reponame
    );
    $repoid = null;
    // Assume the data is stale/nonexistent.
    $data_is_stale = true;

    // Check if the repo exists.
    $result = $db->
      from('repos')->
      select(array('repoid', 'description', 'homepage', 'last_updated'))->
      where('username', $username)->
      where('reponame', $reponame)->
      limit(1)->
      get();

    if (count($result)) {
      // The repo exists!
      $repodbobj = null;
      foreach ($result as $row) {
        $repodbobj = $row;
        break;
      }
      
      // Grab the available information.
      $repoid = $repodbobj->repoid;
      $repo['repoid'] = $repoid;
      $repo['description'] = $repodbobj->description;
      $repo['homepage'] = $repodbobj->homepage;
      $repo['last_updated'] = $repodbobj->last_updated;
      
      // Does the repo need to be updated?
      $last_updated = strtotime($repo['last_updated']);
      if (time() - $last_updated <= GITHUB_DATA_DB_REFRESH) {
        // Yes, it does.
        $data_is_stale = false;
      }
    }
    
    if ($data_is_stale) {
      // Let's check the local cache to see if we have any non-stale github data then.
      $url = 'http://github.com/api/v2/json/repos/show/'.$username.'/'.$reponame.'/tags';
      $tagdata = $this->fetch_data_from_url($url, GITHUB_DATA_FETCH_REFRESH);

      $url = 'http://github.com/api/v2/json/repos/show/'.$username.'/'.$reponame;
      $repodata = $this->fetch_data_from_url($url, GITHUB_DATA_FETCH_REFRESH);

      // Handle failure case.
      if (!$repodata) {
        echo json_encode(array('error' => "Unable to fetch repo info"));
        exit;
      }
      if (!$tagdata) {
        echo json_encode(array('error' => "Unable to fetch tag info"));
        exit;
      }

      // Now let's open up this box o' goodies.
      $tagobj = json_decode($tagdata, TRUE);
      $repoobj = json_decode($repodata, TRUE);

      $repo['tags'] = $tagobj['tags'];
      $repo['description'] = $repoobj['repository']['description'];
      $repo['homepage'] = $repoobj['repository']['homepage'];
      
      // Creating a new repo?
      if (!$repoid) {
        // Yes, fire it off to the db.
        $last_updated = date("Y-m-d H:i:s");
        $repodbobj = array(
          'username' => $username,
          'reponame' => $reponame,
          'description' => $repo['description'],
          'homepage' => $repo['homepage'],
          'last_updated' => $last_updated,
        );
        $repodbinfo = $db->insert('repos', $repodbobj);
        
        $repoid = $repodbinfo->insert_id();
        $repo['repoid'] = $repoid;
        $repo['last_updated'] = $last_updated;

        foreach ($tagobj['tags'] as $tagname => $tagsha1) {
          $tagdbobj = array(
            'repoid' => $repoid,
            'tagname' => $tagname,
            'tagsha1' => $tagsha1,
          );
          $tagdbinfo = $db->insert('tags', $tagdbobj);
        }

      } else {
        // Otherwise just update the existing repo data.
        $repo['last_updated'] = date("Y-m-d H:i:s");
        $db->
          from('repos')->
          set('description', $repo['description'])->
          set('homepage', $repo['homepage'])->
          set('last_updated', $repo['last_updated'])->
          where('repoid', $repoid)->
          update();

        // Get the list of known tags.
        $result = $db->
          from('tags')->
          select(array('tagname', 'tagsha1'))->
          where('repoid', $repoid)->
          get();

        // Simplify the result.
        $dbtags = array();
        foreach ($result as $row) {
          $dbtags []= array(
            'tagname' => $row->tagname,
            'tagsha1' => $row->tagsha1,
          );
        }
        
        // Run through all of the db tags.
        foreach ($dbtags as $tagname => $tagsha1) {
          if (!isset($repo['tags'][$tagname])) {
            // If the tag doesn't exist in the new tag list, delete it from the db.
            $result = $db->delete('tags', array('repoid' => $repoid, 'tagname' => $tagname));
            
          } else if ($repo['tags'][$tagname] != $tagsha1) {
            // If the tag's sha1 has changed, update it in the db.
            $result = $db->update('tags', array('tagsha1' => $tagsha1),
                                  array('repoid' => $repoid, 'tagname' => $tagname));
          }
        }
        
        // Now check for new tags.
        foreach ($repo['tags'] as $tagname => $tagsha1) {
          if (!isset($dbtags[$tagname])) {
            $tagdbobj = array(
              'repoid' => $repoid,
              'tagname' => $tagname,
              'tagsha1' => $tagsha1,
            );
            $db->insert('tags', $tagdbobj);
          }
        }
        
      }
      
    } else {
      // Data isn't stale, just get the tag info then.

      $result = $db->
        from('tags')->
        select(array('tagname', 'tagsha1'))->
        where('repoid', $repoid)->
        get();
      
      $repo['tags'] = array();
      foreach ($result as $row) {
        $repo['tags'][$row->tagname] = $row->tagsha1;
      }
    }
    
    echo json_encode($repo);
  }

}