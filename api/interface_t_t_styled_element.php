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
<title>Three20 API: TTStyledElement Class Reference</title>
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
<h1>TTStyledElement Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTStyledElement" --><!-- doxytag: inherits="TTStyledNode" --><div class="dynheader">
Inheritance diagram for TTStyledElement:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_styled_element.png" usemap="#TTStyledElement_map" alt=""/>
  <map id="TTStyledElement_map" name="TTStyledElement_map">
<area href="interface_t_t_styled_node.php" alt="TTStyledNode" shape="rect" coords="237,56,385,80"/>
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="237,0,385,24"/>
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

<p><a href="class_t_t_styled_element-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5db4665b8da1692f5637c7dbdc087074"></a><!-- doxytag: member="TTStyledElement::initWithText:" ref="a5db4665b8da1692f5637c7dbdc087074" args="(NSString *text)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>initWithText:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af0a402ea56e3573e0b669538d0c960db"></a><!-- doxytag: member="TTStyledElement::initWithText:next:" ref="af0a402ea56e3573e0b669538d0c960db" args="(NSString *text,[next] TTStyledNode *nextSibling)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>initWithText:next:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a64fffdc5fba6de0a6785ec8e58bef8fc"></a><!-- doxytag: member="TTStyledElement::addChild:" ref="a64fffdc5fba6de0a6785ec8e58bef8fc" args="(TTStyledNode *child)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addChild:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2c577f62ec2c40912a880e608fde02ef"></a><!-- doxytag: member="TTStyledElement::addText:" ref="a2c577f62ec2c40912a880e608fde02ef" args="(NSString *text)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addText:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af19ac7dd0dbf0467fe67cb99a9ac8dd0"></a><!-- doxytag: member="TTStyledElement::replaceChild:withChild:" ref="af19ac7dd0dbf0467fe67cb99a9ac8dd0" args="(TTStyledNode *oldChild,[withChild] TTStyledNode *newChild)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>replaceChild:withChild:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a16141a4a05f5c1480a0997f9edf19b28"></a><!-- doxytag: member="TTStyledElement::getElementByClassName:" ref="a16141a4a05f5c1480a0997f9edf19b28" args="(NSString *className)" -->
(<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>getElementByClassName:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2715ccbd19bc5e2d0d0e4a8e7f71cb6f"></a><!-- doxytag: member="TTStyledElement::_firstChild" ref="a2715ccbd19bc5e2d0d0e4a8e7f71cb6f" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_firstChild</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a80f8a177fb7199cc5841a4171d92aaed"></a><!-- doxytag: member="TTStyledElement::_lastChild" ref="a80f8a177fb7199cc5841a4171d92aaed" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_lastChild</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5347eed41119e7b48673db994d8d7451"></a><!-- doxytag: member="TTStyledElement::_className" ref="a5347eed41119e7b48673db994d8d7451" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_className</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad9cdfca8ce95a918e0422746b3468d21"></a><!-- doxytag: member="TTStyledElement::firstChild" ref="ad9cdfca8ce95a918e0422746b3468d21" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>firstChild</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac5a4b5cf697ad28677d535e0acc028f1"></a><!-- doxytag: member="TTStyledElement::lastChild" ref="ac5a4b5cf697ad28677d535e0acc028f1" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>lastChild</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae88d766d7c9746ea8643c59bd7c5c396"></a><!-- doxytag: member="TTStyledElement::className" ref="ae88d766d7c9746ea8643c59bd7c5c396" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>className</b></td></tr>
</table>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Style/Headers/<a class="el" href="_t_t_styled_element_8h_source.php">TTStyledElement.h</a></li>
<li>Three20Style/Sources/TTStyledElement.m</li>
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
