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
  <title>Three20: TTBaseViewController Class Reference</title>
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
<h1>TTBaseViewController Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTBaseViewController" --><!-- doxytag: inherits="UIViewController" -->
<p>A view controller with some useful additions.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_base_view_controller_8h_source.php">TTBaseViewController.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTBaseViewController:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_base_view_controller.png" usemap="#TTBaseViewController_map" alt=""/>
  <map id="TTBaseViewController_map" name="TTBaseViewController_map">
<area href="class_u_i_view_controller.php" alt="UIViewController" shape="rect" coords="239,0,404,24"/>
<area href="interface_t_t_navigator_view_controller.php" alt="TTNavigatorViewController" shape="rect" coords="239,112,404,136"/>
<area href="interface_t_t_view_controller.php" alt="TTViewController" shape="rect" coords="239,168,404,192"/>
<area href="interface_t_t_message_controller.php" alt="TTMessageController" shape="rect" coords="0,224,165,248"/>
<area href="interface_t_t_model_view_controller.php" alt="TTModelViewController" shape="rect" coords="481,224,646,248"/>
<area href="interface_t_t_photo_view_controller.php" alt="TTPhotoViewController" shape="rect" coords="0,280,165,304"/>
<area href="interface_t_t_popup_view_controller.php" alt="TTPopupViewController" shape="rect" coords="262,280,427,304"/>
<area href="interface_t_t_table_view_controller.php" alt="TTTableViewController" shape="rect" coords="700,280,865,304"/>
<area href="interface_t_t_web_controller.php" alt="TTWebController" shape="rect" coords="875,280,1040,304"/>
<area href="interface_t_t_action_sheet_controller.php" alt="TTActionSheetController" shape="rect" coords="0,336,165,360"/>
<area href="interface_t_t_alert_view_controller.php" alt="TTAlertViewController" shape="rect" coords="175,336,340,360"/>
<area href="interface_t_t_post_controller.php" alt="TTPostController" shape="rect" coords="350,336,515,360"/>
<area href="interface_t_t_text_bar_controller.php" alt="TTTextBarController" shape="rect" coords="525,336,690,360"/>
<area href="interface_t_t_thumbs_view_controller.php" alt="TTThumbsViewController" shape="rect" coords="700,336,865,360"/>
</map>
</div>

