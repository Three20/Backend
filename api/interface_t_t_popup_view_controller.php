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
<title>Three20 API: TTPopupViewController Class Reference</title>
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
<a href="#pub-methods">Public Member Functions</a>  </div>
  <div class="headertitle">
<h1>TTPopupViewController Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTPopupViewController" --><!-- doxytag: inherits="TTModelViewController" -->
<p>A view controller which, when displayed modally, inserts its view over the parent controller.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_popup_view_controller_8h_source.php">TTPopupViewController.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTPopupViewController:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_popup_view_controller.png" usemap="#TTPopupViewController_map" alt=""/>
  <map id="TTPopupViewController_map" name="TTPopupViewController_map">
<area href="interface_t_t_model_view_controller.php" alt="TTModelViewController" shape="rect" coords="262,224,427,248"/>
<area href="interface_t_t_view_controller.php" alt="TTViewController" shape="rect" coords="175,168,340,192"/>
<area href="protocol_t_t_model_delegate-p.php" alt="&lt;TTModelDelegate&gt;" shape="rect" coords="350,168,515,192"/>
<area href="interface_t_t_navigator_view_controller.php" alt="TTNavigatorViewController" shape="rect" coords="175,112,340,136"/>
<area href="interface_t_t_base_view_controller.php" alt="TTBaseViewController" shape="rect" coords="175,56,340,80"/>
<area href="class_u_i_view_controller.php" alt="UIViewController" shape="rect" coords="175,0,340,24"/>
<area href="interface_t_t_action_sheet_controller.php" alt="TTActionSheetController" shape="rect" coords="0,336,165,360"/>
<area href="interface_t_t_alert_view_controller.php" alt="TTAlertViewController" shape="rect" coords="175,336,340,360"/>
<area href="interface_t_t_post_controller.php" alt="TTPostController" shape="rect" coords="350,336,515,360"/>
<area href="interface_t_t_text_bar_controller.php" alt="TTTextBarController" shape="rect" coords="525,336,690,360"/>
</map>
</div>

<p><a href="class_t_t_popup_view_controller-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="accca0079788ef01bf7fa897c55f7f4a3"></a><!-- doxytag: member="TTPopupViewController::showInView:animated:" ref="accca0079788ef01bf7fa897c55f7f4a3" args="(UIView *view,[animated] BOOL animated)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>showInView:animated:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4a998b2972ac0295033b6362e1f939a4"></a><!-- doxytag: member="TTPopupViewController::dismissPopupViewControllerAnimated:" ref="a4a998b2972ac0295033b6362e1f939a4" args="(BOOL animated)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>dismissPopupViewControllerAnimated:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab2c3189c603a272d20cfe8bab354cbda"></a><!-- doxytag: member="TTPopupViewController::showFromBarButtonItem:animated:" ref="ab2c3189c603a272d20cfe8bab354cbda" args="(UIBarButtonItem *item,[animated] BOOL animated)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>showFromBarButtonItem:animated:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af7926e155235eb5eec2bb7a0a07ef477"></a><!-- doxytag: member="TTPopupViewController::showFromRect:inView:animated:" ref="af7926e155235eb5eec2bb7a0a07ef477" args="(CGRect rect,[inView] UIView *view,[animated] BOOL animated)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>showFromRect:inView:animated:</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A view controller which, when displayed modally, inserts its view over the parent controller. </p>
<p>Normally, displaying a modal view controller will completely hide the underlying view controller, and even remove its view from the view hierarchy. Popup view controllers allow you to present a "modal" view which overlaps the parent view controller but does not necessarily hide it.</p>
<p>This class is meant to be subclassed, not used directly. </p>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_popup_view_controller_8h_source.php">TTPopupViewController.h</a></li>
<li>Three20UI/Sources/TTPopupViewController.m</li>
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
