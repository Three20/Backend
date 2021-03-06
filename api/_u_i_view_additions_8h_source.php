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
<title>Three20 API: Three20UI/Headers/UIViewAdditions.h Source File</title>
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
  <li><a href="http://forums.three20.info/">Forums</a></li> 
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
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>File&nbsp;Members</span></a></li>
    </ul>
  </div>
<div class="header">
  <div class="headertitle">
<h1>Three20UI/Headers/UIViewAdditions.h</h1>  </div>
</div>
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">//</span>
<a name="l00002"></a>00002 <span class="comment">// Copyright 2009-2011 Facebook</span>
<a name="l00003"></a>00003 <span class="comment">//</span>
<a name="l00004"></a>00004 <span class="comment">// Licensed under the Apache License, Version 2.0 (the &quot;License&quot;);</span>
<a name="l00005"></a>00005 <span class="comment">// you may not use this file except in compliance with the License.</span>
<a name="l00006"></a>00006 <span class="comment">// You may obtain a copy of the License at</span>
<a name="l00007"></a>00007 <span class="comment">//</span>
<a name="l00008"></a>00008 <span class="comment">//    http://www.apache.org/licenses/LICENSE-2.0</span>
<a name="l00009"></a>00009 <span class="comment">//</span>
<a name="l00010"></a>00010 <span class="comment">// Unless required by applicable law or agreed to in writing, software</span>
<a name="l00011"></a>00011 <span class="comment">// distributed under the License is distributed on an &quot;AS IS&quot; BASIS,</span>
<a name="l00012"></a>00012 <span class="comment">// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.</span>
<a name="l00013"></a>00013 <span class="comment">// See the License for the specific language governing permissions and</span>
<a name="l00014"></a>00014 <span class="comment">// limitations under the License.</span>
<a name="l00015"></a>00015 <span class="comment">//</span>
<a name="l00016"></a>00016 
<a name="l00017"></a>00017 <span class="preprocessor">#import &lt;Foundation/Foundation.h&gt;</span>
<a name="l00018"></a>00018 <span class="preprocessor">#import &lt;UIKit/UIKit.h&gt;</span>
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 <span class="keyword">@interface </span><a class="code" href="class_u_i_view.php" title="Additions.">UIView</a> (TTCategory)
<a name="l00021"></a>00021 
<a name="l00027"></a>00027 @property (nonatomic) CGFloat left;
<a name="l00028"></a>00028 
<a name="l00034"></a>00034 @property (nonatomic) CGFloat top;
<a name="l00035"></a>00035 
<a name="l00041"></a>00041 @property (nonatomic) CGFloat right;
<a name="l00042"></a>00042 
<a name="l00048"></a>00048 @property (nonatomic) CGFloat bottom;
<a name="l00049"></a>00049 
<a name="l00055"></a>00055 @property (nonatomic) CGFloat width;
<a name="l00056"></a>00056 
<a name="l00062"></a>00062 @property (nonatomic) CGFloat height;
<a name="l00063"></a>00063 
<a name="l00069"></a>00069 @property (nonatomic) CGFloat centerX;
<a name="l00070"></a>00070 
<a name="l00076"></a>00076 @property (nonatomic) CGFloat centerY;
<a name="l00077"></a>00077 
<a name="l00081"></a>00081 @property (nonatomic, readonly) CGFloat ttScreenX;
<a name="l00082"></a>00082 
<a name="l00086"></a>00086 @property (nonatomic, readonly) CGFloat ttScreenY;
<a name="l00087"></a>00087 
<a name="l00091"></a>00091 @property (nonatomic, readonly) CGFloat screenViewX;
<a name="l00092"></a>00092 
<a name="l00096"></a>00096 @property (nonatomic, readonly) CGFloat screenViewY;
<a name="l00097"></a>00097 
<a name="l00101"></a>00101 @property (nonatomic, readonly) CGRect screenFrame;
<a name="l00102"></a>00102 
<a name="l00106"></a>00106 @property (nonatomic) CGPoint origin;
<a name="l00107"></a>00107 
<a name="l00111"></a>00111 @property (nonatomic) CGSize size;
<a name="l00112"></a>00112 
<a name="l00116"></a>00116 @property (nonatomic, readonly) CGFloat orientationWidth;
<a name="l00117"></a>00117 
<a name="l00121"></a>00121 @property (nonatomic, readonly) CGFloat orientationHeight;
<a name="l00122"></a>00122 
<a name="l00126"></a>00126 - (<a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*)descendantOrSelfWithClass:(Class)cls;
<a name="l00127"></a>00127 
<a name="l00131"></a>00131 - (<a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*)ancestorOrSelfWithClass:(Class)cls;
<a name="l00132"></a>00132 
<a name="l00136"></a>00136 - (<span class="keywordtype">void</span>)removeAllSubviews;
<a name="l00137"></a>00137 
<a name="l00141"></a>00141 <span class="preprocessor">#ifdef DEBUG</span>
<a name="l00142"></a>00142 <span class="preprocessor"></span>- (void)simulateTapAtPoint:(CGPoint)location;
<a name="l00143"></a>00143 <span class="preprocessor">#endif</span>
<a name="l00144"></a>00144 <span class="preprocessor"></span>
<a name="l00150"></a>00150 - (CGPoint)offsetFromView:(<a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*)otherView;
<a name="l00151"></a>00151 
<a name="l00157"></a>00157 - (CGRect)frameWithKeyboardSubtracted:(CGFloat)plusHeight;
<a name="l00158"></a>00158 
<a name="l00165"></a>00165 - (void)presentAsKeyboardInView:(<a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*)containingView;
<a name="l00166"></a>00166 
<a name="l00173"></a>00173 - (void)dismissAsKeyboard:(BOOL)animated;
<a name="l00174"></a>00174 
<a name="l00175"></a>00175 <span class="keyword">@end</span>
</pre></div></div>
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
