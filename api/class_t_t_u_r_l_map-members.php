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
<link href="http://dev.three20.info/css/global.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/article.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/headerbar.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/api.css" rel="stylesheet" type="text/css"/>
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
<li><a href="https://www.facebook.com/logout.php?next=http%3A%2F%2Fdev.three20.info%2F&access_token=165692500131929%7C2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446%7C7YjdqHOYyL6MXMHd-udsP0EbTsg" onclick="FB.logout(function() { window.location.reload();}); return false;">Log out</a></li> 
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
<h1>TTURLMap Member List</h1>  </div>
</div>
<div class="contents">
This is the complete list of members for <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>, including all inherited members.<table>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_defaultObjectPattern</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_fragmentPatterns</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_hashPattern</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_invalidPatterns</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_objectMappings</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_objectPatterns</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_schemes</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td></td><td><b>_stringPatterns</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td><code> [protected]</code></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>dispatchURL:toTarget:query:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#abe82a96721bfcec458cac53ea1b32e99">from:name:toURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:parent:toModalViewController:selector:transition:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:parent:toSharedViewController:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:parent:toSharedViewController:selector:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:parent:toViewController:selector:transition:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a5caa32730f725b02e7e087d6ea65b827">from:toModalViewController:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toModalViewController:selector:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toModalViewController:transition:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a577a7d83f63b1a2dea7e7057ba6bed3c">from:toObject:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toObject:selector:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toPopoverViewController:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toPopoverViewController:selector:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a79a725d7a6ce4bd652a000bef93e8a4a">from:toSharedViewController:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toSharedViewController:selector:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#abc5614af49a66a13fe0c1b1d46ddd836">from:toURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a526074d3d97e104f035c01d5478ccfec">from:toViewController:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toViewController:selector:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>from:toViewController:transition:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a067fd51f5d8088bdbc39890497e22126">isAppURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a249b0ac66dbb6986eb48145dd15945d1">isSchemeSupported:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a8c76c73bccbe301a94a4316c7283959d">navigationModeForURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#ad8ebeb7d3991015effc3de6889de3492">objectForURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>objectForURL:query:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>objectForURL:query:pattern:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a431e893bba437eb5b8d9b3a6b73d1ee9">removeAllObjects</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a5e4f6953717b80f1c36bf25a21eb618c">removeObject:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a28b5a056b91c220a1f4295d80e7336a4">removeObjectForURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#ac7818de41f613fe0c140afc1dc454aeb">removeURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a2fd20eb86d414c54fa03f794f26b54f5">setObject:forURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a0afe15c0ead5f0b9074a4bba8ebf980c">transitionForURL:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr class="memlist"><td>-&nbsp;</td><td><a class="el" href="interface_t_t_u_r_l_map.php#a28da8570a5aab1281313cfa2ff3dbfb0">URLForObject:</a></td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
  <tr bgcolor="#f0f0f0"><td>-&nbsp;</td><td><b>URLForObject:withName:</b> (defined in <a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a>)</td><td><a class="el" href="interface_t_t_u_r_l_map.php">TTURLMap</a></td><td></td></tr>
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