<p><a href="class_t_t_base_view_controller-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae517ac05a60aff4c64dadfdf5e0be548"></a><!-- doxytag: member="TTBaseViewController::keyboardWillAppear:withBounds:" ref="ae517ac05a60aff4c64dadfdf5e0be548" args="(BOOL animated,[withBounds] CGRect bounds)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_base_view_controller.php#ae517ac05a60aff4c64dadfdf5e0be548">keyboardWillAppear:withBounds:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Sent to the controller before the keyboard slides in. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3b370029749e85fe261726375ba13289"></a><!-- doxytag: member="TTBaseViewController::keyboardWillDisappear:withBounds:" ref="a3b370029749e85fe261726375ba13289" args="(BOOL animated,[withBounds] CGRect bounds)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_base_view_controller.php#a3b370029749e85fe261726375ba13289">keyboardWillDisappear:withBounds:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Sent to the controller before the keyboard slides out. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1405d3b2f2c3d4e1db7c7e29226c2e74"></a><!-- doxytag: member="TTBaseViewController::keyboardDidAppear:withBounds:" ref="a1405d3b2f2c3d4e1db7c7e29226c2e74" args="(BOOL animated,[withBounds] CGRect bounds)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_base_view_controller.php#a1405d3b2f2c3d4e1db7c7e29226c2e74">keyboardDidAppear:withBounds:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Sent to the controller after the keyboard has slid in. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad27dfcbbc6587b779af6231825679be0"></a><!-- doxytag: member="TTBaseViewController::keyboardDidDisappear:withBounds:" ref="ad27dfcbbc6587b779af6231825679be0" args="(BOOL animated,[withBounds] CGRect bounds)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_base_view_controller.php#ad27dfcbbc6587b779af6231825679be0">keyboardDidDisappear:withBounds:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Sent to the controller after the keyboard has slid out. <br/></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af73a75af4a8540e9a0824dfde0ff7ba9"></a><!-- doxytag: member="TTBaseViewController::_frozenState" ref="af73a75af4a8540e9a0824dfde0ff7ba9" args="" -->
<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_frozenState</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a043ebeb2719175e6b4fd09ff8e6dc7eb"></a><!-- doxytag: member="TTBaseViewController::_navigationBarStyle" ref="a043ebeb2719175e6b4fd09ff8e6dc7eb" args="" -->
UIBarStyle&nbsp;</td><td class="memItemRight" valign="bottom"><b>_navigationBarStyle</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9539b16b96e55313d37a24a517d91aa1"></a><!-- doxytag: member="TTBaseViewController::_navigationBarTintColor" ref="a9539b16b96e55313d37a24a517d91aa1" args="" -->
<a class="el" href="class_u_i_color.php">UIColor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_navigationBarTintColor</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9ba256d9d10c48e1f20b5ec266186452"></a><!-- doxytag: member="TTBaseViewController::_statusBarStyle" ref="a9ba256d9d10c48e1f20b5ec266186452" args="" -->
UIStatusBarStyle&nbsp;</td><td class="memItemRight" valign="bottom"><b>_statusBarStyle</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a92713568320087178a7ec813edd761fa"></a><!-- doxytag: member="TTBaseViewController::_isViewAppearing" ref="a92713568320087178a7ec813edd761fa" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_isViewAppearing</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a78f0448e948f1157cf6ba0a2d2f21d59"></a><!-- doxytag: member="TTBaseViewController::_hasViewAppeared" ref="a78f0448e948f1157cf6ba0a2d2f21d59" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_hasViewAppeared</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6d7348edcd90eb5573452996da10b0c8"></a><!-- doxytag: member="TTBaseViewController::_autoresizesForKeyboard" ref="a6d7348edcd90eb5573452996da10b0c8" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_autoresizesForKeyboard</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">UIBarStyle&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_base_view_controller.php#a0d8ab3d6c6b655258293c2df842d161b">navigationBarStyle</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The style of the navigation bar when this view controller is pushed onto a navigation controller.  <a href="#a0d8ab3d6c6b655258293c2df842d161b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_u_i_color.php">UIColor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_base_view_controller.php#af9f360ea82a7008a4cdb785765ca368d">navigationBarTintColor</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The color of the navigation bar when this view controller is pushed onto a navigation controller.  <a href="#af9f360ea82a7008a4cdb785765ca368d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">UIStatusBarStyle&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_base_view_controller.php#a9fbdc64e7c1d0e33c6e5c18c637484f7">statusBarStyle</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The style of the status bar when this view controller is appearing.  <a href="#a9fbdc64e7c1d0e33c6e5c18c637484f7"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aba404e0d3d915055ce87f45191c2be8d"></a><!-- doxytag: member="TTBaseViewController::hasViewAppeared" ref="aba404e0d3d915055ce87f45191c2be8d" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_base_view_controller.php#aba404e0d3d915055ce87f45191c2be8d">hasViewAppeared</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The view has appeared at least once and hasn't been removed due to a memory warning. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="afeb4bf49b4efd4199f03e32dc793c87d"></a><!-- doxytag: member="TTBaseViewController::isViewAppearing" ref="afeb4bf49b4efd4199f03e32dc793c87d" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_base_view_controller.php#afeb4bf49b4efd4199f03e32dc793c87d">isViewAppearing</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The view is about to appear and has not appeared yet. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9c53a69ddcc3e4d4f8eef61d51d98c75"></a><!-- doxytag: member="TTBaseViewController::autoresizesForKeyboard" ref="a9c53a69ddcc3e4d4f8eef61d51d98c75" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_base_view_controller.php#a9c53a69ddcc3e4d4f8eef61d51d98c75">autoresizesForKeyboard</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Determines if the view will be resized automatically to fit the keyboard. <br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A view controller with some useful additions. </p>
<hr/><h2>Property Documentation</h2>
<a class="anchor" id="a0d8ab3d6c6b655258293c2df842d161b"></a><!-- doxytag: member="TTBaseViewController::navigationBarStyle" ref="a0d8ab3d6c6b655258293c2df842d161b" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (UIBarStyle) navigationBarStyle<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The style of the navigation bar when this view controller is pushed onto a navigation controller. </p>
<p>UIBarStyleDefault </p>

</div>
</div>
<a class="anchor" id="af9f360ea82a7008a4cdb785765ca368d"></a><!-- doxytag: member="TTBaseViewController::navigationBarTintColor" ref="af9f360ea82a7008a4cdb785765ca368d" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_u_i_color.php">UIColor</a>*) navigationBarTintColor<code> [read, write, retain]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The color of the navigation bar when this view controller is pushed onto a navigation controller. </p>
<p>TTSTYLEVAR(navigationBarTintColor) </p>

</div>
</div>
<a class="anchor" id="a9fbdc64e7c1d0e33c6e5c18c637484f7"></a><!-- doxytag: member="TTBaseViewController::statusBarStyle" ref="a9fbdc64e7c1d0e33c6e5c18c637484f7" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (UIStatusBarStyle) statusBarStyle<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The style of the status bar when this view controller is appearing. </p>
<p>UIStatusBarStyleDefault </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UICommon/Headers/<a class="el" href="_t_t_base_view_controller_8h_source.php">TTBaseViewController.h</a></li>
<li>Three20UICommon/Sources/TTBaseViewController.m</li>
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
