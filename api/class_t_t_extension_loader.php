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
<title>Three20 API: TTExtensionLoader Class Reference</title>
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
  <li><a href="http://forums.three20.info/">Forums</a></li> 
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
<h1>TTExtensionLoader Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTExtensionLoader" --><!-- doxytag: inherits="NSObject" -->
<p>The extension loader provides basic utility methods to load extensions once an application has started running.  
<a href="#_details">More...</a></p>
<div class="dynheader">
Inheritance diagram for TTExtensionLoader:</div>
<div class="dyncontent">
 <div class="center">
  <img src="class_t_t_extension_loader.png" usemap="#TTExtensionLoader_map" alt=""/>
  <map id="TTExtensionLoader_map" name="TTExtensionLoader_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,120,24"/>
</map>
</div>

<p><a href="class_t_t_extension_loader-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="class_t_t_extension_loader.php#a6e040bfa95efed1c343117882a68276b">loadAllExtensions</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Load all extensions that provide a method of the following signature:</p>
<ul>
<li>(BOOL)loadExtensionNamed&lt;extension name&gt; </li>
</ul>
 <a href="#a6e040bfa95efed1c343117882a68276b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="class_t_t_extension_loader.php#a0c6530e9ab47bf3aed6324db14bd8c9f">availableExtensions</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Retrieve the map of available extensions.  <a href="#a0c6530e9ab47bf3aed6324db14bd8c9f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="class_t_t_extension_loader.php#a972603a38d7c1f5c483fe02c71712fb4">loadedExtensions</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Retrieve the map of loaded extensions.  <a href="#a972603a38d7c1f5c483fe02c71712fb4"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="class_t_t_extension_loader.php#a9259d0f820e0fb009cd8aff29fe632ad">failedExtensions</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Retrieve the map of extensions that failed to load.  <a href="#a9259d0f820e0fb009cd8aff29fe632ad"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>The extension loader provides basic utility methods to load extensions once an application has started running. </p>
<p>[<a class="el" href="class_t_t_extension_loader.php" title="The extension loader provides basic utility methods to load extensions once an application has starte...">TTExtensionLoader</a> loadAllExtensions];</p>
<p>is likely the only method you'll need to use.</p>
<p>How it works:</p>
<p>An extension creates a <a class="el" href="class_t_t_extension_loader.php" title="The extension loader provides basic utility methods to load extensions once an application has starte...">TTExtensionLoader</a> category, e.g.:</p>
<p>The extension then implements a method in this category with the prefix "loadExtensionNamed"</p>
<ul>
<li>(BOOL)loadExtensionNamedThree20XML;</li>
</ul>
<p>This method will be called when loadAllExtensions is called and should be used to initialize any extension-specific functionality. A simple example of this might be to register some global navigator URLs for use by the application.</p>
<p>The extension can then optionally implement a second method with the prefix "extensionInfoNamed". The text after the prefix should match that of the load method.</p>
<ul>
<li>(TTExtensionInfo*)extensionInfoNamedThree20XML;</li>
</ul>
<p>This method should return an autoreleased <a class="el" href="interface_t_t_extension_info.php">TTExtensionInfo</a> object that has been populated with any information the extension wishes to provide. If this method isn't implemented, a default <a class="el" href="interface_t_t_extension_info.php">TTExtensionInfo</a> object will be created. </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a0c6530e9ab47bf3aed6324db14bd8c9f"></a><!-- doxytag: member="TTExtensionLoader::availableExtensions" ref="a0c6530e9ab47bf3aed6324db14bd8c9f" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *) availableExtensions </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Retrieve the map of available extensions. </p>
<p>Format: [(NSString*)identifier] =&gt; (TTExtensionInfo*)extension </p>

</div>
</div>
<a class="anchor" id="a9259d0f820e0fb009cd8aff29fe632ad"></a><!-- doxytag: member="TTExtensionLoader::failedExtensions" ref="a9259d0f820e0fb009cd8aff29fe632ad" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *) failedExtensions </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Retrieve the map of extensions that failed to load. </p>
<p>Format: [(NSString*)identifier] =&gt; (TTExtensionInfo*)extension </p>

</div>
</div>
<a class="anchor" id="a6e040bfa95efed1c343117882a68276b"></a><!-- doxytag: member="TTExtensionLoader::loadAllExtensions" ref="a6e040bfa95efed1c343117882a68276b" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (void) loadAllExtensions </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Load all extensions that provide a method of the following signature:</p>
<ul>
<li>(BOOL)loadExtensionNamed&lt;extension name&gt; </li>
</ul>
</p>
<p>For example:</p>
<ul>
<li>(BOOL)loadExtensionNamedThree20XML </li>
</ul>

</div>
</div>
<a class="anchor" id="a972603a38d7c1f5c483fe02c71712fb4"></a><!-- doxytag: member="TTExtensionLoader::loadedExtensions" ref="a972603a38d7c1f5c483fe02c71712fb4" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *) loadedExtensions </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Retrieve the map of loaded extensions. </p>
<p>Format: [(NSString*)identifier] =&gt; (TTExtensionInfo*)extension </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>extThree20CSSStyle/Sources/TTExtensionLoader.m</li>
<li>Three20Core/Headers/<a class="el" href="_three20_core_2_headers_2_t_t_extension_loader_8h_source.php">TTExtensionLoader.h</a></li>
<li>Three20Core/Sources/TTExtensionLoader.m</li>
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
