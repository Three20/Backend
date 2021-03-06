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
<title>Three20 API: Three20UI/Headers/TTPhotoViewController.h Source File</title>
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
<h1>Three20UI/Headers/TTPhotoViewController.h</h1>  </div>
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
<a name="l00017"></a>00017 <span class="comment">// UI</span>
<a name="l00018"></a>00018 <span class="preprocessor">#import &quot;Three20UI/TTModelViewController.h&quot;</span>
<a name="l00019"></a>00019 <span class="preprocessor">#import &quot;Three20UI/TTScrollViewDelegate.h&quot;</span>
<a name="l00020"></a>00020 <span class="preprocessor">#import &quot;Three20UI/TTScrollViewDataSource.h&quot;</span>
<a name="l00021"></a>00021 <span class="preprocessor">#import &quot;Three20UI/TTThumbsViewControllerDelegate.h&quot;</span>
<a name="l00022"></a>00022 
<a name="l00023"></a>00023 <span class="keyword">@protocol </span><a class="code" href="protocol_t_t_photo_source-p.php">TTPhotoSource</a>;
<a name="l00024"></a>00024 <span class="keyword">@class</span> <a class="code" href="interface_t_t_scroll_view.php">TTScrollView</a>;
<a name="l00025"></a>00025 <span class="keyword">@class</span> <a class="code" href="interface_t_t_photo_view.php">TTPhotoView</a>;
<a name="l00026"></a>00026 <span class="keyword">@class</span> <a class="code" href="interface_t_t_style.php">TTStyle</a>;
<a name="l00027"></a>00027 
<a name="l00028"></a><a class="code" href="interface_t_t_photo_view_controller.php">00028</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_photo_view_controller.php">TTPhotoViewController</a> : <a class="code" href="interface_t_t_model_view_controller.php" title="A view controller that manages a model in addition to a view.">TTModelViewController</a> &lt;
<a name="l00029"></a>00029   <a class="code" href="protocol_t_t_scroll_view_delegate-p.php">TTScrollViewDelegate</a>,
<a name="l00030"></a>00030   <a class="code" href="protocol_t_t_scroll_view_data_source-p.php">TTScrollViewDataSource</a>,
<a name="l00031"></a>00031   <a class="code" href="protocol_t_t_thumbs_view_controller_delegate-p.php">TTThumbsViewControllerDelegate</a>
<a name="l00032"></a>00032 &gt; {
<a name="l00033"></a>00033   id&lt;TTPhoto&gt;       _centerPhoto;
<a name="l00034"></a>00034   NSInteger         _centerPhotoIndex;
<a name="l00035"></a>00035 
<a name="l00036"></a>00036   <a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*           _innerView;
<a name="l00037"></a>00037   <a class="code" href="interface_t_t_scroll_view.php">TTScrollView</a>*     _scrollView;
<a name="l00038"></a>00038   <a class="code" href="interface_t_t_photo_view.php">TTPhotoView</a>*      _photoStatusView;
<a name="l00039"></a>00039 
<a name="l00040"></a>00040   <a class="code" href="class_u_i_toolbar.php" title="Additions.">UIToolbar</a>*        _toolbar;
<a name="l00041"></a>00041   UIBarButtonItem*  _nextButton;
<a name="l00042"></a>00042   UIBarButtonItem*  _previousButton;
<a name="l00043"></a>00043 
<a name="l00044"></a>00044   <a class="code" href="interface_t_t_style.php">TTStyle</a>*          _captionStyle;
<a name="l00045"></a>00045 
<a name="l00046"></a>00046   <a class="code" href="class_u_i_image.php" title="Additions.">UIImage</a>*          _defaultImage;
<a name="l00047"></a>00047 
<a name="l00048"></a>00048   <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*         _statusText;
<a name="l00049"></a>00049 
<a name="l00050"></a>00050   NSTimer*          _slideshowTimer;
<a name="l00051"></a>00051   NSTimer*          _loadTimer;
<a name="l00052"></a>00052 
<a name="l00053"></a>00053   BOOL              _delayLoad;
<a name="l00054"></a>00054 
<a name="l00055"></a>00055   <a class="code" href="interface_t_t_thumbs_view_controller.php">TTThumbsViewController</a>* _thumbsController;
<a name="l00056"></a>00056 
<a name="l00057"></a>00057   id&lt;TTPhotoSource&gt; _photoSource;
<a name="l00058"></a>00058 }
<a name="l00059"></a>00059 
<a name="l00063"></a><a class="code" href="interface_t_t_photo_view_controller.php#ae4080daae3eb4cbb4c87162d178c3449">00063</a> @property (nonatomic, retain) id&lt;<a class="code" href="protocol_t_t_photo_source-p.php">TTPhotoSource</a>&gt; photoSource;
<a name="l00064"></a>00064 
<a name="l00070"></a>00070 @property (nonatomic, retain) <span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_photo-p.php">TTPhoto</a>&gt; centerPhoto;
<a name="l00071"></a>00071 
<a name="l00078"></a><a class="code" href="interface_t_t_photo_view_controller.php#a8a4e41837254638e66304de521e7de5a">00078</a> @property (nonatomic, readonly) NSInteger centerPhotoIndex;
<a name="l00079"></a>00079 
<a name="l00083"></a><a class="code" href="interface_t_t_photo_view_controller.php#a982625320715d2e51c0f75bae607aeff">00083</a> @property (nonatomic, retain) <a class="code" href="class_u_i_image.php" title="Additions.">UIImage</a>* defaultImage;
<a name="l00084"></a>00084 
<a name="l00088"></a><a class="code" href="interface_t_t_photo_view_controller.php#a2e04d249898456d712dd25ac1a2b42a1">00088</a> @property (nonatomic, retain) <a class="code" href="interface_t_t_style.php">TTStyle</a>* captionStyle;
<a name="l00089"></a>00089 
<a name="l00090"></a>00090 - (<span class="keywordtype">id</span>)initWithPhoto:(<span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_photo-p.php">TTPhoto</a>&gt;)photo;
<a name="l00091"></a>00091 - (<span class="keywordtype">id</span>)initWithPhotoSource:(<span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_photo_source-p.php">TTPhotoSource</a>&gt;)photoSource;
<a name="l00092"></a>00092 
<a name="l00098"></a>00098 - (<a class="code" href="interface_t_t_photo_view.php">TTPhotoView</a>*)createPhotoView;
<a name="l00099"></a>00099 
<a name="l00105"></a>00105 - (<a class="code" href="interface_t_t_thumbs_view_controller.php">TTThumbsViewController</a>*)createThumbsViewController;
<a name="l00106"></a>00106 
<a name="l00110"></a>00110 - (<span class="keywordtype">void</span>)didMoveToPhoto:(<span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_photo-p.php">TTPhoto</a>&gt;)photo fromPhoto:(<span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_photo-p.php">TTPhoto</a>&gt;)fromPhoto;
<a name="l00111"></a>00111 
<a name="l00115"></a>00115 - (<span class="keywordtype">void</span>)showActivity:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)title;
<a name="l00116"></a>00116 
<a name="l00117"></a>00117 @end
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
