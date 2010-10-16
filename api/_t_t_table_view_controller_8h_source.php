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
  <title>Three20: Three20UI/Headers/TTTableViewController.h Source File</title>
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
<h1>Three20UI/Headers/TTTableViewController.h</h1>  </div>
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
<a name="l00018"></a>00018 <span class="preprocessor">#import &quot;Three20UI/TTModelViewController.h&quot;</span>
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 <span class="keyword">@protocol </span><a class="code" href="interface_t_t_table_view_data_source.php">TTTableViewDataSource</a>;
<a name="l00021"></a>00021 <span class="keyword">@class</span> <a class="code" href="interface_t_t_activity_label.php">TTActivityLabel</a>;
<a name="l00022"></a>00022 
<a name="l00023"></a><a class="code" href="interface_t_t_table_view_controller.php">00023</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_table_view_controller.php">TTTableViewController</a> : <a class="code" href="interface_t_t_model_view_controller.php" title="A view controller that manages a model in addition to a view.">TTModelViewController</a> {
<a name="l00024"></a>00024   <a class="code" href="class_u_i_table_view.php" title="Additions.">UITableView</a>*  _tableView;
<a name="l00025"></a>00025   <a class="code" href="class_u_i_view.php">UIView</a>*       _tableBannerView;
<a name="l00026"></a>00026   <a class="code" href="class_u_i_view.php">UIView</a>*       _tableOverlayView;
<a name="l00027"></a>00027   <a class="code" href="class_u_i_view.php">UIView</a>*       _loadingView;
<a name="l00028"></a>00028   <a class="code" href="class_u_i_view.php">UIView</a>*       _errorView;
<a name="l00029"></a>00029   <a class="code" href="class_u_i_view.php">UIView</a>*       _emptyView;
<a name="l00030"></a>00030 
<a name="l00031"></a>00031   NSTimer*      _bannerTimer;
<a name="l00032"></a>00032 
<a name="l00033"></a>00033   <a class="code" href="class_u_i_view.php">UIView</a>*           _menuView;
<a name="l00034"></a>00034   UITableViewCell*  _menuCell;
<a name="l00035"></a>00035 
<a name="l00036"></a>00036   UITableViewStyle        _tableViewStyle;
<a name="l00037"></a>00037 
<a name="l00038"></a>00038   UIInterfaceOrientation  _lastInterfaceOrientation;
<a name="l00039"></a>00039 
<a name="l00040"></a>00040   BOOL _variableHeightRows;
<a name="l00041"></a>00041   BOOL _showTableShadows;
<a name="l00042"></a>00042 
<a name="l00043"></a>00043   id&lt;TTTableViewDataSource&gt; _dataSource;
<a name="l00044"></a>00044   id&lt;UITableViewDelegate&gt;   _tableDelegate;
<a name="l00045"></a>00045 }
<a name="l00046"></a>00046 
<a name="l00047"></a>00047 @property (nonatomic, retain) IBOutlet <a class="code" href="class_u_i_table_view.php" title="Additions.">UITableView</a>* tableView;
<a name="l00048"></a>00048 
<a name="l00052"></a><a class="code" href="interface_t_t_table_view_controller.php#a2c0c397163b1b4241e870d0bf997ee98">00052</a> @property (nonatomic, retain) <a class="code" href="class_u_i_view.php">UIView</a>* tableBannerView;
<a name="l00053"></a>00053 
<a name="l00057"></a><a class="code" href="interface_t_t_table_view_controller.php#a35a639881b27ff56a726d13ee23ebc5a">00057</a> @property (nonatomic, retain) <a class="code" href="class_u_i_view.php">UIView</a>* tableOverlayView;
<a name="l00058"></a>00058 
<a name="l00059"></a>00059 @property (nonatomic, retain) <a class="code" href="class_u_i_view.php">UIView</a>* loadingView;
<a name="l00060"></a>00060 @property (nonatomic, retain) <a class="code" href="class_u_i_view.php">UIView</a>* errorView;
<a name="l00061"></a>00061 @property (nonatomic, retain) <a class="code" href="class_u_i_view.php">UIView</a>* emptyView;
<a name="l00062"></a>00062 
<a name="l00063"></a>00063 @property (nonatomic, readonly) <a class="code" href="class_u_i_view.php">UIView</a>* menuView;
<a name="l00064"></a>00064 
<a name="l00071"></a><a class="code" href="interface_t_t_table_view_controller.php#a90e2864b19220113f2bbf93c0c79e10c">00071</a> @property (nonatomic, retain) <span class="keywordtype">id</span>&lt;<a class="code" href="interface_t_t_table_view_data_source.php">TTTableViewDataSource</a>&gt; dataSource;
<a name="l00072"></a>00072 
<a name="l00076"></a><a class="code" href="interface_t_t_table_view_controller.php#ad1f016f908279a337da8fe69bdac9816">00076</a> @property (nonatomic) UITableViewStyle tableViewStyle;
<a name="l00077"></a>00077 
<a name="l00081"></a><a class="code" href="interface_t_t_table_view_controller.php#a835ee43621a28a17cce38e2914ba9d98">00081</a> @property (nonatomic) BOOL variableHeightRows;
<a name="l00082"></a>00082 
<a name="l00089"></a><a class="code" href="interface_t_t_table_view_controller.php#a5a615ab4a6f2faf8a51eabcaf5664afd">00089</a> @property (nonatomic) BOOL showTableShadows;
<a name="l00090"></a>00090 
<a name="l00094"></a>00094 - (<span class="keywordtype">id</span>)initWithStyle:(UITableViewStyle)style;
<a name="l00095"></a>00095 
<a name="l00101"></a>00101 - (<span class="keywordtype">id</span>&lt;UITableViewDelegate&gt;)createDelegate;
<a name="l00102"></a>00102 
<a name="l00106"></a>00106 - (<span class="keywordtype">void</span>)setTableBannerView:(<a class="code" href="class_u_i_view.php">UIView</a>*)tableBannerView animated:(BOOL)animated;
<a name="l00107"></a>00107 
<a name="l00111"></a>00111 - (<span class="keywordtype">void</span>)showMenu:(<a class="code" href="class_u_i_view.php">UIView</a>*)view forCell:(UITableViewCell*)cell animated:(BOOL)animated;
<a name="l00112"></a>00112 
<a name="l00116"></a>00116 - (<span class="keywordtype">void</span>)hideMenu:(BOOL)animated;
<a name="l00117"></a>00117 
<a name="l00124"></a>00124 - (<span class="keywordtype">void</span>)didSelectObject:(<span class="keywordtype">id</span>)<span class="keywordtype">object</span> atIndexPath:(NSIndexPath*)indexPath;
<a name="l00125"></a>00125 
<a name="l00129"></a>00129 - (BOOL)shouldOpenURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00130"></a>00130 
<a name="l00134"></a>00134 - (<span class="keywordtype">void</span>)didBeginDragging;
<a name="l00135"></a>00135 
<a name="l00139"></a>00139 - (<span class="keywordtype">void</span>)didEndDragging;
<a name="l00140"></a>00140 
<a name="l00144"></a>00144 - (CGRect)rectForOverlayView;
<a name="l00145"></a>00145 
<a name="l00149"></a>00149 - (CGRect)rectForBannerView;
<a name="l00150"></a>00150 
<a name="l00151"></a>00151 @end
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
