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
  <title>Three20: Three20Network/Headers/TTURLRequest.h Source File</title>
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
<h1>Three20Network/Headers/TTURLRequest.h</h1>  </div>
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
<a name="l00018"></a>00018 
<a name="l00019"></a>00019 <span class="comment">// Network</span>
<a name="l00020"></a>00020 <span class="preprocessor">#import &quot;Three20Network/TTURLRequestCachePolicy.h&quot;</span>
<a name="l00021"></a>00021 
<a name="l00022"></a>00022 <span class="comment">// Core</span>
<a name="l00023"></a>00023 <span class="preprocessor">#import &quot;Three20Core/TTCorePreprocessorMacros.h&quot;</span> <span class="comment">// For __TTDEPRECATED_METHOD</span>
<a name="l00024"></a>00024 
<a name="l00025"></a>00025 <span class="keyword">@protocol </span><a class="code" href="protocol_t_t_u_r_l_request_delegate-p.php">TTURLRequestDelegate</a>;
<a name="l00026"></a>00026 <span class="keyword">@protocol </span><a class="code" href="protocol_t_t_u_r_l_response-p.php" title="A response protocol for TTURLRequest.">TTURLResponse</a>;
<a name="l00027"></a>00027 
<a name="l00034"></a><a class="code" href="interface_t_t_u_r_l_request.php">00034</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a> : <a class="code" href="class_n_s_object.php" title="Additions.">NSObject</a> {
<a name="l00035"></a>00035   <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*             _urlPath;
<a name="l00036"></a>00036 
<a name="l00037"></a>00037   <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*             _httpMethod;
<a name="l00038"></a>00038   <a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*               _httpBody;
<a name="l00039"></a>00039   <a class="code" href="class_n_s_mutable_dictionary.php" title="Additions.">NSMutableDictionary</a>*  _parameters;
<a name="l00040"></a>00040   <a class="code" href="class_n_s_mutable_dictionary.php" title="Additions.">NSMutableDictionary</a>*  _headers;
<a name="l00041"></a>00041 
<a name="l00042"></a>00042   <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*             _contentType;
<a name="l00043"></a>00043   NSStringEncoding      _charsetForMultipart;
<a name="l00044"></a>00044 
<a name="l00045"></a>00045   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>*       _files;
<a name="l00046"></a>00046 
<a name="l00047"></a>00047   id&lt;TTURLResponse&gt;     _response;
<a name="l00048"></a>00048 
<a name="l00049"></a>00049   TTURLRequestCachePolicy _cachePolicy;
<a name="l00050"></a>00050   NSTimeInterval          _cacheExpirationAge;
<a name="l00051"></a>00051   <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*               _cacheKey;
<a name="l00052"></a>00052 
<a name="l00053"></a>00053   <a class="code" href="class_n_s_date.php" title="Additions.">NSDate</a>*               _timestamp;
<a name="l00054"></a>00054 
<a name="l00055"></a>00055   NSInteger             _totalBytesLoaded;
<a name="l00056"></a>00056   NSInteger             _totalBytesExpected;
<a name="l00057"></a>00057 
<a name="l00058"></a>00058   <span class="keywordtype">id</span>    _userInfo;
<a name="l00059"></a>00059 
<a name="l00060"></a>00060   BOOL  _isLoading;
<a name="l00061"></a>00061   BOOL  _shouldHandleCookies;
<a name="l00062"></a>00062   BOOL  _respondedFromCache;
<a name="l00063"></a>00063   BOOL  _filterPasswordLogging;
<a name="l00064"></a>00064 
<a name="l00065"></a>00065   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>* _delegates;
<a name="l00066"></a>00066 }
<a name="l00067"></a>00067 
<a name="l00071"></a><a class="code" href="interface_t_t_u_r_l_request.php#a4ad107c41d501a5666e65ad357842a4a">00071</a> @property (nonatomic, copy) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* urlPath;
<a name="l00072"></a>00072 
<a name="l00079"></a><a class="code" href="interface_t_t_u_r_l_request.php#ac8412fff243d33553ac0c20800e604ed">00079</a> @property (nonatomic, copy) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* URL __TTDEPRECATED_METHOD;
<a name="l00080"></a>00080 
<a name="l00089"></a>00089 @property (nonatomic, copy) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* httpMethod;
<a name="l00090"></a>00090 
<a name="l00098"></a><a class="code" href="interface_t_t_u_r_l_request.php#ae5480dad46898eb6007913b6746e706c">00098</a> @property (nonatomic, retain) <span class="keywordtype">id</span>&lt;<a class="code" href="protocol_t_t_u_r_l_response-p.php" title="A response protocol for TTURLRequest.">TTURLResponse</a>&gt; response;
<a name="l00099"></a>00099 
<a name="l00107"></a><a class="code" href="interface_t_t_u_r_l_request.php#a81363a89ad2263f875252fa65cacf8ec">00107</a> @property (nonatomic, retain) <a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>* httpBody;
<a name="l00108"></a>00108 
<a name="l00114"></a><a class="code" href="interface_t_t_u_r_l_request.php#a7cf514d3f3d6526b183220d9c21513fd">00114</a> @property (nonatomic, copy) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* contentType;
<a name="l00115"></a>00115 
<a name="l00119"></a><a class="code" href="interface_t_t_u_r_l_request.php#ab7b6a26183ddcb2d0ff3ff17d3da4441">00119</a> @property (nonatomic, readonly) <a class="code" href="class_n_s_mutable_dictionary.php" title="Additions.">NSMutableDictionary</a>* parameters;
<a name="l00120"></a>00120 
<a name="l00124"></a><a class="code" href="interface_t_t_u_r_l_request.php#a2e0a8de578fffdf0e14f38b00e2f7116">00124</a> @property (nonatomic, readonly) <a class="code" href="class_n_s_mutable_dictionary.php" title="Additions.">NSMutableDictionary</a>* headers;
<a name="l00125"></a>00125 
<a name="l00129"></a><a class="code" href="interface_t_t_u_r_l_request.php#a34ad517e5d5fe222baec6702b9eb4cde">00129</a> @property (nonatomic) TTURLRequestCachePolicy cachePolicy;
<a name="l00130"></a>00130 
<a name="l00136"></a><a class="code" href="interface_t_t_u_r_l_request.php#aa0f7d2b7001143d1b9f1d3635449a4f1">00136</a> @property (nonatomic) NSTimeInterval cacheExpirationAge;
<a name="l00137"></a>00137 
<a name="l00144"></a><a class="code" href="interface_t_t_u_r_l_request.php#ace472f23740be06aa40dffdbdca99953">00144</a> @property (nonatomic, retain) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* cacheKey;
<a name="l00145"></a>00145 
<a name="l00152"></a><a class="code" href="interface_t_t_u_r_l_request.php#af0b3b2400e591b6e5d6f535ee6d63207">00152</a> @property (nonatomic, retain) <span class="keywordtype">id</span> userInfo;
<a name="l00153"></a>00153 
<a name="l00154"></a>00154 @property (nonatomic, retain) <a class="code" href="class_n_s_date.php" title="Additions.">NSDate</a>* timestamp;
<a name="l00155"></a>00155 
<a name="l00159"></a><a class="code" href="interface_t_t_u_r_l_request.php#a25d8560d31c9df8a7a274e2ad1825081">00159</a> @property (nonatomic) BOOL isLoading;
<a name="l00160"></a>00160 
<a name="l00171"></a><a class="code" href="interface_t_t_u_r_l_request.php#aa421862494ee35a9bdb29102044d4301">00171</a> @property (nonatomic) BOOL shouldHandleCookies;
<a name="l00172"></a>00172 
<a name="l00176"></a><a class="code" href="interface_t_t_u_r_l_request.php#a8021fb197041175383a69f20e0e471bc">00176</a> @property (nonatomic) NSInteger totalBytesLoaded;
<a name="l00177"></a>00177 
<a name="l00181"></a><a class="code" href="interface_t_t_u_r_l_request.php#a52951bb86cb8979e357db311468fce2b">00181</a> @property (nonatomic) NSInteger totalBytesExpected;
<a name="l00182"></a>00182 
<a name="l00188"></a><a class="code" href="interface_t_t_u_r_l_request.php#a4276b8e633d614eab0fd649775d75e7a">00188</a> @property (nonatomic) BOOL respondedFromCache;
<a name="l00189"></a>00189 
<a name="l00193"></a><a class="code" href="interface_t_t_u_r_l_request.php#a01c9b278379d6fe161e156a986ab845b">00193</a> @property (nonatomic, assign) BOOL filterPasswordLogging;
<a name="l00194"></a>00194 
<a name="l00200"></a><a class="code" href="interface_t_t_u_r_l_request.php#a8a432224b4b3c781a593f8512c124ec1">00200</a> @property (nonatomic) NSStringEncoding charsetForMultipart;
<a name="l00201"></a>00201 
<a name="l00205"></a><a class="code" href="interface_t_t_u_r_l_request.php#a71bb6bdcc1bc9699a0babfd2b8a398db">00205</a> @property (nonatomic, readonly) <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>* delegates;
<a name="l00206"></a>00206 
<a name="l00207"></a>00207 
<a name="l00208"></a>00208 + (<a class="code" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a>*)request;
<a name="l00209"></a>00209 
<a name="l00210"></a>00210 + (<a class="code" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a>*)requestWithURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL delegate:(<span class="keywordtype">id</span> <span class="comment">/*&lt;TTURLRequestDelegate&gt;*/</span>)delegate;
<a name="l00211"></a>00211 
<a name="l00212"></a>00212 - (<span class="keywordtype">id</span>)initWithURL:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)URL delegate:(<span class="keywordtype">id</span> <span class="comment">/*&lt;TTURLRequestDelegate&gt;*/</span>)delegate;
<a name="l00213"></a>00213 
<a name="l00214"></a>00214 - (<span class="keywordtype">void</span>)setValue:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)value forHTTPHeaderField:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)field;
<a name="l00215"></a>00215 
<a name="l00219"></a>00219 - (<span class="keywordtype">void</span>)addFile:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a>*)data mimeType:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)mimeType fileName:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)fileName;
<a name="l00220"></a>00220 
<a name="l00229"></a>00229 - (BOOL)send;
<a name="l00230"></a>00230 
<a name="l00239"></a>00239 - (BOOL)sendSynchronously;
<a name="l00240"></a>00240 
<a name="l00247"></a>00247 - (<span class="keywordtype">void</span>)cancel;
<a name="l00248"></a>00248 
<a name="l00249"></a>00249 - (NSURLRequest*)createNSURLRequest;
<a name="l00250"></a>00250 
<a name="l00251"></a>00251 @end
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
