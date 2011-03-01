<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en"> 
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <meta property="fb:app_id" content="114720825217072"/> 
  <meta property="fb:admins" content="122605446"/> 
  <meta property="og:title" content="three20.info"/> 
  <meta property="og:type" content="website"/> 
  <meta property="og:url" content="http://three20.info/"/> 
  <meta property="og:image" content="http://github.com/facebook/three20/raw/master/samples/Resources/Icon.png"/> 
  <meta name="keywords" content="three20 iPhone api open source library uikit tt" /> 
  <meta name="description" content="API documentation, articles, and tutorials related to the three20 iPhone library." />
<title>Three20 API: Member List</title>
<link href="http://three20.info/css/reset.css" rel="stylesheet" type="text/css"/>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javaScript" src="search/search.js"></script>
<link href="http://three20.info/css/global.css" rel="stylesheet" type="text/css"/> 
<link href="http://three20.info/css/article.css" rel="stylesheet" type="text/css"/> 
<link href="http://three20.info/css/headerbar.css" rel="stylesheet" type="text/css"/> 
<link href="http://three20.info/css/api.css" rel="stylesheet" type="text/css"/>
</head>
<body onload='searchBox.OnSelectItem(0);'>
<div id="page-wrapper"> 

<!-- HEADER -->

<div id="header"> 
<div class="fixed-width"> 
 
<ul class="right-links"> 
  <li><a href="http://three20.info/roadmap">Roadmap</a></li> 
  <li><a href="http://three20.info/documentation">Documentation</a></li> 
  <li><a href="http://three20.info/extensions">Extensions</a></li> 
  <li><a href="http://three20.info/community">Community</a></li> 
</ul> 
 
<div id="fb-root"></div> 
<script> 
  window.fbAsyncInit = function() {
    FB.init({
      appId   : '165692500131929',
      session : {"access_token":"165692500131929|2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446|7YjdqHOYyL6MXMHd-udsP0EbTsg","base_domain":"three20.info","expires":"1298952000","secret":"Hcv3uGki22DI7f_imqBhgQ__","session_key":"2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446","sig":"fdaa725c7cf196ce9579d1b232a16e64","uid":"122605446"}, // don't refetch the session when PHP already has it
      status  : true, // check login status
      cookie  : true, // enable cookies to allow the server to access the session
      xfbml   : true // parse XFBML
    });
 
    // whenever the user logs in, we refresh the page
    FB.Event.subscribe('auth.login', function() {
      window.location.reload();
    });
  };
 
  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script> 
 
<ul class="right-links"> 
<li><img class="profileimg" width="25" height="25" valign="bottom" src="https://graph.facebook.com/122605446/picture?type=square">Jeff Verkoeyen</li> 
<li><a href="https://www.facebook.com/logout.php?next=http%3A%2F%2Fthree20.info%2F&access_token=165692500131929%7C2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446%7C7YjdqHOYyL6MXMHd-udsP0EbTsg" onclick="FB.logout(function() { window.location.reload();}); return false;">Log out</a></li> 
</ul> 
 
<div class="leadin"> 
  <h1><a href="http://three20.info/">Three20</a></h1> 
  <h2><a href="http://three20.info/">An open-source library for iOS applications</a></h2> 
</div> <!-- .leadin --> 
 
</div> <!-- .fixed-width --> 
</div> <!-- #header --> 

<!-- CONTENT -->

<div id="content"> 
<div class="fixed-width">
<!-- Generated by Doxygen 1.7.1 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'Search');
--></script>
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
      <li><a href="examples.php"><span>Examples</span></a></li>
      <li id="searchli">
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&nbsp;List</span></a></li>
      <li><a href="hierarchy.php"><span>Class&nbsp;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&nbsp;Members</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>TTURLRequest Member List</h1>  </div>
