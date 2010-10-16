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
  <title>Three20: TTUserInfo Class Reference</title>
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
  <li><a href="/documentation">Documentation</a></li> 
  <li><a href="/tutorials">Tutorials</a></li> 
  <li><a href="http://api.three20.info/">API</a></li> 
  <li><a href="/community">Community</a></li> 
</ul> 
 
<ul class="right-links"> 
  <li><a href="http://<?= $_SERVER['SERVER_NAME']?><?= $_SERVER['REQUEST_URI'] ?>#disqus_thread">Comments</a></li>
</ul> 
 
<div class="leadin"> 
  <h1><a href="/">Three20</a></h1> 
  <h2><a href="/">An open-source library for iOS applications</a></h2> 
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
<h1>TTUserInfo Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTUserInfo" --><!-- doxytag: inherits="NSObject" -->
<p>A helper class for storing user info to help identify a request.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_user_info_8h_source.php">TTUserInfo.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTUserInfo:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_user_info.png" usemap="#TTUserInfo_map" alt=""/>
  <map id="TTUserInfo_map" name="TTUserInfo_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,73,24"/>
</map>
</div>

<p><a href="class_t_t_user_info-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a57537e346f4852b2d2829c2982db3d55"></a><!-- doxytag: member="TTUserInfo::initWithTopic:strongRef:weakRef:" ref="a57537e346f4852b2d2829c2982db3d55" args="(NSString *topic,[strongRef] id strongRef,[weakRef] id weakRef)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>initWithTopic:strongRef:weakRef:</b></td></tr>
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a232952c6e6362d7a9bf9c00d7ab6f237"></a><!-- doxytag: member="TTUserInfo::topic:strongRef:weakRef:" ref="a232952c6e6362d7a9bf9c00d7ab6f237" args="(NSString *topic,[strongRef] id strongRef,[weakRef] id weakRef)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>topic:strongRef:weakRef:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7a17db49690870205dd3d994060c469c"></a><!-- doxytag: member="TTUserInfo::topic:" ref="a7a17db49690870205dd3d994060c469c" args="(NSString *topic)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>topic:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a751229a003b3d2c5f57231a53a676dc1"></a><!-- doxytag: member="TTUserInfo::weakRef:" ref="a751229a003b3d2c5f57231a53a676dc1" args="(id weakRef)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>weakRef:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a39d7122f71bda54e247f9cbf752c6571"></a><!-- doxytag: member="TTUserInfo::_topic" ref="a39d7122f71bda54e247f9cbf752c6571" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_topic</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a59bdcc6632e066e61d34399ccc03af15"></a><!-- doxytag: member="TTUserInfo::_strongRef" ref="a59bdcc6632e066e61d34399ccc03af15" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>_strongRef</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad03ff86bc490cf49bc354c6bdae1bc78"></a><!-- doxytag: member="TTUserInfo::_weakRef" ref="ad03ff86bc490cf49bc354c6bdae1bc78" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>_weakRef</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac558d8bdedeec9c8f27b50eefa0d764c"></a><!-- doxytag: member="TTUserInfo::topic" ref="ac558d8bdedeec9c8f27b50eefa0d764c" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>topic</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9c70410c7701777e272afb8d07cce871"></a><!-- doxytag: member="TTUserInfo::strongRef" ref="a9c70410c7701777e272afb8d07cce871" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>strongRef</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a04d930abcbb4939c1d07a126eec0f02b"></a><!-- doxytag: member="TTUserInfo::weakRef" ref="a04d930abcbb4939c1d07a126eec0f02b" args="" -->
id&nbsp;</td><td class="memItemRight" valign="bottom"><b>weakRef</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A helper class for storing user info to help identify a request. </p>
<p>This class lets you store both a strong reference and a weak reference for the duration of the request. The weak reference is special because <a class="el" href="interface_t_t_u_r_l_request_queue.php">TTURLRequestQueue</a> will examine it when you call cancelRequestsWithDelegate to see if the weak object is the delegate in question. For this reason, this object is a safe way to store an object that may be destroyed before the request completes if you call cancelRequestsWithDelegate in the object's destructor. </p>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Network/Headers/<a class="el" href="_t_t_user_info_8h_source.php">TTUserInfo.h</a></li>
<li>Three20Network/Sources/TTUserInfo.m</li>
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
