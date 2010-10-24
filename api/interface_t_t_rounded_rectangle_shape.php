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
  <title>Three20: TTRoundedRectangleShape Class Reference</title>
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
<h1>TTRoundedRectangleShape Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTRoundedRectangleShape" --><!-- doxytag: inherits="TTShape" --><div class="dynheader">
Inheritance diagram for TTRoundedRectangleShape:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_rounded_rectangle_shape.png" usemap="#TTRoundedRectangleShape_map" alt=""/>
  <map id="TTRoundedRectangleShape_map" name="TTRoundedRectangleShape_map">
<area href="interface_t_t_shape.php" alt="TTShape" shape="rect" coords="0,56,168,80"/>
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,168,24"/>
</map>
</div>

<p><a href="class_t_t_rounded_rectangle_shape-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a670188fa8ee015333224c8c4277af6f1"></a><!-- doxytag: member="TTRoundedRectangleShape::openPath:" ref="a670188fa8ee015333224c8c4277af6f1" args="(CGRect rect)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>openPath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="abfd858dcc4a2f41252908e879064f839"></a><!-- doxytag: member="TTRoundedRectangleShape::closePath:" ref="abfd858dcc4a2f41252908e879064f839" args="(CGRect rect)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>closePath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac7e23625ff549bed6975956bf91cff33"></a><!-- doxytag: member="TTRoundedRectangleShape::addTopEdgeToPath:lightSource:" ref="ac7e23625ff549bed6975956bf91cff33" args="(CGRect rect,[lightSource] NSInteger lightSource)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addTopEdgeToPath:lightSource:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0164af245f327b826d392e9f1023637b"></a><!-- doxytag: member="TTRoundedRectangleShape::addRightEdgeToPath:lightSource:" ref="a0164af245f327b826d392e9f1023637b" args="(CGRect rect,[lightSource] NSInteger lightSource)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addRightEdgeToPath:lightSource:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7df0bda4370dabf62784363d7093be39"></a><!-- doxytag: member="TTRoundedRectangleShape::addBottomEdgeToPath:lightSource:" ref="a7df0bda4370dabf62784363d7093be39" args="(CGRect rect,[lightSource] NSInteger lightSource)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addBottomEdgeToPath:lightSource:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8825b77343378cf67eee0f561890879a"></a><!-- doxytag: member="TTRoundedRectangleShape::addLeftEdgeToPath:lightSource:" ref="a8825b77343378cf67eee0f561890879a" args="(CGRect rect,[lightSource] NSInteger lightSource)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addLeftEdgeToPath:lightSource:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acc23bcd703aff2c4e2f35275b0ac6292"></a><!-- doxytag: member="TTRoundedRectangleShape::addToPath:" ref="acc23bcd703aff2c4e2f35275b0ac6292" args="(CGRect rect)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_shape.php#acc23bcd703aff2c4e2f35275b0ac6292">addToPath:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Opens the path, adds all edges, and closes the path. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af3806464a794c2c0ee22a4b428b9ac98"></a><!-- doxytag: member="TTRoundedRectangleShape::addInverseToPath:" ref="af3806464a794c2c0ee22a4b428b9ac98" args="(CGRect rect)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addInverseToPath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a10bb79ce6661d0f1ef74f841d39eb0b9"></a><!-- doxytag: member="TTRoundedRectangleShape::insetsForSize:" ref="a10bb79ce6661d0f1ef74f841d39eb0b9" args="(CGSize size)" -->
(UIEdgeInsets)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>insetsForSize:</b></td></tr>
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a121c64a12d35bc27b08a2a80558acbef"></a><!-- doxytag: member="TTRoundedRectangleShape::shapeWithRadius:" ref="a121c64a12d35bc27b08a2a80558acbef" args="(CGFloat radius)" -->
(<a class="el" href="interface_t_t_rounded_rectangle_shape.php">TTRoundedRectangleShape</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>shapeWithRadius:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0a0acd728318165df8459656379b0fdf"></a><!-- doxytag: member="TTRoundedRectangleShape::shapeWithTopLeft:topRight:bottomRight:bottomLeft:" ref="a0a0acd728318165df8459656379b0fdf" args="(CGFloat topLeft,[topRight] CGFloat topRight,[bottomRight] CGFloat bottomRight,[bottomLeft] CGFloat bottomLeft)" -->
(<a class="el" href="interface_t_t_rounded_rectangle_shape.php">TTRoundedRectangleShape</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>shapeWithTopLeft:topRight:bottomRight:bottomLeft:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab9f283e051db640b423130305b056d9e"></a><!-- doxytag: member="TTRoundedRectangleShape::_topLeftRadius" ref="ab9f283e051db640b423130305b056d9e" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_topLeftRadius</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7d68271daac170c2885381da57d96b9c"></a><!-- doxytag: member="TTRoundedRectangleShape::_topRightRadius" ref="a7d68271daac170c2885381da57d96b9c" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_topRightRadius</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a145382c540219f73f61dea9b5347a815"></a><!-- doxytag: member="TTRoundedRectangleShape::_bottomRightRadius" ref="a145382c540219f73f61dea9b5347a815" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_bottomRightRadius</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9045482bbcb266a7229d732a3fb7ea04"></a><!-- doxytag: member="TTRoundedRectangleShape::_bottomLeftRadius" ref="a9045482bbcb266a7229d732a3fb7ea04" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_bottomLeftRadius</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7f8a6ba530e858bba21885e5526aa5ae"></a><!-- doxytag: member="TTRoundedRectangleShape::topLeftRadius" ref="a7f8a6ba530e858bba21885e5526aa5ae" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>topLeftRadius</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aeb44697ce42770f8e0b00abb51db4677"></a><!-- doxytag: member="TTRoundedRectangleShape::topRightRadius" ref="aeb44697ce42770f8e0b00abb51db4677" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>topRightRadius</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0a9cebeebe0b3b9a1498b1210b0dd607"></a><!-- doxytag: member="TTRoundedRectangleShape::bottomRightRadius" ref="a0a9cebeebe0b3b9a1498b1210b0dd607" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>bottomRightRadius</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad4dec746e4418dcad183d4dbdb68af75"></a><!-- doxytag: member="TTRoundedRectangleShape::bottomLeftRadius" ref="ad4dec746e4418dcad183d4dbdb68af75" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>bottomLeftRadius</b></td></tr>
</table>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Style/Headers/<a class="el" href="_t_t_rounded_rectangle_shape_8h_source.php">TTRoundedRectangleShape.h</a></li>
<li>Three20Style/Sources/TTRoundedRectangleShape.m</li>
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