</div>
<div class="contents">
This is the complete list of members for <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>, including all inherited members.<table>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#ac8412fff243d33553ac0c20800e604ed">__TTDEPRECATED_METHOD</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_cacheExpirationAge</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_cacheKey</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_cachePolicy</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_charsetForMultipart</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_contentType</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_delegates</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_files</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_filterPasswordLogging</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_headers</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_httpBody</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_httpMethod</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_isLoading</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_parameters</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_respondedFromCache</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_response</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_shouldHandleCookies</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_timestamp</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_totalBytesDownloaded</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_totalBytesExpected</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_totalBytesLoaded</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_totalContentLength</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_urlPath</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_userInfo</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [protected]</code></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_request.php#a1cd677f6cfcee0f1b5af8b176437b389">addFile:mimeType:fileName:</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#aa0f7d2b7001143d1b9f1d3635449a4f1">cacheExpirationAge</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#ace472f23740be06aa40dffdbdca99953">cacheKey</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a34ad517e5d5fe222baec6702b9eb4cde">cachePolicy</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_request.php#ac0962ff3e7ebc9fb7982ffe56f875f34">cancel</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a8a432224b4b3c781a593f8512c124ec1">charsetForMultipart</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a7cf514d3f3d6526b183220d9c21513fd">contentType</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>createNSURLRequest</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a71bb6bdcc1bc9699a0babfd2b8a398db">delegates</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a01c9b278379d6fe161e156a986ab845b">filterPasswordLogging</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a2e0a8de578fffdf0e14f38b00e2f7116">headers</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a81363a89ad2263f875252fa65cacf8ec">httpBody</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>httpMethod</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>initWithURL:delegate:</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a25d8560d31c9df8a7a274e2ad1825081">isLoading</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#ab7b6a26183ddcb2d0ff3ff17d3da4441">parameters</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>+&nbsp;</td><td><b>request</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [static]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td>+&nbsp;</td><td><b>requestWithURL:delegate:</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td><code> [static]</code></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a4276b8e633d614eab0fd649775d75e7a">respondedFromCache</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#ae5480dad46898eb6007913b6746e706c">response</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_request.php#a1ec0b072bbe86d0e431ef3e1b5e41b3e">send</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_request.php#ad038997a92aa0d283b52958e35010e28">sendSynchronously</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>setValue:forHTTPHeaderField:</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#aa421862494ee35a9bdb29102044d4301">shouldHandleCookies</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>timestamp</b> (defined in <a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>)</td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a57e7e58d55768b6f55f809ed7540f188">totalBytesDownloaded</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a52951bb86cb8979e357db311468fce2b">totalBytesExpected</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a8021fb197041175383a69f20e0e471bc">totalBytesLoaded</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a56d883edac9ce53e50062dc782c59d19">totalContentLength</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#a4ad107c41d501a5666e65ad357842a4a">urlPath</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
  <tr class="memlist"><td></td><td><a class="el" href="interface_t_t_u_r_l_request.php#af0b3b2400e591b6e5d6f535ee6d63207">userInfo</a></td><td><a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a></td><td></td></tr>
</table></div>
<!--- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
<a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(0)"><span class="SelectionMark">&nbsp;</span>All</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(1)"><span class="SelectionMark">&nbsp;</span>Classes</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(2)"><span class="SelectionMark">&nbsp;</span>Files</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(3)"><span class="SelectionMark">&nbsp;</span>Functions</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(4)"><span class="SelectionMark">&nbsp;</span>Variables</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(5)"><span class="SelectionMark">&nbsp;</span>Typedefs</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(6)"><span class="SelectionMark">&nbsp;</span>Enumerations</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(7)"><span class="SelectionMark">&nbsp;</span>Enumerator</a><a class="SelectItem" href="javascript:void(0)" onclick="searchBox.OnSelectItem(8)"><span class="SelectionMark">&nbsp;</span>Properties</a></div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div id="disqus_thread"></div> 
<script type="text/javascript"> 
  (function() {
   var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
   dsq.src = 'http://three20info2.disqus.com/embed.js';
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script> 
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=three20info2">comments powered by Disqus.</a></noscript> 
<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a> 
</div> <!-- .fixed-width --> 
 
</div> <!-- #content --> 
</div> <!-- #page-wrapper --> 
 
 
 
<script type="text/javascript"> 
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19295672-1']);
  _gaq.push(['_setDomainName', '.three20.info']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script> 
 
<script type="text/javascript"> 
var disqus_shortname = 'three20info2';
(function () {
  var s = document.createElement('script'); s.async = true;
  s.src = 'http://disqus.com/forums/three20info2/count.js';
  (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script> 
 
 
</body> 
</html>
