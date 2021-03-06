<?php defined('SYSPATH') OR die('No direct access allowed.');

define('GITHUB_USERNAME_REGEX', '/^[a-z0-9_]+$/i');
define('GITHUB_REPONAME_REGEX', '/^[a-z0-9_]+$/i');

/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Ajax_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  protected function fetch_repo_info_from_github($db, $repo, $username, $reponame) {
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

    $repo = array_merge($repo, array(
      'tags'        => $tagobj['tags'],
      'description' => $repoobj['repository']['description'],
      'homepage'    => $repoobj['repository']['homepage'],
      'watchers'    => $repoobj['repository']['watchers'],
    ));

    // No repo id means this repo hasn't been stored in the database yet.
    if (!$repo['repoid']) {
      // Yes, fire it off to the db.
      $last_updated = date("Y-m-d H:i:s");
      $repodbobj = array(
        'username' => $username,
        'reponame' => $reponame,
        'description' => $repo['description'],
        'homepage' => $repo['homepage'],
        'watchers' => $repo['watchers'],
        'last_updated' => $last_updated,
      );
      $repodbinfo = $db->insert('repos', $repodbobj);
      
      $repo['repoid'] = $repodbinfo->insert_id();
      $repo['last_updated'] = $last_updated;

      foreach ($tagobj['tags'] as $tagname => $tagsha1) {
        $tagdbobj = array(
          'repoid' => $repo['repoid'],
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
        set('watchers', $repo['watchers'])->
        set('last_updated', $repo['last_updated'])->
        where('repoid', $repo['repoid'])->
        update();

      // Get the list of known tags.
      $result = $this->select_tag_info($db)->
        where('repoid', $repo['repoid'])->
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
          $result = $db->delete('tags', array('repoid' => $repo['repoid'], 'tagname' => $tagname));
          
        } else if ($repo['tags'][$tagname] != $tagsha1) {
          // If the tag's sha1 has changed, update it in the db.
          $result = $db->update('tags', array('tagsha1' => $tagsha1),
                                array('repoid' => $repo['repoid'], 'tagname' => $tagname));
        }
      }
      
      // Now check for new tags.
      foreach ($repo['tags'] as $tagname => $tagsha1) {
        if (!isset($dbtags[$tagname])) {
          $tagdbobj = array(
            'repoid' => $repo['repoid'],
            'tagname' => $tagname,
            'tagsha1' => $tagsha1,
          );
          $db->insert('tags', $tagdbobj);
        }
      }
    }
    
    return $repo;
  }

  public function github($username, $reponame) {
    header('Content-type: application/json');

    if (!preg_match(GITHUB_USERNAME_REGEX, $username) ||
        !preg_match(GITHUB_REPONAME_REGEX, $reponame)) {
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

    // Assume the data is stale/nonexistent.
    $data_is_stale = true;

    $repoinfo = $this->get_db_repo_info($db, $username, $reponame);

    if ($repoinfo) {
      $repo = array_merge($repo, $repoinfo);

      $last_updated = strtotime($repoinfo['last_updated']);
      if (time() - $last_updated <= GITHUB_DATA_DB_REFRESH) {
        $data_is_stale = false;
      }
    }

    if ($data_is_stale) {
      $repo = $this->fetch_repo_info_from_github($db, $repo, $username, $reponame);

    } else {
      $result = $this->select_tag_info($db)->
        where('repoid', $repo['repoid'])->
        get();

      $repo['tags'] = array();
      foreach ($result as $row) {
        $repo['tags'][$row->tagname] = $row->tagsha1;
      }
    }
    
    echo json_encode($repo);
  }

}