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
<title>Three20 API: TTStyledTextLabel Class Reference</title>
<link href="http://three20.info/css/reset.css" rel="stylesheet" type="text/css"/>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javaScript" src="search/search.js"></script>
<link href="http://dev.three20.info/css/global.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/article.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/headerbar.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/api.css" rel="stylesheet" type="text/css"/>
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
<li><a href="https://www.facebook.com/logout.php?next=http%3A%2F%2Fdev.three20.info%2F&access_token=165692500131929%7C2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446%7C7YjdqHOYyL6MXMHd-udsP0EbTsg" onclick="FB.logout(function() { window.location.reload();}); return false;">Log out</a></li> 
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTStyledTextLabel Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTStyledTextLabel" --><!-- doxytag: inherits="TTStyledTextDelegate-p" -->
<p>A view that can display styled text.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_styled_text_label_8h_source.php">TTStyledTextLabel.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTStyledTextLabel:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_styled_text_label.png" usemap="#TTStyledTextLabel_map" alt=""/>
  <map id="TTStyledTextLabel_map" name="TTStyledTextLabel_map">
<area href="protocol_t_t_styled_text_delegate-p.php" alt="&lt;TTStyledTextDelegate&gt;" shape="rect" coords="0,0,148,24"/>
</map>
</div>

