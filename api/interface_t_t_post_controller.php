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
<title>Three20 API: TTPostController Class Reference</title>
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
 
<div id="fb-root"></div> 
<script> 
  window.fbAsyncInit = function() {
    FB.init({
      appId   : '165692500131929',
      session : {"access_token":"165692500131929|2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446|7YjdqHOYyL6MXMHd-udsP0EbTsg","base_domain":"three20.info","expires":"1298952000","secret":"Hcv3uGki22DI7f_imqBhgQ__","session_key":"2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446","sig":"fdaa725c7cf196ce9579d1b232a16e64","uid":"122605446"}, // don't refetch the session when PHP already has it
      status  : true, // check login status
      cookie  : true, // enable cookies to allow the server to access the session
      xfbml   : true // parse XFBML
    });
 
    // whenever the user logs in, we refresh the page
    FB.Event.subscribe('auth.login', function() {
      window.location.reload();
    });
  };
 
  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script> 
 
<ul class="right-links"> 
<li><img class="profileimg" width="25" height="25" valign="bottom" src="https://graph.facebook.com/122605446/picture?type=square">Jeff Verkoeyen</li> 
<li><a href="https://www.facebook.com/logout.php?next=http%3A%2F%2Fthree20.info%2F&access_token=165692500131929%7C2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446%7C7YjdqHOYyL6MXMHd-udsP0EbTsg" onclick="FB.logout(function() { window.location.reload();}); return false;">Log out</a></li> 
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
<h1>TTPostController Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTPostController" --><!-- doxytag: inherits="TTPopupViewController" --><div class="dynheader">
Inheritance diagram for TTPostController:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_post_controller.png" usemap="#TTPostController_map" alt=""/>
  <map id="TTPostController_map" name="TTPostController_map">
<area href="interface_t_t_popup_view_controller.php" alt="TTPopupViewController" shape="rect" coords="87,280,252,304"/>
<area href="interface_t_t_model_view_controller.php" alt="TTModelViewController" shape="rect" coords="87,224,252,248"/>
<area href="interface_t_t_view_controller.php" alt="TTViewController" shape="rect" coords="0,168,165,192"/>
<area href="protocol_t_t_model_delegate-p.php" alt="&lt;TTModelDelegate&gt;" shape="rect" coords="175,168,340,192"/>
<area href="interface_t_t_navigator_view_controller.php" alt="TTNavigatorViewController" shape="rect" coords="0,112,165,136"/>
<area href="interface_t_t_base_view_controller.php" alt="TTBaseViewController" shape="rect" coords="0,56,165,80"/>
<area href="class_u_i_view_controller.php" alt="UIViewController" shape="rect" coords="0,0,165,24"/>
</map>
</div>

