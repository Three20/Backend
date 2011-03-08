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
<title>Three20 API: Three20UICommon/Headers/TTGlobalUICommon.h Source File</title>
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
<h1>Three20UICommon/Headers/TTGlobalUICommon.h</h1>  </div>
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
<a name="l00023"></a>00023 <span class="keywordtype">float</span> TTOSVersion();
<a name="l00024"></a>00024 
<a name="l00028"></a>00028 BOOL TTOSVersionIsAtLeast(<span class="keywordtype">float</span> version);
<a name="l00029"></a>00029 
<a name="l00033"></a>00033 BOOL TTIsKeyboardVisible();
<a name="l00034"></a>00034 
<a name="l00038"></a>00038 BOOL TTIsPhoneSupported();
<a name="l00039"></a>00039 
<a name="l00043"></a>00043 BOOL TTIsPad();
<a name="l00044"></a>00044 
<a name="l00048"></a>00048 UIDeviceOrientation TTDeviceOrientation();
<a name="l00049"></a>00049 
<a name="l00058"></a>00058 BOOL TTIsSupportedOrientation(UIInterfaceOrientation orientation);
<a name="l00059"></a>00059 
<a name="l00063"></a>00063 CGAffineTransform TTRotateTransformForOrientation(UIInterfaceOrientation orientation);
<a name="l00064"></a>00064 
<a name="l00071"></a>00071 CGRect TTApplicationFrame();
<a name="l00072"></a>00072 
<a name="l00078"></a>00078 CGFloat TTToolbarHeightForOrientation(UIInterfaceOrientation orientation);
<a name="l00079"></a>00079 
<a name="l00083"></a>00083 CGFloat TTKeyboardHeightForOrientation(UIInterfaceOrientation orientation);
<a name="l00084"></a>00084 
<a name="l00088"></a>00088 CGFloat TTGroupedTableCellInset();
<a name="l00089"></a>00089 
<a name="l00093"></a>00093 <span class="keywordtype">void</span> TTAlert(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* message);
<a name="l00094"></a>00094 
<a name="l00098"></a>00098 <span class="keywordtype">void</span> TTAlertNoTitle(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* message);
<a name="l00099"></a>00099 
<a name="l00100"></a>00100 
<a name="l00102"></a>00102 <span class="comment">// Debug logging helpers</span>
<a name="l00103"></a>00103 
<a name="l00104"></a>00104 <span class="preprocessor">#define TTLOGRECT(rect) \</span>
<a name="l00105"></a>00105 <span class="preprocessor">  TTDINFO(@&quot;%s x=%f, y=%f, w=%f, h=%f&quot;, #rect, rect.origin.x, rect.origin.y, \</span>
<a name="l00106"></a>00106 <span class="preprocessor">  rect.size.width, rect.size.height)</span>
<a name="l00107"></a>00107 <span class="preprocessor"></span>
<a name="l00108"></a>00108 <span class="preprocessor">#define TTLOGPOINT(pt) \</span>
<a name="l00109"></a>00109 <span class="preprocessor">  TTDINFO(@&quot;%s x=%f, y=%f&quot;, #pt, pt.x, pt.y)</span>
<a name="l00110"></a>00110 <span class="preprocessor"></span>
<a name="l00111"></a>00111 <span class="preprocessor">#define TTLOGSIZE(size) \</span>
<a name="l00112"></a>00112 <span class="preprocessor">  TTDINFO(@&quot;%s w=%f, h=%f&quot;, #size, size.width, size.height)</span>
<a name="l00113"></a>00113 <span class="preprocessor"></span>
<a name="l00114"></a>00114 <span class="preprocessor">#define TTLOGEDGES(edges) \</span>
<a name="l00115"></a>00115 <span class="preprocessor">  TTDINFO(@&quot;%s left=%f, right=%f, top=%f, bottom=%f&quot;, #edges, edges.left, edges.right, \</span>
<a name="l00116"></a>00116 <span class="preprocessor">  edges.top, edges.bottom)</span>
<a name="l00117"></a>00117 <span class="preprocessor"></span>
<a name="l00118"></a>00118 <span class="preprocessor">#define TTLOGHSV(_COLOR) \</span>
<a name="l00119"></a>00119 <span class="preprocessor">  TTDINFO(@&quot;%s h=%f, s=%f, v=%f&quot;, #_COLOR, _COLOR.hue, _COLOR.saturation, _COLOR.value)</span>
<a name="l00120"></a>00120 <span class="preprocessor"></span>
<a name="l00121"></a>00121 <span class="preprocessor">#define TTLOGVIEWS(_VIEW) \</span>
<a name="l00122"></a>00122 <span class="preprocessor">  { for (UIView* view = _VIEW; view; view = view.superview) { TTDINFO(@&quot;%@&quot;, view); } }</span>
<a name="l00123"></a>00123 <span class="preprocessor"></span>
<a name="l00124"></a>00124 
<a name="l00126"></a>00126 <span class="comment">// Dimensions of common iPhone OS Views</span>
<a name="l00127"></a>00127 
<a name="l00132"></a>00132 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultRowHeight;
<a name="l00133"></a>00133 
<a name="l00138"></a>00138 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultPortraitToolbarHeight;
<a name="l00139"></a>00139 
<a name="l00144"></a>00144 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultLandscapeToolbarHeight;
<a name="l00145"></a>00145 
<a name="l00150"></a>00150 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultPortraitKeyboardHeight;
<a name="l00151"></a>00151 
<a name="l00156"></a>00156 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultLandscapeKeyboardHeight;
<a name="l00157"></a>00157 
<a name="l00162"></a>00162 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkGroupedTableCellInset;
<a name="l00163"></a>00163 
<a name="l00167"></a>00167 <span class="preprocessor">#define TT_ROW_HEIGHT                 ttkDefaultRowHeight</span>
<a name="l00168"></a>00168 <span class="preprocessor"></span><span class="preprocessor">#define TT_TOOLBAR_HEIGHT             ttkDefaultPortraitToolbarHeight</span>
<a name="l00169"></a>00169 <span class="preprocessor"></span><span class="preprocessor">#define TT_LANDSCAPE_TOOLBAR_HEIGHT   ttkDefaultLandscapeToolbarHeight</span>
<a name="l00170"></a>00170 <span class="preprocessor"></span>
<a name="l00171"></a>00171 <span class="preprocessor">#define TT_KEYBOARD_HEIGHT                 ttkDefaultPortraitKeyboardHeight</span>
<a name="l00172"></a>00172 <span class="preprocessor"></span><span class="preprocessor">#define TT_LANDSCAPE_KEYBOARD_HEIGHT       ttkDefaultLandscapeKeyboardHeight</span>
<a name="l00173"></a>00173 <span class="preprocessor"></span><span class="preprocessor">#define TT_IPAD_KEYBOARD_HEIGHT            ttkDefaultPadPortraitKeyboardHeight</span>
<a name="l00174"></a>00174 <span class="preprocessor"></span><span class="preprocessor">#define TT_IPAD_LANDSCAPE_KEYBOARD_HEIGHT  ttkDefaultPadLandscapeKeyboardHeight</span>
<a name="l00175"></a>00175 <span class="preprocessor"></span>
<a name="l00177"></a>00177 <span class="comment">// Animation</span>
<a name="l00178"></a>00178 
<a name="l00183"></a>00183 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultTransitionDuration;
<a name="l00184"></a>00184 
<a name="l00189"></a>00189 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultFastTransitionDuration;
<a name="l00190"></a>00190 
<a name="l00195"></a>00195 <span class="keyword">extern</span> <span class="keyword">const</span> CGFloat ttkDefaultFlipTransitionDuration;
<a name="l00196"></a>00196 
<a name="l00200"></a>00200 <span class="preprocessor">#define TT_TRANSITION_DURATION      ttkDefaultTransitionDuration</span>
<a name="l00201"></a>00201 <span class="preprocessor"></span><span class="preprocessor">#define TT_FAST_TRANSITION_DURATION ttkDefaultFastTransitionDuration</span>
<a name="l00202"></a>00202 <span class="preprocessor"></span><span class="preprocessor">#define TT_FLIP_TRANSITION_DURATION ttkDefaultFlipTransitionDuration</span>
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