<p><a href="class_t_t_styled_text_label-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aebb863f991b417bd64a3a24883c2be2b"></a><!-- doxytag: member="TTStyledTextLabel::_text" ref="aebb863f991b417bd64a3a24883c2be2b" args="" -->
<a class="el" href="interface_t_t_styled_text.php">TTStyledText</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_text</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a66a329170996d6208609f24121f8e650"></a><!-- doxytag: member="TTStyledTextLabel::_textColor" ref="a66a329170996d6208609f24121f8e650" args="" -->
<a class="el" href="class_u_i_color.php">UIColor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_textColor</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7afd355363b9197fe6e20e3a24028529"></a><!-- doxytag: member="TTStyledTextLabel::_highlightedTextColor" ref="a7afd355363b9197fe6e20e3a24028529" args="" -->
<a class="el" href="class_u_i_color.php">UIColor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_highlightedTextColor</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9ddcf4f2665f18fb7ecd1eab7e3ee070"></a><!-- doxytag: member="TTStyledTextLabel::_font" ref="a9ddcf4f2665f18fb7ecd1eab7e3ee070" args="" -->
<a class="el" href="class_u_i_font.php">UIFont</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_font</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa69eda7f025a571e4030dc781e2b9680"></a><!-- doxytag: member="TTStyledTextLabel::_textAlignment" ref="aa69eda7f025a571e4030dc781e2b9680" args="" -->
UITextAlignment&nbsp;</td><td class="memItemRight" valign="bottom"><b>_textAlignment</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4f6be2dd2c8a0fa6d9d31c5ba207fe0f"></a><!-- doxytag: member="TTStyledTextLabel::_contentInset" ref="a4f6be2dd2c8a0fa6d9d31c5ba207fe0f" args="" -->
UIEdgeInsets&nbsp;</td><td class="memItemRight" valign="bottom"><b>_contentInset</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a839735bafca7d99f6c0bbb805e659090"></a><!-- doxytag: member="TTStyledTextLabel::_highlighted" ref="a839735bafca7d99f6c0bbb805e659090" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_highlighted</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0373d4e455febd37febea7d2435d2582"></a><!-- doxytag: member="TTStyledTextLabel::_highlightedNode" ref="a0373d4e455febd37febea7d2435d2582" args="" -->
<a class="el" href="interface_t_t_styled_element.php">TTStyledElement</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_highlightedNode</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5d81b5c85e00438da86f7f49811f6b16"></a><!-- doxytag: member="TTStyledTextLabel::_highlightedFrame" ref="a5d81b5c85e00438da86f7f49811f6b16" args="" -->
<a class="el" href="interface_t_t_styled_box_frame.php">TTStyledBoxFrame</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_highlightedFrame</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a63b09329421906189cd7f11938a47a94"></a><!-- doxytag: member="TTStyledTextLabel::_accessibilityElements" ref="a63b09329421906189cd7f11938a47a94" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_accessibilityElements</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad655d2cbb66cae2438275f9861e13766"></a><!-- doxytag: member="TTStyledTextLabel::text" ref="ad655d2cbb66cae2438275f9861e13766" args="" -->
<a class="el" href="interface_t_t_styled_text.php">TTStyledText</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#ad655d2cbb66cae2438275f9861e13766">text</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The styled text displayed by the label. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acf37305f00bfbabf152a42b31c262a0d"></a><!-- doxytag: member="TTStyledTextLabel::html" ref="acf37305f00bfbabf152a42b31c262a0d" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#acf37305f00bfbabf152a42b31c262a0d">html</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">A shortcut for setting the text property to an HTML string. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a66b01655ce2c546fbb0569cedab75682"></a><!-- doxytag: member="TTStyledTextLabel::font" ref="a66b01655ce2c546fbb0569cedab75682" args="" -->
<a class="el" href="class_u_i_font.php">UIFont</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#a66b01655ce2c546fbb0569cedab75682">font</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The font of the text. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="afd11f17950467bcff3c50122a21e9bb3"></a><!-- doxytag: member="TTStyledTextLabel::textColor" ref="afd11f17950467bcff3c50122a21e9bb3" args="" -->
<a class="el" href="class_u_i_color.php">UIColor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#afd11f17950467bcff3c50122a21e9bb3">textColor</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The color of the text. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7da51569ea90cc99f9f918f6ce92d1bc"></a><!-- doxytag: member="TTStyledTextLabel::highlightedTextColor" ref="a7da51569ea90cc99f9f918f6ce92d1bc" args="" -->
<a class="el" href="class_u_i_color.php">UIColor</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#a7da51569ea90cc99f9f918f6ce92d1bc">highlightedTextColor</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The highlight color applied to the text. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">UITextAlignment&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#a5f7b638fa4b8443134435cfd09c17d3a">textAlignment</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The alignment of the text.  <a href="#a5f7b638fa4b8443134435cfd09c17d3a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">UIEdgeInsets&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#a82b3d4f94a46a347621ec4ed6bc03244">contentInset</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The inset of the edges around the text.  <a href="#a82b3d4f94a46a347621ec4ed6bc03244"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a22f1bf6aa775f236297edfb6f7566be7"></a><!-- doxytag: member="TTStyledTextLabel::highlighted" ref="a22f1bf6aa775f236297edfb6f7566be7" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#a22f1bf6aa775f236297edfb6f7566be7">highlighted</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">A Boolean value indicating whether the receiver should be drawn with a highlight. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a90eb7083143c1eda259201e40cc12d29"></a><!-- doxytag: member="TTStyledTextLabel::highlightedNode" ref="a90eb7083143c1eda259201e40cc12d29" args="" -->
<a class="el" href="interface_t_t_styled_element.php">TTStyledElement</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_styled_text_label.php#a90eb7083143c1eda259201e40cc12d29">highlightedNode</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The link node which is being touched and highlighted by the user. <br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A view that can display styled text. </p>
<hr/><h2>Property Documentation</h2>
<a class="anchor" id="a82b3d4f94a46a347621ec4ed6bc03244"></a><!-- doxytag: member="TTStyledTextLabel::contentInset" ref="a82b3d4f94a46a347621ec4ed6bc03244" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (UIEdgeInsets) contentInset<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The inset of the edges around the text. </p>
<p>This will increase the size of the label when sizeToFit is called. </p>

</div>
</div>
<a class="anchor" id="a5f7b638fa4b8443134435cfd09c17d3a"></a><!-- doxytag: member="TTStyledTextLabel::textAlignment" ref="a5f7b638fa4b8443134435cfd09c17d3a" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (UITextAlignment) textAlignment<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The alignment of the text. </p>
<p>(NOT YET IMPLEMENTED) </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_styled_text_label_8h_source.php">TTStyledTextLabel.h</a></li>
<li>Three20UI/Sources/TTStyledTextLabel.m</li>
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
