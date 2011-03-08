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
<title>Three20 API: TTTextBarController Class Reference</title>
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
<h1>TTTextBarController Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTTextBarController" --><!-- doxytag: inherits="TTPopupViewController,TTTextEditorDelegate-p" --><div class="dynheader">
Inheritance diagram for TTTextBarController:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_text_bar_controller.png" usemap="#TTTextBarController_map" alt=""/>
  <map id="TTTextBarController_map" name="TTTextBarController_map">
<area href="interface_t_t_popup_view_controller.php" alt="TTPopupViewController" shape="rect" coords="87,280,252,304"/>
<area href="protocol_t_t_text_editor_delegate-p.php" alt="&lt;TTTextEditorDelegate&gt;" shape="rect" coords="262,280,427,304"/>
<area href="interface_t_t_model_view_controller.php" alt="TTModelViewController" shape="rect" coords="87,224,252,248"/>
<area href="interface_t_t_view_controller.php" alt="TTViewController" shape="rect" coords="0,168,165,192"/>
<area href="protocol_t_t_model_delegate-p.php" alt="&lt;TTModelDelegate&gt;" shape="rect" coords="175,168,340,192"/>
<area href="interface_t_t_navigator_view_controller.php" alt="TTNavigatorViewController" shape="rect" coords="0,112,165,136"/>
<area href="interface_t_t_base_view_controller.php" alt="TTBaseViewController" shape="rect" coords="0,56,165,80"/>
<area href="class_u_i_view_controller.php" alt="UIViewController" shape="rect" coords="0,0,165,24"/>
</map>
</div>

