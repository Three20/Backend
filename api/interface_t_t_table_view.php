<!-- This comment will put IE 6, 7 and 8 in quirks mode -->
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
  <meta property="og:image" content="http://github.com/facebook/three20/raw/06cd0abe33ac39d1f509e278e286c6bf1e45e821/samples/Resources/Icon.png"/>
  <meta name="keywords" content="three20 iPhone api open source library uikit tt" />
  <meta name="description" content="API documentation, articles, and tutorials related to the three20 iPhone library." />
  <title>Three20: TTTableView Class Reference</title>
<link href="http://three20.info/css/reset.css" rel="stylesheet" type="text/css"/>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javaScript" src="search/search.js"></script>
<link href="doxygen.css" rel="stylesheet" type="text/css"/>
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
  <li><a href="http://three20.info/tutorials">Tutorials</a></li> 
  <li><a href="http://api.three20.info/">API</a></li> 
  <li><a href="http://three20.info/community">Community</a></li> 
</ul> 
 
<ul class="right-links"> 
  <li><a href="http://<?= $_SERVER['SERVER_NAME']?><?= $_SERVER['REQUEST_URI'] ?>#disqus_thread">Comments</a></li>
</ul> 
 
<div class="leadin"> 
  <h1><a href="http://three20.info/">Three20</a></h1> 
  <h2><a href="http://three20.info/">An open-source library for iOS applications</a></h2> 
</div> <!-- .leadin --> 
 
</div> <!-- .fixed-width --> 
</div> <!-- #header --> 

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
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTTableView Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTTableView" --><!-- doxytag: inherits="UITableView" -->
<p><a class="el" href="interface_t_t_table_view.php" title="TTTableView enhances UITableView to provide support for various Three20 services.">TTTableView</a> enhances <a class="el" href="class_u_i_table_view.php" title="Additions.">UITableView</a> to provide support for various Three20 services.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_table_view_8h_source.php">TTTableView.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTTableView:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_table_view.png" usemap="#TTTableView_map" alt=""/>
  <map id="TTTableView_map" name="TTTableView_map">
<area href="class_u_i_table_view.php" alt="UITableView" shape="rect" coords="0,0,85,24"/>
</map>
</div>

<p><a href="class_t_t_table_view-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a688162a12376eb6314ab5d1c5b4886cb"></a><!-- doxytag: member="TTTableView::_highlightedLabel" ref="a688162a12376eb6314ab5d1c5b4886cb" args="" -->
<a class="el" href="interface_t_t_styled_text_label.php">TTStyledTextLabel</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_highlightedLabel</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aac251f61dee20558d91fc5d4299e3fc7"></a><!-- doxytag: member="TTTableView::_highlightStartPoint" ref="aac251f61dee20558d91fc5d4299e3fc7" args="" -->
CGPoint&nbsp;</td><td class="memItemRight" valign="bottom"><b>_highlightStartPoint</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5c775bb8ac982dc7bf38979f9ae961ee"></a><!-- doxytag: member="TTTableView::_contentOrigin" ref="a5c775bb8ac982dc7bf38979f9ae961ee" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_contentOrigin</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a66620233f3bb28e153f2868348a0009d"></a><!-- doxytag: member="TTTableView::_showShadows" ref="a66620233f3bb28e153f2868348a0009d" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_showShadows</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a32944e385895584869987c97a1c2f29e"></a><!-- doxytag: member="TTTableView::_originShadow" ref="a32944e385895584869987c97a1c2f29e" args="" -->
CAGradientLayer *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_originShadow</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="abcec5325a151b3a7bf58232937b8718d"></a><!-- doxytag: member="TTTableView::_topShadow" ref="abcec5325a151b3a7bf58232937b8718d" args="" -->
CAGradientLayer *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_topShadow</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7a3206d217489d64accbd4f5fb05317b"></a><!-- doxytag: member="TTTableView::_bottomShadow" ref="a7a3206d217489d64accbd4f5fb05317b" args="" -->
CAGradientLayer *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_bottomShadow</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a150e7f95bf58bba7236bd190cefd0b71"></a><!-- doxytag: member="TTTableView::highlightedLabel" ref="a150e7f95bf58bba7236bd190cefd0b71" args="" -->
<a class="el" href="interface_t_t_styled_text_label.php">TTStyledTextLabel</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>highlightedLabel</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8f6d1b4680e2d61760492fdcc8a1cd3f"></a><!-- doxytag: member="TTTableView::contentOrigin" ref="a8f6d1b4680e2d61760492fdcc8a1cd3f" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>contentOrigin</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac74821afa54f556945d3df48612aa8c0"></a><!-- doxytag: member="TTTableView::showShadows" ref="ac74821afa54f556945d3df48612aa8c0" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>showShadows</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p><a class="el" href="interface_t_t_table_view.php" title="TTTableView enhances UITableView to provide support for various Three20 services.">TTTableView</a> enhances <a class="el" href="class_u_i_table_view.php" title="Additions.">UITableView</a> to provide support for various Three20 services. </p>
<p>If you are using TTStyledTextLabels in your table cells, you need to use <a class="el" href="interface_t_t_table_view.php" title="TTTableView enhances UITableView to provide support for various Three20 services.">TTTableView</a> if you want links in your labels to be touchable. </p>
<hr/>The documentation for this class was generated from the following file:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_table_view_8h_source.php">TTTableView.h</a></li>
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


</div> <!-- .fixed-width -->

<div class="fixed-width">
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
