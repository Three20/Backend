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
  <title>Three20: TTThumbsTableViewCell Class Reference</title>
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
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTThumbsTableViewCell Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTThumbsTableViewCell" --><!-- doxytag: inherits="TTTableViewCell" --><div class="dynheader">
Inheritance diagram for TTThumbsTableViewCell:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_thumbs_table_view_cell.png" usemap="#TTThumbsTableViewCell_map" alt=""/>
  <map id="TTThumbsTableViewCell_map" name="TTThumbsTableViewCell_map">
<area href="interface_t_t_table_view_cell.php" alt="TTTableViewCell" shape="rect" coords="0,0,150,24"/>
</map>
</div>

<p><a href="class_t_t_thumbs_table_view_cell-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9aa642c29c43b8143ed61be98d436391"></a><!-- doxytag: member="TTThumbsTableViewCell::suspendLoading:" ref="a9aa642c29c43b8143ed61be98d436391" args="(BOOL suspended)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>suspendLoading:</b></td></tr>
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a50a7006ec9fb5bb4533b6100f4f56dbb"></a><!-- doxytag: member="TTThumbsTableViewCell::tableView:rowHeightForObject:" ref="a50a7006ec9fb5bb4533b6100f4f56dbb" args="(UITableView *tableView,[rowHeightForObject] id object)" -->
(CGFloat)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_t_t_table_view_cell.php#a50a7006ec9fb5bb4533b6100f4f56dbb">tableView:rowHeightForObject:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Measure the height of the row with the object that will be assigned to the cell. <br/></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aeeaf6be13476b1f4d4a80e79280f0c44"></a><!-- doxytag: member="TTThumbsTableViewCell::_photo" ref="aeeaf6be13476b1f4d4a80e79280f0c44" args="" -->
id&lt; <a class="el" href="protocol_t_t_photo-p.php">TTPhoto</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>_photo</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2d32c26b326adf8de74b8c409aa1ffac"></a><!-- doxytag: member="TTThumbsTableViewCell::_thumbViews" ref="a2d32c26b326adf8de74b8c409aa1ffac" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_thumbViews</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a57fbaff60212c04a3625dcd21d17ec35"></a><!-- doxytag: member="TTThumbsTableViewCell::_thumbSize" ref="a57fbaff60212c04a3625dcd21d17ec35" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_thumbSize</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a80cb69b77971db43a7fea41f5ed00cc1"></a><!-- doxytag: member="TTThumbsTableViewCell::_thumbOrigin" ref="a80cb69b77971db43a7fea41f5ed00cc1" args="" -->
CGPoint&nbsp;</td><td class="memItemRight" valign="bottom"><b>_thumbOrigin</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="afb7ca040dd294860182447b9ee06134b"></a><!-- doxytag: member="TTThumbsTableViewCell::_columnCount" ref="afb7ca040dd294860182447b9ee06134b" args="" -->
NSInteger&nbsp;</td><td class="memItemRight" valign="bottom"><b>_columnCount</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a95a22613275e61c3369dd6161d38ca9a"></a><!-- doxytag: member="TTThumbsTableViewCell::_delegate" ref="a95a22613275e61c3369dd6161d38ca9a" args="" -->
id&lt; <a class="el" href="protocol_t_t_thumbs_table_view_cell_delegate-p.php">TTThumbsTableViewCellDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>_delegate</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1eabd45d222d28cedd97cdd41cd3f435"></a><!-- doxytag: member="TTThumbsTableViewCell::photo" ref="a1eabd45d222d28cedd97cdd41cd3f435" args="" -->
id&lt; <a class="el" href="protocol_t_t_photo-p.php">TTPhoto</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>photo</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8d2b7677296a7ce4188725d2c933d963"></a><!-- doxytag: member="TTThumbsTableViewCell::thumbSize" ref="a8d2b7677296a7ce4188725d2c933d963" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>thumbSize</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a24c083ce414e28508b7e394a0a85addb"></a><!-- doxytag: member="TTThumbsTableViewCell::thumbOrigin" ref="a24c083ce414e28508b7e394a0a85addb" args="" -->
CGPoint&nbsp;</td><td class="memItemRight" valign="bottom"><b>thumbOrigin</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae3369e1cd535a379b0a2301f861fcd07"></a><!-- doxytag: member="TTThumbsTableViewCell::columnCount" ref="ae3369e1cd535a379b0a2301f861fcd07" args="" -->
NSInteger&nbsp;</td><td class="memItemRight" valign="bottom"><b>columnCount</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac04ffca797cedcb2f219643189b4e33f"></a><!-- doxytag: member="TTThumbsTableViewCell::delegate" ref="ac04ffca797cedcb2f219643189b4e33f" args="" -->
id&lt; <a class="el" href="protocol_t_t_thumbs_table_view_cell_delegate-p.php">TTThumbsTableViewCellDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>delegate</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7fbacae551db2745f10b0d6cf088b45c"></a><!-- doxytag: member="TTThumbsTableViewCell::object" ref="a7fbacae551db2745f10b0d6cf088b45c" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>object</b></td></tr>
</table>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_thumbs_table_view_cell_8h_source.php">TTThumbsTableViewCell.h</a></li>
<li>Three20UI/Sources/TTThumbsTableViewCell.m</li>
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

<noscript><p><img alt="Clicky" width="1" height="1" src="http://static.getclicky.com/155532ns.gif" /></p></noscript>

<script type="text/javascript">//<![CDATA[

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

//]]>
</script>

<script type="text/javascript" src="http://static.getclicky.com/js"></script>

<script type="text/javascript">//<![CDATA[
clicky.init(155532);
//]]>
</script>

<script type="text/javascript">//<![CDATA[

try {
var pageTracker = _gat._getTracker("UA-11762059-1");
pageTracker._trackPageview();
} catch(err) {}
//]]>
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