<p><a href="class_t_t_text_bar_controller-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad0cade3c79264ae3b9047cedefad5c98"></a><!-- doxytag: member="TTTextBarController::post" ref="ad0cade3c79264ae3b9047cedefad5c98" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_text_bar_controller.php#ad0cade3c79264ae3b9047cedefad5c98">post</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Posts the text to delegates, who have to actually do something with it. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa6b36727b7d8959bd2475e31c6b0f127"></a><!-- doxytag: member="TTTextBarController::cancel" ref="aa6b36727b7d8959bd2475e31c6b0f127" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_text_bar_controller.php#aa6b36727b7d8959bd2475e31c6b0f127">cancel</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancels the controller, but confirms with the user if they have entered text. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a45af94710d4419318ea4114c24766540"></a><!-- doxytag: member="TTTextBarController::dismissWithResult:animated:" ref="a45af94710d4419318ea4114c24766540" args="(id result,[animated] BOOL animated)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_text_bar_controller.php#a45af94710d4419318ea4114c24766540">dismissWithResult:animated:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Dismisses the controller with a resulting that is sent to the delegate. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8491ae76f8677995ca58011278228ac1"></a><!-- doxytag: member="TTTextBarController::failWithError:" ref="a8491ae76f8677995ca58011278228ac1" args="(NSError *error)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_text_bar_controller.php#a8491ae76f8677995ca58011278228ac1">failWithError:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies the user of an error and resets the editor to normal. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_text_bar_controller.php#aed6fa9852573f822252db1d49ccca166">willPostText:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The users has entered text and posted it.  <a href="#aed6fa9852573f822252db1d49ccca166"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aeff22f88a00274785d3155ae5bc57fc9"></a><!-- doxytag: member="TTTextBarController::titleForActivity" ref="aeff22f88a00274785d3155ae5bc57fc9" args="()" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>titleForActivity</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad5fb232a982f9f5a28c39da06af74cea"></a><!-- doxytag: member="TTTextBarController::titleForError:" ref="ad5fb232a982f9f5a28c39da06af74cea" args="(NSError *error)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>titleForError:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa6f874f1c8904ba4bd846af4dea668af"></a><!-- doxytag: member="TTTextBarController::_result" ref="aa6f874f1c8904ba4bd846af4dea668af" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>_result</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad36bdcda9275673553ac09ffe5a08096"></a><!-- doxytag: member="TTTextBarController::_defaultText" ref="ad36bdcda9275673553ac09ffe5a08096" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_defaultText</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="abe10f029baddfbe1d98e71fd5e9c688c"></a><!-- doxytag: member="TTTextBarController::_textBar" ref="abe10f029baddfbe1d98e71fd5e9c688c" args="" -->
<a class="el" href="interface_t_t_view.php">TTView</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_textBar</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a832a86d6e273831d183dfce7445f31b5"></a><!-- doxytag: member="TTTextBarController::_textEditor" ref="a832a86d6e273831d183dfce7445f31b5" args="" -->
<a class="el" href="interface_t_t_text_editor.php">TTTextEditor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_textEditor</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab88b96062651f3aa0464083c2e052db0"></a><!-- doxytag: member="TTTextBarController::_postButton" ref="ab88b96062651f3aa0464083c2e052db0" args="" -->
<a class="el" href="interface_t_t_button.php">TTButton</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_postButton</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a159ee7b38c1f5a38067ee2aaef478a81"></a><!-- doxytag: member="TTTextBarController::_footerBar" ref="a159ee7b38c1f5a38067ee2aaef478a81" args="" -->
<a class="el" href="class_u_i_view.php">UIView</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_footerBar</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa28dd792161eeffd8ba083b2ca7a5af7"></a><!-- doxytag: member="TTTextBarController::_originTop" ref="aa28dd792161eeffd8ba083b2ca7a5af7" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_originTop</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="afa4abb79b0f2d92dd0d5d1633df9b58a"></a><!-- doxytag: member="TTTextBarController::_previousRightBarButtonItem" ref="afa4abb79b0f2d92dd0d5d1633df9b58a" args="" -->
UIBarButtonItem *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_previousRightBarButtonItem</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8f3de4afcfc8ebcaee13c7b8d08ad7f6"></a><!-- doxytag: member="TTTextBarController::_delegate" ref="a8f3de4afcfc8ebcaee13c7b8d08ad7f6" args="" -->
id&lt; <a class="el" href="protocol_t_t_text_bar_delegate-p.php">TTTextBarDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>_delegate</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4bd4432b994591d98febad9acf3d3fc1"></a><!-- doxytag: member="TTTextBarController::textEditor" ref="a4bd4432b994591d98febad9acf3d3fc1" args="" -->
<a class="el" href="interface_t_t_text_editor.php">TTTextEditor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>textEditor</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab9b830273fef4b5af8778c27dd7726b2"></a><!-- doxytag: member="TTTextBarController::postButton" ref="ab9b830273fef4b5af8778c27dd7726b2" args="" -->
<a class="el" href="interface_t_t_button.php">TTButton</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>postButton</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3d1aefad9a68c143ea70dfd5f42c0051"></a><!-- doxytag: member="TTTextBarController::footerBar" ref="a3d1aefad9a68c143ea70dfd5f42c0051" args="" -->
<a class="el" href="class_u_i_view.php">UIView</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>footerBar</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2e8c9f6472495969cebfeaf6672894c6"></a><!-- doxytag: member="TTTextBarController::delegate" ref="a2e8c9f6472495969cebfeaf6672894c6" args="" -->
id&lt; <a class="el" href="protocol_t_t_text_bar_delegate-p.php">TTTextBarDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>delegate</b></td></tr>
</table>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="aed6fa9852573f822252db1d49ccca166"></a><!-- doxytag: member="TTTextBarController::willPostText:" ref="aed6fa9852573f822252db1d49ccca166" args="(NSString *text)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) willPostText: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_string.php">NSString</a>*)&nbsp;</td>
          <td class="paramname"> <em>text</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The users has entered text and posted it. </p>
<p>Subclasses can implement this to handle the text before it is sent to the delegate. The default returns NO.</p>
<dl class="return"><dt><b>Returns:</b></dt><dd>YES if the controller should be dismissed immediately. </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_text_bar_controller_8h_source.php">TTTextBarController.h</a></li>
<li>Three20UI/Sources/TTTextBarController.m</li>
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