<p><a href="class_t_t_post_controller-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a86239ec0d50d1373dad64b1a6f852b47"></a><!-- doxytag: member="TTPostController::post" ref="a86239ec0d50d1373dad64b1a6f852b47" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_post_controller.php#a86239ec0d50d1373dad64b1a6f852b47">post</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Posts the text to delegates, who have to actually do something with it. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7a84a582d29106bd08ffc0a7bd419eb0"></a><!-- doxytag: member="TTPostController::cancel" ref="a7a84a582d29106bd08ffc0a7bd419eb0" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_post_controller.php#a7a84a582d29106bd08ffc0a7bd419eb0">cancel</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancels the controller, but confirms with the user if they have entered text. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a26ee367ac5f091ae5d9bcd77e1521bcf"></a><!-- doxytag: member="TTPostController::dismissWithResult:animated:" ref="a26ee367ac5f091ae5d9bcd77e1521bcf" args="(id result,[animated] BOOL animated)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_post_controller.php#a26ee367ac5f091ae5d9bcd77e1521bcf">dismissWithResult:animated:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Dismisses the controller with a resulting that is sent to the delegate. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa52ec41adc25cfc10f9e01e6a9de0b71"></a><!-- doxytag: member="TTPostController::failWithError:" ref="aa52ec41adc25cfc10f9e01e6a9de0b71" args="(NSError *error)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_post_controller.php#aa52ec41adc25cfc10f9e01e6a9de0b71">failWithError:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies the user of an error and resets the editor to normal. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_post_controller.php#a27289735bae27a54730ad82e98c1b8a2">willPostText:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The users has entered text and posted it.  <a href="#a27289735bae27a54730ad82e98c1b8a2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a532b57161100585b561261af441b4a5e"></a><!-- doxytag: member="TTPostController::titleForActivity" ref="a532b57161100585b561261af441b4a5e" args="()" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>titleForActivity</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a55db054b17df6f246129c985165ba3e0"></a><!-- doxytag: member="TTPostController::titleForError:" ref="a55db054b17df6f246129c985165ba3e0" args="(NSError *error)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>titleForError:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a05b064fd2df2f2090d94ed0ac06dc190"></a><!-- doxytag: member="TTPostController::_result" ref="a05b064fd2df2f2090d94ed0ac06dc190" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>_result</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2b54ef9017b679ff4649f608567cb189"></a><!-- doxytag: member="TTPostController::_defaultText" ref="a2b54ef9017b679ff4649f608567cb189" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_defaultText</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7ee10f6913b24a9c92c9af2031138f53"></a><!-- doxytag: member="TTPostController::_originRect" ref="a7ee10f6913b24a9c92c9af2031138f53" args="" -->
CGRect&nbsp;</td><td class="memItemRight" valign="bottom"><b>_originRect</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae4fd36f214b4c00d3635821c7d039454"></a><!-- doxytag: member="TTPostController::_originView" ref="ae4fd36f214b4c00d3635821c7d039454" args="" -->
<a class="el" href="class_u_i_view.php">UIView</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_originView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9e8c31a186f63a2e5f5d4a2519bf2ee9"></a><!-- doxytag: member="TTPostController::_innerView" ref="a9e8c31a186f63a2e5f5d4a2519bf2ee9" args="" -->
<a class="el" href="class_u_i_view.php">UIView</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_innerView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad93550336ef5b9a0d9b5808a3963c19a"></a><!-- doxytag: member="TTPostController::_navigationBar" ref="ad93550336ef5b9a0d9b5808a3963c19a" args="" -->
UINavigationBar *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_navigationBar</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad01fab5b0ec9532d2eb81776e09039af"></a><!-- doxytag: member="TTPostController::_screenView" ref="ad01fab5b0ec9532d2eb81776e09039af" args="" -->
<a class="el" href="interface_t_t_view.php">TTView</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_screenView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae8f928b117b1174995542e5ba39e4aec"></a><!-- doxytag: member="TTPostController::_textView" ref="ae8f928b117b1174995542e5ba39e4aec" args="" -->
UITextView *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_textView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1f6a3c43b61b58ab973ab72d2ef7866e"></a><!-- doxytag: member="TTPostController::_activityView" ref="a1f6a3c43b61b58ab973ab72d2ef7866e" args="" -->
<a class="el" href="interface_t_t_activity_label.php">TTActivityLabel</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_activityView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a36cc126bef7c7d9d23d10a5c8864e991"></a><!-- doxytag: member="TTPostController::_originalStatusBarHidden" ref="a36cc126bef7c7d9d23d10a5c8864e991" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_originalStatusBarHidden</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2ca56cfa790693ecfd8fcf16a04fad7b"></a><!-- doxytag: member="TTPostController::_originalStatusBarStyle" ref="a2ca56cfa790693ecfd8fcf16a04fad7b" args="" -->
UIStatusBarStyle&nbsp;</td><td class="memItemRight" valign="bottom"><b>_originalStatusBarStyle</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af88886d5acd3cb5966db7b7c02a492c0"></a><!-- doxytag: member="TTPostController::_delegate" ref="af88886d5acd3cb5966db7b7c02a492c0" args="" -->
id&lt; <a class="el" href="protocol_t_t_post_controller_delegate-p.php">TTPostControllerDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>_delegate</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4a01e645c0aec6aeb13e5d695b017416"></a><!-- doxytag: member="TTPostController::result" ref="a4a01e645c0aec6aeb13e5d695b017416" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>result</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a465389f2344a033be0ebed6521175b18"></a><!-- doxytag: member="TTPostController::textView" ref="a465389f2344a033be0ebed6521175b18" args="" -->
UITextView *&nbsp;</td><td class="memItemRight" valign="bottom"><b>textView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a872a53c2fea862440faddf8e17066e1b"></a><!-- doxytag: member="TTPostController::navigatorBar" ref="a872a53c2fea862440faddf8e17066e1b" args="" -->
UINavigationBar *&nbsp;</td><td class="memItemRight" valign="bottom"><b>navigatorBar</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a644c6805e2118cb912870d5f708243e8"></a><!-- doxytag: member="TTPostController::originView" ref="a644c6805e2118cb912870d5f708243e8" args="" -->
<a class="el" href="class_u_i_view.php">UIView</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>originView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2c77d74fb87ea448c25fbc387e92318b"></a><!-- doxytag: member="TTPostController::delegate" ref="a2c77d74fb87ea448c25fbc387e92318b" args="" -->
id&lt; <a class="el" href="protocol_t_t_post_controller_delegate-p.php">TTPostControllerDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>delegate</b></td></tr>
</table>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a27289735bae27a54730ad82e98c1b8a2"></a><!-- doxytag: member="TTPostController::willPostText:" ref="a27289735bae27a54730ad82e98c1b8a2" args="(NSString *text)" -->
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
<li>Three20UI/Headers/<a class="el" href="_t_t_post_controller_8h_source.php">TTPostController.h</a></li>
<li>Three20UI/Sources/TTPostController.m</li>
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
