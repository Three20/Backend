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
  <title>Three20: &lt;TTPostControllerDelegate&gt; Protocol Reference</title>
<link href="http://three20.info/css/reset.css" rel="stylesheet" type="text/css"/>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javaScript" src="search/search.js"></script>
<link href="doxygen.css" rel="stylesheet" type="text/css"/>
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
<a href="#pub-methods">Public Member Functions</a>  </div>
  <div class="headertitle">
<h1>&lt;TTPostControllerDelegate&gt; Protocol Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTPostControllerDelegate-p" -->
<p><a href="protocol_t_t_post_controller_delegate-p-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_post_controller_delegate-p.php#ada7cac9f62ccac0f51b15495458e32ad">postController:willPostText:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The user has posted text and an animation is about to show the text return to its origin.  <a href="#ada7cac9f62ccac0f51b15495458e32ad"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(CGRect)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_post_controller_delegate-p.php#aa514ef65b514deb575c358257ad605f0">postController:willAnimateTowards:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The text will animate towards a rectangle.  <a href="#aa514ef65b514deb575c358257ad605f0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aed11cf1f3285bd2b798f9d0bba992c56"></a><!-- doxytag: member="TTPostControllerDelegate&#45;p::postController:didPostText:withResult:" ref="aed11cf1f3285bd2b798f9d0bba992c56" args="(TTPostController *postController,[didPostText] NSString *text,[withResult] id result)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_post_controller_delegate-p.php#aed11cf1f3285bd2b798f9d0bba992c56">postController:didPostText:withResult:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The text has been posted. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa3fa7d8aba4a4164e7fe3632a19c5dd7"></a><!-- doxytag: member="TTPostControllerDelegate&#45;p::postControllerDidCancel:" ref="aa3fa7d8aba4a4164e7fe3632a19c5dd7" args="(TTPostController *postController)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_post_controller_delegate-p.php#aa3fa7d8aba4a4164e7fe3632a19c5dd7">postControllerDidCancel:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The controller was cancelled before posting. <br/></td></tr>
</table>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="aa514ef65b514deb575c358257ad605f0"></a><!-- doxytag: member="TTPostControllerDelegate&#45;p::postController:willAnimateTowards:" ref="aa514ef65b514deb575c358257ad605f0" args="(TTPostController *postController,[willAnimateTowards] CGRect rect)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (CGRect) postController: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_post_controller.php">TTPostController</a> *)&nbsp;</td>
          <td class="paramname"> <em>postController</em></td>
        </tr>
        <tr>
          <td class="paramkey">willAnimateTowards:</td>
          <td></td>
          <td class="paramtype">(CGRect)&nbsp;</td>
          <td class="paramname"> <em>rect</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td><code> [optional]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The text will animate towards a rectangle. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the rect in screen coordinates where the text should animate towards. </dd></dl>

</div>
</div>
<a class="anchor" id="ada7cac9f62ccac0f51b15495458e32ad"></a><!-- doxytag: member="TTPostControllerDelegate&#45;p::postController:willPostText:" ref="ada7cac9f62ccac0f51b15495458e32ad" args="(TTPostController *postController,[willPostText] NSString *text)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) postController: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_post_controller.php">TTPostController</a> *)&nbsp;</td>
          <td class="paramname"> <em>postController</em></td>
        </tr>
        <tr>
          <td class="paramkey">willPostText:</td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td>
          <td class="paramname"> <em>text</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td><code> [optional]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The user has posted text and an animation is about to show the text return to its origin. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>whether to dismiss the controller or wait for the user to call dismiss. </dd></dl>

</div>
</div>
<hr/>The documentation for this protocol was generated from the following file:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_post_controller_delegate_8h_source.php">TTPostControllerDelegate.h</a></li>
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
