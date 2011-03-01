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
<title>Three20 API: TTExtensionsController Class Reference</title>
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
  <div class="summary">
<a href="#pub-static-methods">Static Public Member Functions</a>  </div>
  <div class="headertitle">
<h1>TTExtensionsController Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTExtensionsController" --><!-- doxytag: inherits="TTTableViewController" -->
<p>A list of all available, loaded, and failed extensions.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_extensions_controller_8h_source.php">TTExtensionsController.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTExtensionsController:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_extensions_controller.png" usemap="#TTExtensionsController_map" alt=""/>
  <map id="TTExtensionsController_map" name="TTExtensionsController_map">
<area href="interface_t_t_table_view_controller.php" alt="TTTableViewController" shape="rect" coords="87,280,252,304"/>
<area href="interface_t_t_model_view_controller.php" alt="TTModelViewController" shape="rect" coords="87,224,252,248"/>
<area href="interface_t_t_view_controller.php" alt="TTViewController" shape="rect" coords="0,168,165,192"/>
<area href="protocol_t_t_model_delegate-p.php" alt="&lt;TTModelDelegate&gt;" shape="rect" coords="175,168,340,192"/>
<area href="interface_t_t_navigator_view_controller.php" alt="TTNavigatorViewController" shape="rect" coords="0,112,165,136"/>
<area href="interface_t_t_base_view_controller.php" alt="TTBaseViewController" shape="rect" coords="0,56,165,80"/>
<area href="class_u_i_view_controller.php" alt="UIViewController" shape="rect" coords="0,0,165,24"/>
</map>
</div>

<p><a href="class_t_t_extensions_controller-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_t_t_extensions_controller.php#ac7d960d1edf03137e903926f10ae70c1">registerUrlPathsWithNavigator:prefix:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Registers two URLs with the given navigator (e.g.  <a href="#ac7d960d1edf03137e903926f10ae70c1"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A list of all available, loaded, and failed extensions. </p>
<p>This controller is used in conjunction with the <a class="el" href="class_t_t_extension_loader.php" title="The extension loader provides basic utility methods to load extensions once an application has starte...">TTExtensionLoader</a>. It is intended to provide helpful information about the extensions linked in the application. It can also be used as a means of crediting the extensions whose licenses require it.</p>
<dl class="see"><dt><b>See also:</b></dt><dd><a class="el" href="class_t_t_extension_loader.php" title="The extension loader provides basic utility methods to load extensions once an application has starte...">TTExtensionLoader</a> </dd></dl>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="ac7d960d1edf03137e903926f10ae70c1"></a><!-- doxytag: member="TTExtensionsController::registerUrlPathsWithNavigator:prefix:" ref="ac7d960d1edf03137e903926f10ae70c1" args="(TTNavigator *navigator,[prefix] NSString *prefix)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (void) registerUrlPathsWithNavigator: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_navigator.php">TTNavigator</a>*)&nbsp;</td>
          <td class="paramname"> <em>navigator</em></td>
        </tr>
        <tr>
          <td class="paramkey">prefix:</td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_string.php">NSString</a>*)&nbsp;</td>
          <td class="paramname"> <em>prefix</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Registers two URLs with the given navigator (e.g. </p>
<p>with a prefix of "tt://")</p>
<p>* "tt://extensions"                         -&gt; [TTExtensionsController class]
 * @"tt://extensions/(initWithExtensionID:)" -&gt; [<a class="el" href="interface_t_t_extension_info_controller.php" title="Display information about a specific extension.">TTExtensionInfoController</a> class]</p>
<p>You can use any prefix (e.g. "myApp://three20/")</p>
<p>* "myApp://three20/extensions"                         -&gt; [TTExtensionsController class]
 * @"myApp://three20/extensions/(initWithExtensionID:)" -&gt; [<a class="el" href="interface_t_t_extension_info_controller.php" title="Display information about a specific extension.">TTExtensionInfoController</a> class] </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_extensions_controller_8h_source.php">TTExtensionsController.h</a></li>
<li>Three20UI/Sources/TTExtensionsController.m</li>
</ul>
</div>
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