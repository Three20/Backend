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
  <title>Three20: TTCSSStyleSheet Class Reference</title>
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

<div id="header">
<div class="fixed-width">
<ul class="left-links">
  <li>&larr; <a href="http://new.three20.info/">Home</a></li>
</ul>
<ul class="right-links">
  <li><a href="http://<?= $_SERVER['SERVER_NAME']?><?= $_SERVER['REQUEST_URI'] ?>#disqus_thread">Comments</a></li>
</ul>
</div> <!-- .fixed-width -->
</div>

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
<a href="#properties">Properties</a> &#124;
<a href="#pri-attribs">Private Attributes</a>  </div>
  <div class="headertitle">
<h1>TTCSSStyleSheet Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTCSSStyleSheet" --><!-- doxytag: inherits="NSObject" -->
<p>A general purpose CSS style sheet object for accessing a CSS style sheet's properties.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_c_s_s_style_sheet_8h_source.php">TTCSSStyleSheet.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTCSSStyleSheet:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_c_s_s_style_sheet.png" usemap="#TTCSSStyleSheet_map" alt=""/>
  <map id="TTCSSStyleSheet_map" name="TTCSSStyleSheet_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,111,24"/>
</map>
</div>

<p><a href="class_t_t_c_s_s_style_sheet-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#a4acfa04660dec1ea3d2400a142d31c70">loadFromFilename:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Load the style sheet into memory from disk.  <a href="#a4acfa04660dec1ea3d2400a142d31c70"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="afee22a3bead36bac2caa54bc3eabbfdc"></a><!-- doxytag: member="TTCSSStyleSheet::addStyleSheet:" ref="afee22a3bead36bac2caa54bc3eabbfdc" args="(TTCSSStyleSheet *styleSheet)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#afee22a3bead36bac2caa54bc3eabbfdc">addStyleSheet:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Add a stylesheet to this one, overriding any properties as expected. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a61047c7d2218ef3225ecd797e49ead9e"></a><!-- doxytag: member="TTCSSStyleSheet::colorWithCssSelector:forState:" ref="a61047c7d2218ef3225ecd797e49ead9e" args="(NSString *selector,[forState] UIControlState state)" -->
(<a class="el" href="class_u_i_color.php">UIColor</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#a61047c7d2218ef3225ecd797e49ead9e">colorWithCssSelector:forState:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get (text) color from a specific rule set. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5c1e127cd3e97c3494b1e094dbb436be"></a><!-- doxytag: member="TTCSSStyleSheet::backgroundColorWithCssSelector:forState:" ref="a5c1e127cd3e97c3494b1e094dbb436be" args="(NSString *selector,[forState] UIControlState state)" -->
(<a class="el" href="class_u_i_color.php">UIColor</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#a5c1e127cd3e97c3494b1e094dbb436be">backgroundColorWithCssSelector:forState:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get background-color from a specific rule set. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5b49dbbe0b7facea387782bb18c30b2b"></a><!-- doxytag: member="TTCSSStyleSheet::fontWithCssSelector:forState:" ref="a5b49dbbe0b7facea387782bb18c30b2b" args="(NSString *selector,[forState] UIControlState state)" -->
(<a class="el" href="class_u_i_font.php">UIFont</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#a5b49dbbe0b7facea387782bb18c30b2b">fontWithCssSelector:forState:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get font from a specific rule set. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a93fdfb60df8dfc3c257675a97c0a9b0a"></a><!-- doxytag: member="TTCSSStyleSheet::textShadowColorWithCssSelector:forState:" ref="a93fdfb60df8dfc3c257675a97c0a9b0a" args="(NSString *selector,[forState] UIControlState state)" -->
(<a class="el" href="class_u_i_color.php">UIColor</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#a93fdfb60df8dfc3c257675a97c0a9b0a">textShadowColorWithCssSelector:forState:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get text shadow color from a specific rule set. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a66888cb43b562feb647dad43be74e534"></a><!-- doxytag: member="TTCSSStyleSheet::textShadowOffsetWithCssSelector:forState:" ref="a66888cb43b562feb647dad43be74e534" args="(NSString *selector,[forState] UIControlState state)" -->
(CGSize)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#a66888cb43b562feb647dad43be74e534">textShadowOffsetWithCssSelector:forState:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get text shadow offset from a specific rule set. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5559250630ded3bb4f96c612b1365ea6"></a><!-- doxytag: member="TTCSSStyleSheet::freeMemory" ref="a5559250630ded3bb4f96c612b1365ea6" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_c_s_s_style_sheet.php#a5559250630ded3bb4f96c612b1365ea6">freeMemory</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Release all cached data. <br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab257116e713634b7c7fd822f0f7e976f"></a><!-- doxytag: member="TTCSSStyleSheet::cssStyles" ref="ab257116e713634b7c7fd822f0f7e976f" args="" -->
<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>cssStyles</b></td></tr>
<tr><td colspan="2"><h2><a name="pri-attribs"></a>
Private Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af89ba837d92aea52ca581d34b0b71c89"></a><!-- doxytag: member="TTCSSStyleSheet::_cssStyles" ref="af89ba837d92aea52ca581d34b0b71c89" args="" -->
<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_cssStyles</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac4fa041512298ca380e2e55b184c8361"></a><!-- doxytag: member="TTCSSStyleSheet::_cachedCssStyles" ref="ac4fa041512298ca380e2e55b184c8361" args="" -->
<a class="el" href="class_n_s_mutable_dictionary.php">NSMutableDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_cachedCssStyles</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a93c46fd2684d9ac24b5138b8dd4422b6"></a><!-- doxytag: member="TTCSSStyleSheet::_colorLookupTable" ref="a93c46fd2684d9ac24b5138b8dd4422b6" args="" -->
<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_colorLookupTable</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A general purpose CSS style sheet object for accessing a CSS style sheet's properties. </p>
<p>This is useful if you want to use style sheets to manually customize certain aspects of your UI.</p>
<p>Example apps: three20/samples/Style/TTCSSStyleSheets </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a4acfa04660dec1ea3d2400a142d31c70"></a><!-- doxytag: member="TTCSSStyleSheet::loadFromFilename:" ref="a4acfa04660dec1ea3d2400a142d31c70" args="(NSString *filename)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) loadFromFilename: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_string.php">NSString</a>*)&nbsp;</td>
          <td class="paramname"> <em>filename</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Load the style sheet into memory from disk. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>NO if the file does not exist. </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>extThree20CSSStyle/Headers/<a class="el" href="_t_t_c_s_s_style_sheet_8h_source.php">TTCSSStyleSheet.h</a></li>
<li>extThree20CSSStyle/Sources/TTCSSStyleSheet.m</li>
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