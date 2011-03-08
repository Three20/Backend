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
<title>Three20 API: TTStyledNode Class Reference</title>
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
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTStyledNode Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTStyledNode" --><!-- doxytag: inherits="NSObject" --><div class="dynheader">
Inheritance diagram for TTStyledNode:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_styled_node.png" usemap="#TTStyledNode_map" alt=""/>
  <map id="TTStyledNode_map" name="TTStyledNode_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="316,0,464,24"/>
<area href="interface_t_t_styled_element.php" alt="TTStyledElement" shape="rect" coords="237,112,385,136"/>
<area href="interface_t_t_styled_text_node.php" alt="TTStyledTextNode" shape="rect" coords="395,112,543,136"/>
<area href="interface_t_t_styled_block.php" alt="TTStyledBlock" shape="rect" coords="0,168,148,192"/>
<area href="interface_t_t_styled_image_node.php" alt="TTStyledImageNode" shape="rect" coords="158,168,306,192"/>
<area href="interface_t_t_styled_inline.php" alt="TTStyledInline" shape="rect" coords="316,168,464,192"/>
<area href="interface_t_t_styled_inline_block.php" alt="TTStyledInlineBlock" shape="rect" coords="632,168,780,192"/>
<area href="interface_t_t_styled_line_break_node.php" alt="TTStyledLineBreakNode" shape="rect" coords="0,224,148,248"/>
<area href="interface_t_t_styled_bold_node.php" alt="TTStyledBoldNode" shape="rect" coords="158,224,306,248"/>
<area href="interface_t_t_styled_italic_node.php" alt="TTStyledItalicNode" shape="rect" coords="316,224,464,248"/>
<area href="interface_t_t_styled_link_node.php" alt="TTStyledLinkNode" shape="rect" coords="474,224,622,248"/>
<area href="interface_t_t_styled_button_node.php" alt="TTStyledButtonNode" shape="rect" coords="632,224,780,248"/>
</map>
</div>

<p><a href="class_t_t_styled_node-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a86bd31659947964a2f27d3259a1f4ce4"></a><!-- doxytag: member="TTStyledNode::initWithNextSibling:" ref="a86bd31659947964a2f27d3259a1f4ce4" args="(TTStyledNode *nextSibling)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>initWithNextSibling:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acfcd75a1ab39421de4d3f15c4b40dab2"></a><!-- doxytag: member="TTStyledNode::ancestorOrSelfWithClass:" ref="acfcd75a1ab39421de4d3f15c4b40dab2" args="(Class cls)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>ancestorOrSelfWithClass:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7d19d03ec56e935488cc0b8f4221a164"></a><!-- doxytag: member="TTStyledNode::performDefaultAction" ref="a7d19d03ec56e935488cc0b8f4221a164" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>performDefaultAction</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6b6c120e7159e5b09005693cbc566e07"></a><!-- doxytag: member="TTStyledNode::findLastSibling:" ref="a6b6c120e7159e5b09005693cbc566e07" args="(TTStyledNode *sibling)" -->
(<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>findLastSibling:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a95c7cec520b0051e81dbce41df616c43"></a><!-- doxytag: member="TTStyledNode::_nextSibling" ref="a95c7cec520b0051e81dbce41df616c43" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_nextSibling</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1860f1867bbb63227bf18a39bc0fcd8e"></a><!-- doxytag: member="TTStyledNode::_parentNode" ref="a1860f1867bbb63227bf18a39bc0fcd8e" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_parentNode</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aff626f3d41072c2bb2c12db0359030da"></a><!-- doxytag: member="TTStyledNode::nextSibling" ref="aff626f3d41072c2bb2c12db0359030da" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>nextSibling</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6a880851326a4579f38311c99c3f3f0a"></a><!-- doxytag: member="TTStyledNode::parentNode" ref="a6a880851326a4579f38311c99c3f3f0a" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>parentNode</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af7777700f339138c866175a1eb42a9f7"></a><!-- doxytag: member="TTStyledNode::outerText" ref="af7777700f339138c866175a1eb42a9f7" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>outerText</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3040f85cfa00ef660106d344c9fc3803"></a><!-- doxytag: member="TTStyledNode::outerHTML" ref="a3040f85cfa00ef660106d344c9fc3803" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>outerHTML</b></td></tr>
</table>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Style/Headers/<a class="el" href="_t_t_styled_node_8h_source.php">TTStyledNode.h</a></li>
<li>Three20Style/Sources/TTStyledNode.m</li>
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
