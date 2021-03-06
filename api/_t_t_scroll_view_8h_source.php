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
<title>Three20 API: Three20UI/Headers/TTScrollView.h Source File</title>
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
<h1>Three20UI/Headers/TTScrollView.h</h1>  </div>
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
<a name="l00020"></a>00020 <span class="keyword">@protocol </span><a class="code" href="protocol_t_t_scroll_view_delegate-p.php">TTScrollViewDelegate</a>;
<a name="l00021"></a>00021 <span class="keyword">@protocol </span><a class="code" href="protocol_t_t_scroll_view_data_source-p.php">TTScrollViewDataSource</a>;
<a name="l00022"></a>00022 
<a name="l00023"></a><a class="code" href="interface_t_t_scroll_view.php">00023</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_scroll_view.php">TTScrollView</a> : <a class="code" href="class_u_i_view.php" title="Additions.">UIView</a> {
<a name="l00024"></a>00024   NSInteger       _centerPageIndex;
<a name="l00025"></a>00025   NSInteger       _visiblePageIndex;
<a name="l00026"></a>00026   BOOL            _scrollEnabled;
<a name="l00027"></a>00027   BOOL            _zoomEnabled;
<a name="l00028"></a>00028   BOOL            _rotateEnabled;
<a name="l00029"></a>00029   CGFloat         _pageSpacing;
<a name="l00030"></a>00030   NSTimeInterval  _holdsAfterTouchingForInterval;
<a name="l00031"></a>00031 
<a name="l00032"></a>00032   UIInterfaceOrientation  _orientation;
<a name="l00033"></a>00033 
<a name="l00034"></a>00034   id&lt;TTScrollViewDelegate&gt;    _delegate;
<a name="l00035"></a>00035   id&lt;TTScrollViewDataSource&gt;  _dataSource;
<a name="l00036"></a>00036 
<a name="l00037"></a>00037   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>* _pages;
<a name="l00038"></a>00038   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>* _pageQueue;
<a name="l00039"></a>00039   NSInteger       _maxPages;
<a name="l00040"></a>00040   NSInteger       _pageArrayIndex;
<a name="l00041"></a>00041   NSTimer*        _tapTimer;
<a name="l00042"></a>00042   NSTimer*        _holdingTimer;
<a name="l00043"></a>00043   NSTimer*        _animationTimer;
<a name="l00044"></a>00044   <a class="code" href="class_n_s_date.php" title="Additions.">NSDate</a>*         _animationStartTime;
<a name="l00045"></a>00045   NSTimeInterval  _animationDuration;
<a name="l00046"></a>00046   UIEdgeInsets    _animateEdges;
<a name="l00047"></a>00047 
<a name="l00048"></a>00048   <span class="comment">// Speed for Inertia.</span>
<a name="l00049"></a>00049   CGPoint      _inertiaSpeed;
<a name="l00050"></a>00050   CGPoint      _renewPosition;
<a name="l00051"></a>00051 
<a name="l00052"></a>00052   <span class="comment">// A floating-point value that specifies the maximum scale factor that can be applied to</span>
<a name="l00053"></a>00053   <span class="comment">// the scroll view&#39;s content.</span>
<a name="l00054"></a>00054   CGFloat _maximumZoomScale;
<a name="l00055"></a>00055   CGFloat _zoomScale;
<a name="l00056"></a>00056 
<a name="l00057"></a>00057   <span class="comment">// Middle point bewteen fingers, is used to zoom using fingers positon and not the center</span>
<a name="l00058"></a>00058   <span class="comment">// of the image.</span>
<a name="l00059"></a>00059   CGPoint centerOfFingers;
<a name="l00060"></a>00060 
<a name="l00061"></a>00061   <span class="comment">// Distance between fingers, used to calculate zoom scale and zoom speed rate.</span>
<a name="l00062"></a>00062   CGFloat actualDistanceBetweenFingers;
<a name="l00063"></a>00063   CGFloat distanceBetweenFingers;
<a name="l00064"></a>00064 
<a name="l00065"></a>00065   <span class="comment">// A floating-point value that determines the rate of deceleration after the user lifts</span>
<a name="l00066"></a>00066   <span class="comment">// their finger.</span>
<a name="l00067"></a>00067   CGFloat _decelerationRate;
<a name="l00068"></a>00068 
<a name="l00069"></a>00069   <span class="comment">// The offset of the page edges from the edge of the screen.</span>
<a name="l00070"></a>00070   UIEdgeInsets    _pageEdges;
<a name="l00071"></a>00071 
<a name="l00072"></a>00072   <span class="comment">// At the beginning of an animation, the page edges are cached within this member.</span>
<a name="l00073"></a>00073   UIEdgeInsets    _pageStartEdges;
<a name="l00074"></a>00074 
<a name="l00075"></a>00075   UIEdgeInsets    _touchEdges;
<a name="l00076"></a>00076   UIEdgeInsets    _touchStartEdges;
<a name="l00077"></a>00077   NSUInteger      _touchCount;
<a name="l00078"></a>00078   CGFloat         _overshoot;
<a name="l00079"></a>00079 
<a name="l00080"></a>00080   <span class="comment">// The first touch in this view.</span>
<a name="l00081"></a>00081   <a class="code" href="class_u_i_touch.php">UITouch</a>*        _touch1;
<a name="l00082"></a>00082 
<a name="l00083"></a>00083   <span class="comment">// The second touch in this view.</span>
<a name="l00084"></a>00084   <a class="code" href="class_u_i_touch.php">UITouch</a>*        _touch2;
<a name="l00085"></a>00085 
<a name="l00086"></a>00086   BOOL            _dragging;
<a name="l00087"></a>00087   BOOL            _decelerating;
<a name="l00088"></a>00088   BOOL            _zooming;
<a name="l00089"></a>00089   BOOL            _executingZoomGesture;
<a name="l00090"></a>00090   BOOL            _holding;
<a name="l00091"></a>00091 }
<a name="l00092"></a>00092 
<a name="l00096"></a><a class="code" href="interface_t_t_scroll_view.php#a78d5e647a3cadb39d064eab51ba67e31">00096</a> @property (nonatomic) NSInteger centerPageIndex;
<a name="l00097"></a>00097 
<a name="l00101"></a><a class="code" href="interface_t_t_scroll_view.php#a843c399a929d2e84777fd739c69ad2ca">00101</a> @property (nonatomic, readonly) BOOL zoomed;
<a name="l00102"></a>00102 
<a name="l00110"></a><a class="code" href="interface_t_t_scroll_view.php#a14d37707f3944ecbe72802496e3633e6">00110</a> @property (nonatomic, readonly) BOOL zooming;
<a name="l00111"></a>00111 
<a name="l00112"></a>00112 @property (nonatomic, readonly) BOOL holding;
<a name="l00113"></a>00113 
<a name="l00118"></a><a class="code" href="interface_t_t_scroll_view.php#ad72bebb726e926baee671748334832e8">00118</a> @property (nonatomic,readonly,getter=isDecelerating) BOOL decelerating;
<a name="l00119"></a>00119 
<a name="l00123"></a><a class="code" href="interface_t_t_scroll_view.php#a198f1263d9d4469d064a4c68ef32ee48">00123</a> @property (nonatomic) BOOL scrollEnabled;
<a name="l00124"></a>00124 
<a name="l00128"></a><a class="code" href="interface_t_t_scroll_view.php#ab3888e4794b6633c4e0993cadd71057f">00128</a> @property (nonatomic) BOOL zoomEnabled;
<a name="l00129"></a>00129 
<a name="l00133"></a><a class="code" href="interface_t_t_scroll_view.php#a8cdc1e74e550eb1c09be05921ebff95d">00133</a> @property (nonatomic) BOOL rotateEnabled;
<a name="l00134"></a>00134 
<a name="l00138"></a><a class="code" href="interface_t_t_scroll_view.php#a777db57c6cbc8f27acf1a57815c39a63">00138</a> @property (nonatomic) CGFloat pageSpacing;
<a name="l00139"></a>00139 
<a name="l00140"></a>00140 @property (nonatomic)           UIInterfaceOrientation  orientation;
<a name="l00141"></a>00141 @property (nonatomic, readonly) NSInteger               numberOfPages;
<a name="l00142"></a>00142 @property (nonatomic, readonly) <a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*                 centerPage;
<a name="l00143"></a>00143 
<a name="l00149"></a><a class="code" href="interface_t_t_scroll_view.php#ab7e204fd45c41a63feaf1e3453fe382f">00149</a> @property (nonatomic) NSTimeInterval holdsAfterTouchingForInterval;
<a name="l00150"></a>00150 
<a name="l00157"></a><a class="code" href="interface_t_t_scroll_view.php#a48bdb272cb17fc9bd55d59967eb1bc28">00157</a> @property CGFloat decelerationRate;
<a name="l00158"></a>00158 
<a name="l00168"></a><a class="code" href="interface_t_t_scroll_view.php#ad5862684346ce52bbf57937a68ecb250">00168</a> @property (nonatomic,assign) CGFloat zoomScale;
<a name="l00169"></a>00169 
<a name="l00176"></a><a class="code" href="interface_t_t_scroll_view.php#a32450ee169df9c2062407aa39d55af00">00176</a> @property (nonatomic) CGFloat maximumZoomScale;
<a name="l00177"></a>00177 
<a name="l00178"></a>00178 @property (nonatomic, assign) <span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_scroll_view_delegate-p.php">TTScrollViewDelegate</a>&gt;    delegate;
<a name="l00179"></a>00179 @property (nonatomic, assign) <span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_scroll_view_data_source-p.php">TTScrollViewDataSource</a>&gt;  dataSource;
<a name="l00180"></a>00180 
<a name="l00184"></a><a class="code" href="interface_t_t_scroll_view.php#ac5b71472eb1caa1b3b85ee54a1813e85">00184</a> @property (nonatomic, readonly) <a class="code" href="class_n_s_dictionary.php">NSDictionary</a>* visiblePages;
<a name="l00185"></a>00185 
<a name="l00186"></a>00186 - (<span class="keywordtype">void</span>)setOrientation:(UIInterfaceOrientation)orientation animated:(BOOL)animated;
<a name="l00187"></a>00187 
<a name="l00193"></a>00193 - (<span class="keywordtype">void</span>)setZoomScale:(CGFloat)newScale animated:(BOOL)animated;
<a name="l00194"></a>00194 
<a name="l00202"></a>00202 - (<span class="keywordtype">void</span>)setZoomScale:(CGFloat)newScale withPoint:(CGPoint)withPoint animated:(BOOL)animated;
<a name="l00203"></a>00203 
<a name="l00207"></a>00207 - (<a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*)dequeueReusablePage;
<a name="l00208"></a>00208 
<a name="l00209"></a>00209 - (<span class="keywordtype">void</span>)reloadData;
<a name="l00210"></a>00210 
<a name="l00211"></a>00211 - (<a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*)pageAtIndex:(NSInteger)pageIndex;
<a name="l00212"></a>00212 
<a name="l00213"></a>00213 - (<span class="keywordtype">void</span>)zoomToFit;
<a name="l00214"></a>00214 
<a name="l00215"></a>00215 - (<span class="keywordtype">void</span>)zoomToDistance:(CGFloat)distance;
<a name="l00216"></a>00216 
<a name="l00220"></a>00220 - (<span class="keywordtype">void</span>)cancelTouches;
<a name="l00221"></a>00221 
<a name="l00222"></a>00222 @end
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
