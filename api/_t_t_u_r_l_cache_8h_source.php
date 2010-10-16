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
  <title>Three20: Three20Network/Headers/TTURLCache.h Source File</title>
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
<h1>Three20Network/Headers/TTURLCache.h</h1>  </div>
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
<a name="l00017"></a>00017 <span class="preprocessor">#import &lt;Foundation/Foundation.h&gt;</span>
<a name="l00018"></a>00018 <span class="preprocessor">#import &lt;UIKit/UIKit.h&gt;</span>
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 <span class="keyword">@class</span> <a class="code" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a>;
<a name="l00021"></a>00021 
<a name="l00027"></a><a class="code" href="interface_t_t_u_r_l_cache.php">00027</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_u_r_l_cache.php" title="A general purpose URL cache for caching data in memory and on disk.">TTURLCache</a> : <a class="code" href="class_n_s_object.php" title="Additions.">NSObject</a> {
<a name="l00028"></a>00028   <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*             _name;
<a name="l00029"></a>00029   <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*             _cachePath;
<a name="l00030"></a>00030   <a class="code" href="class_n_s_mutable_dictionary.php" title="Additions.">NSMutableDictionary</a>*  _imageCache;
<a name="l00031"></a>00031   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>*       _imageSortedList;
<a name="l00032"></a>00032   NSUInteger            _totalPixelCount;
<a name="l00033"></a>00033   NSUInteger            _maxPixelCount;
<a name="l00034"></a>00034   NSInteger             _totalLoading;
<a name="l00035"></a>00035   NSTimeInterval        _invalidationAge;
<a name="l00036"></a>00036   BOOL                  _disableDiskCache;
<a name="l00037"></a>00037   BOOL                  _disableImageCache;
<a name="l00038"></a>00038 }
<a name="l00039"></a>00039 
<a name="l00043"></a><a class="code" href="interface_t_t_u_r_l_cache.php#a2d1220ae6f57ec0c86f5f93351dc0a1b">00043</a> @property (nonatomic) BOOL disableDiskCache;
<a name="l00044"></a>00044 
<a name="l00048"></a><a class="code" href="interface_t_t_u_r_l_cache.php#adbfcc7dd613e62be6a8930f146a2c2bf">00048</a> @property (nonatomic) BOOL disableImageCache;
<a name="l00049"></a>00049 
<a name="l00053"></a><a class="code" href="interface_t_t_u_r_l_cache.php#a52da998d5df61ba519db1469597a54a3">00053</a> @property (nonatomic, copy) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* cachePath;
<a name="l00054"></a>00054 
<a name="l00058"></a><a class="code" href="interface_t_t_u_r_l_cache.php#ad4c768d564e500fb4a2744244e274fab">00058</a> @property (nonatomic, readonly) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* etagCachePath;
<a name="l00059"></a>00059 
<a name="l00066"></a><a class="code" href="interface_t_t_u_r_l_cache.php#a6dc964b9bbbd1b7c99af928faaf01992">00066</a> @property (nonatomic) NSUInteger maxPixelCount;
<a name="l00067"></a>00067 
<a name="l00071"></a><a class="code" href="interface_t_t_u_r_l_cache.php#a2bec99453fca73fc8e4942737a9ad263">00071</a> @property (nonatomic) NSTimeInterval invalidationAge;
<a name="l00072"></a>00072 
<a name="l00073"></a>00073 
<a name="l00077"></a>00077 + (<a class="code" href="interface_t_t_u_r_l_cache.php" title="A general purpose URL cache for caching data in memory and on disk.">TTURLCache</a>*)cacheWithName:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)name;
<a name="l00078"></a>00078 
<a name="l00082"></a>00082 + (<a class="code" href="interface_t_t_u_r_l_cache.php" title="A general purpose URL cache for caching data in memory and on disk.">TTURLCache</a>*)sharedCache;
<a name="l00083"></a>00083 
<a name="l00087"></a>00087 + (<span class="keywordtype">void</span>)setSharedCache:(<a class="code" href="interface_t_t_u_r_l_cache.php" title="A general purpose URL cache for caching data in memory and on disk.">TTURLCache</a>*)cache;
<a name="l00088"></a>00088 
<a name="l00089"></a>00089 - (<span class="keywordtype">id</span>)initWithName:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)name;
<a name="l00090"></a>00090 
<a name="l00094"></a>00094 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)keyForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00095"></a>00095 
<a name="l00099"></a>00099 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)cachePathForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00100"></a>00100 
<a name="l00104"></a>00104 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)cachePathForKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key;
<a name="l00105"></a>00105 
<a name="l00113"></a>00113 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)etagCachePathForKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key;
<a name="l00114"></a>00114 
<a name="l00118"></a>00118 - (BOOL)hasDataForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00119"></a>00119 
<a name="l00123"></a>00123 - (BOOL)hasDataForKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key expires:(NSTimeInterval)expirationAge;
<a name="l00124"></a>00124 
<a name="l00128"></a>00128 - (BOOL)hasImageForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL fromDisk:(BOOL)fromDisk;
<a name="l00129"></a>00129 
<a name="l00135"></a>00135 - (<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*)dataForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00136"></a>00136 
<a name="l00142"></a>00142 - (<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*)dataForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL expires:(NSTimeInterval)expirationAge
<a name="l00143"></a>00143            timestamp:(<a class="code" href="class_n_s_date.php" title="Additions.">NSDate</a>**)timestamp;
<a name="l00144"></a>00144 - (<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*)dataForKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key expires:(NSTimeInterval)expirationAge
<a name="l00145"></a>00145            timestamp:(<a class="code" href="class_n_s_date.php" title="Additions.">NSDate</a>**)timestamp;
<a name="l00146"></a>00146 
<a name="l00152"></a>00152 - (<span class="keywordtype">id</span>)imageForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00153"></a>00153 - (<span class="keywordtype">id</span>)imageForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL fromDisk:(BOOL)fromDisk;
<a name="l00154"></a>00154 
<a name="l00158"></a>00158 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)etagForKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key;
<a name="l00159"></a>00159 
<a name="l00163"></a>00163 - (<span class="keywordtype">void</span>)storeData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*)data forURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00164"></a>00164 - (<span class="keywordtype">void</span>)storeData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*)data forKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key;
<a name="l00165"></a>00165 
<a name="l00169"></a>00169 - (<span class="keywordtype">void</span>)storeImage:(<a class="code" href="class_u_i_image.php" title="Additions.">UIImage</a>*)image forURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00170"></a>00170 
<a name="l00174"></a>00174 - (<span class="keywordtype">void</span>)storeEtag:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)etag forKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key;
<a name="l00175"></a>00175 
<a name="l00181"></a>00181 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)storeTemporaryImage:(<a class="code" href="class_u_i_image.php" title="Additions.">UIImage</a>*)image toDisk:(BOOL)toDisk;
<a name="l00182"></a>00182 
<a name="l00188"></a>00188 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)storeTemporaryData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*)data;
<a name="l00189"></a>00189 
<a name="l00195"></a>00195 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)storeTemporaryFile:(NSURL*)fileURL;
<a name="l00196"></a>00196 
<a name="l00203"></a>00203 - (<span class="keywordtype">void</span>)moveDataForURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)oldURL toURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)newURL;
<a name="l00204"></a>00204 
<a name="l00205"></a>00205 - (<span class="keywordtype">void</span>)moveDataFromPath:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)path toURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)newURL;
<a name="l00206"></a>00206 
<a name="l00207"></a>00207 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)moveDataFromPathToTemporaryURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)path;
<a name="l00208"></a>00208 
<a name="l00212"></a>00212 - (<span class="keywordtype">void</span>)removeURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL fromDisk:(BOOL)fromDisk;
<a name="l00213"></a>00213 
<a name="l00214"></a>00214 - (<span class="keywordtype">void</span>)removeKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key;
<a name="l00215"></a>00215 
<a name="l00219"></a>00219 - (<span class="keywordtype">void</span>)removeAll:(BOOL)fromDisk;
<a name="l00220"></a>00220 
<a name="l00228"></a>00228 - (<span class="keywordtype">void</span>)invalidateURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL;
<a name="l00229"></a>00229 
<a name="l00230"></a>00230 - (<span class="keywordtype">void</span>)invalidateKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)key;
<a name="l00231"></a>00231 
<a name="l00235"></a>00235 - (<span class="keywordtype">void</span>)invalidateAll;
<a name="l00236"></a>00236 
<a name="l00237"></a>00237 - (<span class="keywordtype">void</span>)logMemoryUsage;
<a name="l00238"></a>00238 
<a name="l00239"></a>00239 @end
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
