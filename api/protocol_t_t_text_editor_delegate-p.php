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
  <title>Three20: &lt;TTTextEditorDelegate&gt; Protocol Reference</title>
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
  <li><a href="http://new.three20.info/roadmap">Roadmap</a></li> 
  <li><a href="http://new.three20.info/documentation">Documentation</a></li> 
  <li><a href="http://new.three20.info/tutorials">Tutorials</a></li> 
  <li><a href="http://api.three20.info/">API</a></li> 
  <li><a href="http://new.three20.info/community">Community</a></li> 
</ul> 
 
<ul class="right-links"> 
  <li><a href="http://<?= $_SERVER['SERVER_NAME']?><?= $_SERVER['REQUEST_URI'] ?>#disqus_thread">Comments</a></li>
</ul> 
 
<div class="leadin"> 
  <h1><a href="http://new.three20.info/">Three20</a></h1> 
  <h2><a href="http://new.three20.info/">An open-source library for iOS applications</a></h2> 
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
<a href="#pub-methods">Public Member Functions</a>  </div>
  <div class="headertitle">
<h1>&lt;TTTextEditorDelegate&gt; Protocol Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTTextEditorDelegate-p" --><div class="dynheader">
Inheritance diagram for &lt;TTTextEditorDelegate&gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="protocol_t_t_text_editor_delegate-p.png" usemap="#&lt;TTTextEditorDelegate&gt;_map" alt=""/>
  <map id="&lt;TTTextEditorDelegate&gt;_map" name="&lt;TTTextEditorDelegate&gt;_map">
<area href="interface_t_t_message_controller.php" alt="TTMessageController" shape="rect" coords="0,56,146,80"/>
<area href="interface_t_t_text_bar_controller.php" alt="TTTextBarController" shape="rect" coords="156,56,302,80"/>
</map>
</div>

<p><a href="protocol_t_t_text_editor_delegate-p-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a32e01b7570a4309f31af9dad40fbdf44"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditorShouldBeginEditing:" ref="a32e01b7570a4309f31af9dad40fbdf44" args="(TTTextEditor *textEditor)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditorShouldBeginEditing:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3cd382bdd0bc1a68404ec8ff2f45ec7b"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditorShouldEndEditing:" ref="a3cd382bdd0bc1a68404ec8ff2f45ec7b" args="(TTTextEditor *textEditor)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditorShouldEndEditing:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae9c7de44946d45463d983bfcf2a0371f"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditorDidBeginEditing:" ref="ae9c7de44946d45463d983bfcf2a0371f" args="(TTTextEditor *textEditor)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditorDidBeginEditing:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acda76c4826b4e6c2cbc0d211956aa06f"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditorDidEndEditing:" ref="acda76c4826b4e6c2cbc0d211956aa06f" args="(TTTextEditor *textEditor)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditorDidEndEditing:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4bc6752a27f4f996d7c3cdd489cc7b47"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditor:shouldChangeTextInRange:replacementText:" ref="a4bc6752a27f4f996d7c3cdd489cc7b47" args="(TTTextEditor *textEditor,[shouldChangeTextInRange] NSRange range,[replacementText] NSString *replacementText)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditor:shouldChangeTextInRange:replacementText:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa8b7484f91b804294f2da65f754f64ef"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditorDidChange:" ref="aa8b7484f91b804294f2da65f754f64ef" args="(TTTextEditor *textEditor)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditorDidChange:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4942886317d9773499b2535330036164"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditor:shouldResizeBy:" ref="a4942886317d9773499b2535330036164" args="(TTTextEditor *textEditor,[shouldResizeBy] CGFloat height)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditor:shouldResizeBy:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a41aa31bb51bc2b2a5189ef8492ce9ac2"></a><!-- doxytag: member="TTTextEditorDelegate&#45;p::textEditorShouldReturn:" ref="a41aa31bb51bc2b2a5189ef8492ce9ac2" args="(TTTextEditor *textEditor)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textEditorShouldReturn:</b></td></tr>
</table>
<hr/>The documentation for this protocol was generated from the following file:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_text_editor_delegate_8h_source.php">TTTextEditorDelegate.h</a></li>
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
