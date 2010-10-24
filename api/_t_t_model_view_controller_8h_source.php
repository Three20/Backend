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
  <title>Three20: Three20UI/Headers/TTModelViewController.h Source File</title>
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
<h1>Three20UI/Headers/TTModelViewController.h</h1>  </div>
</div>
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">//</span>
<a name="l00002"></a>00002 <span class="comment">// Copyright 2009-2010 Facebook</span>
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
<a name="l00018"></a>00018 <span class="preprocessor">#import &quot;Three20UI/TTViewController.h&quot;</span>
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 <span class="comment">// Network</span>
<a name="l00021"></a>00021 <span class="preprocessor">#import &quot;Three20Network/TTModelDelegate.h&quot;</span>
<a name="l00022"></a>00022 
<a name="l00023"></a>00023 <span class="keyword">@protocol </span><a class="code" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a>;
<a name="l00024"></a>00024 
<a name="l00028"></a><a class="code" href="interface_t_t_model_view_controller.php">00028</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_model_view_controller.php" title="A view controller that manages a model in addition to a view.">TTModelViewController</a> : <a class="code" href="interface_t_t_view_controller.php" title="A view controller with some useful additions.">TTViewController</a> &lt;<a class="code" href="protocol_t_t_model_delegate-p.php">TTModelDelegate</a>&gt; {
<a name="l00029"></a>00029   id&lt;TTModel&gt; _model;
<a name="l00030"></a>00030   NSError*    _modelError;
<a name="l00031"></a>00031 
<a name="l00032"></a>00032   <span class="keyword">struct </span>{
<a name="l00033"></a>00033     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isModelDidRefreshInvalid:1;
<a name="l00034"></a>00034     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isModelWillLoadInvalid:1;
<a name="l00035"></a>00035     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isModelDidLoadInvalid:1;
<a name="l00036"></a>00036     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isModelDidLoadFirstTimeInvalid:1;
<a name="l00037"></a>00037     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isModelDidShowFirstTimeInvalid:1;
<a name="l00038"></a>00038     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isViewInvalid:1;
<a name="l00039"></a>00039     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isViewSuspended:1;
<a name="l00040"></a>00040     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isUpdatingView:1;
<a name="l00041"></a>00041     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isShowingEmpty:1;
<a name="l00042"></a>00042     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isShowingLoading:1;
<a name="l00043"></a>00043     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isShowingModel:1;
<a name="l00044"></a>00044     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> isShowingError:1;
<a name="l00045"></a>00045   } _flags;
<a name="l00046"></a>00046 }
<a name="l00047"></a>00047 
<a name="l00048"></a>00048 @property (nonatomic, retain) id&lt;<a class="code" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a>&gt; model;
<a name="l00049"></a>00049 
<a name="l00053"></a><a class="code" href="interface_t_t_model_view_controller.php#abf74cd2086bd97dfa34f6e250598bd8f">00053</a> @property (nonatomic, retain) NSError* modelError;
<a name="l00054"></a>00054 
<a name="l00058"></a>00058 - (<span class="keywordtype">void</span>)createModel;
<a name="l00059"></a>00059 
<a name="l00063"></a>00063 - (<span class="keywordtype">void</span>)invalidateModel;
<a name="l00064"></a>00064 
<a name="l00068"></a>00068 - (BOOL)isModelCreated;
<a name="l00069"></a>00069 
<a name="l00075"></a>00075 - (BOOL)shouldLoad;
<a name="l00076"></a>00076 
<a name="l00082"></a>00082 - (BOOL)shouldReload;
<a name="l00083"></a>00083 
<a name="l00089"></a>00089 - (BOOL)shouldLoadMore;
<a name="l00090"></a>00090 
<a name="l00098"></a>00098 - (BOOL)canShowModel;
<a name="l00099"></a>00099 
<a name="l00103"></a>00103 - (<span class="keywordtype">void</span>)reload;
<a name="l00104"></a>00104 
<a name="l00108"></a>00108 - (<span class="keywordtype">void</span>)reloadIfNeeded;
<a name="l00109"></a>00109 
<a name="l00113"></a>00113 - (<span class="keywordtype">void</span>)refresh;
<a name="l00114"></a>00114 
<a name="l00122"></a>00122 - (<span class="keywordtype">void</span>)beginUpdates;
<a name="l00123"></a>00123 
<a name="l00130"></a>00130 - (<span class="keywordtype">void</span>)endUpdates;
<a name="l00131"></a>00131 
<a name="l00135"></a>00135 - (<span class="keywordtype">void</span>)invalidateView;
<a name="l00136"></a>00136 
<a name="l00140"></a>00140 - (<span class="keywordtype">void</span>)updateView;
<a name="l00141"></a>00141 
<a name="l00148"></a>00148 - (<span class="keywordtype">void</span>)didRefreshModel;
<a name="l00149"></a>00149 
<a name="l00159"></a>00159 - (<span class="keywordtype">void</span>)willLoadModel;
<a name="l00160"></a>00160 
<a name="l00173"></a>00173 - (<span class="keywordtype">void</span>)didLoadModel:(BOOL)firstTime;
<a name="l00174"></a>00174 
<a name="l00181"></a>00181 - (<span class="keywordtype">void</span>)didShowModel:(BOOL)firstTime;
<a name="l00182"></a>00182 
<a name="l00189"></a>00189 - (<span class="keywordtype">void</span>)showModel:(BOOL)show;
<a name="l00190"></a>00190 
<a name="l00197"></a>00197 - (<span class="keywordtype">void</span>)showLoading:(BOOL)show;
<a name="l00198"></a>00198 
<a name="l00205"></a>00205 - (<span class="keywordtype">void</span>)showEmpty:(BOOL)show;
<a name="l00206"></a>00206 
<a name="l00210"></a>00210 - (<span class="keywordtype">void</span>)showError:(BOOL)show;
<a name="l00211"></a>00211 
<a name="l00212"></a>00212 @end
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
