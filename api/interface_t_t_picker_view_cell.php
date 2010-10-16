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
  <title>Three20: TTPickerViewCell Class Reference</title>
<link href="http://new.three20.info/css/reset.css" rel="stylesheet" type="text/css"/>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javaScript" src="search/search.js"></script>
<link href="doxygen.css" rel="stylesheet" type="text/css"/>
<link href="http://new.three20.info/css/global.css" rel="stylesheet" type="text/css"/>
<link href="http://new.three20.info/css/article.css" rel="stylesheet" type="text/css"/>
<link href="http://new.three20.info/css/headerbar.css" rel="stylesheet" type="text/css"/>
<link href="http://new.three20.info/css/api.css" rel="stylesheet" type="text/css"/>
</head>
<body onload='searchBox.OnSelectItem(0);'>

<div id="page-wrapper">

<!-- HEADER --> 
 
<div id="header"> 
<div class="fixed-width"> 
 
<ul class="right-links"> 
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTPickerViewCell Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTPickerViewCell" --><!-- doxytag: inherits="TTView" --><div class="dynheader">
Inheritance diagram for TTPickerViewCell:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_picker_view_cell.png" usemap="#TTPickerViewCell_map" alt=""/>
  <map id="TTPickerViewCell_map" name="TTPickerViewCell_map">
<area href="interface_t_t_view.php" alt="TTView" shape="rect" coords="64,56,182,80"/>
<area href="class_u_i_view.php" alt="UIView" shape="rect" coords="0,0,118,24"/>
<area href="protocol_t_t_style_delegate-p.php" alt="&lt;TTStyleDelegate&gt;" shape="rect" coords="128,0,246,24"/>
</map>
</div>

<p><a href="class_t_t_picker_view_cell-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad88f3307be7d49bf55b419941a1eabbd"></a><!-- doxytag: member="TTPickerViewCell::drawContent:" ref="ad88f3307be7d49bf55b419941a1eabbd" args="(CGRect rect)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>drawContent:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6ca8c9a930241745c77280b6e5296a6b"></a><!-- doxytag: member="TTPickerViewCell::textForLayerWithStyle:" ref="a6ca8c9a930241745c77280b6e5296a6b" args="(TTStyle *style)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textForLayerWithStyle:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a61b305018c41e4b8596d477337614e28"></a><!-- doxytag: member="TTPickerViewCell::imageForLayerWithStyle:" ref="a61b305018c41e4b8596d477337614e28" args="(TTStyle *style)" -->
(<a class="el" href="class_u_i_image.php">UIImage</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>imageForLayerWithStyle:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a940c09a71f143ac572cf3ebaddeb127e"></a><!-- doxytag: member="TTPickerViewCell::drawLayer:withStyle:" ref="a940c09a71f143ac572cf3ebaddeb127e" args="(TTStyleContext *context,[withStyle] TTStyle *style)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>drawLayer:withStyle:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a970532b9012d552b64747e5edd20ffef"></a><!-- doxytag: member="TTPickerViewCell::_object" ref="a970532b9012d552b64747e5edd20ffef" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>_object</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0d7a4babcb71abcfc8245ca99d0df778"></a><!-- doxytag: member="TTPickerViewCell::_labelView" ref="a0d7a4babcb71abcfc8245ca99d0df778" args="" -->
UILabel *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_labelView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad4344b7a3912646597fb9cc55858b6ad"></a><!-- doxytag: member="TTPickerViewCell::_selected" ref="ad4344b7a3912646597fb9cc55858b6ad" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_selected</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a97853b2c7509081da5ac2fc9cf89976f"></a><!-- doxytag: member="TTPickerViewCell::_style" ref="a97853b2c7509081da5ac2fc9cf89976f" args="" -->
<a class="el" href="interface_t_t_style.php">TTStyle</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_style</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aea5bd0ee9481a7012f50ea91cd7501bf"></a><!-- doxytag: member="TTPickerViewCell::_layout" ref="aea5bd0ee9481a7012f50ea91cd7501bf" args="" -->
<a class="el" href="interface_t_t_layout.php">TTLayout</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_layout</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="afcf22a2ffb70e1b6bfb8c24fc0cbc9bd"></a><!-- doxytag: member="TTPickerViewCell::object" ref="afcf22a2ffb70e1b6bfb8c24fc0cbc9bd" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>object</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aeb76aa694b9800688e0bf4fae6bc49a3"></a><!-- doxytag: member="TTPickerViewCell::label" ref="aeb76aa694b9800688e0bf4fae6bc49a3" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>label</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad577954d49fd4cd7a89d56edd3daab7f"></a><!-- doxytag: member="TTPickerViewCell::font" ref="ad577954d49fd4cd7a89d56edd3daab7f" args="" -->
<a class="el" href="class_u_i_font.php">UIFont</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>font</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1abe3070d6752adf0d3bb7bed6ffe520"></a><!-- doxytag: member="TTPickerViewCell::selected" ref="a1abe3070d6752adf0d3bb7bed6ffe520" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>selected</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a832ab8c5e49539942c6d40c66fc80c78"></a><!-- doxytag: member="TTPickerViewCell::style" ref="a832ab8c5e49539942c6d40c66fc80c78" args="" -->
<a class="el" href="interface_t_t_style.php">TTStyle</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>style</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aae1379b4316b8434d095325bfac7b70a"></a><!-- doxytag: member="TTPickerViewCell::layout" ref="aae1379b4316b8434d095325bfac7b70a" args="" -->
<a class="el" href="interface_t_t_layout.php">TTLayout</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>layout</b></td></tr>
</table>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_picker_view_cell_8h_source.php">TTPickerViewCell.h</a></li>
<li>Three20UI/Sources/TTPickerViewCell.m</li>
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
