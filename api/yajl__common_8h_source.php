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
<title>Three20 API: extThree20JSON/Vendors/YAJL/yajl/src/api/yajl_common.h Source File</title>
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
<h1>extThree20JSON/Vendors/YAJL/yajl/src/api/yajl_common.h</h1>  </div>
</div>
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright 2010, Lloyd Hilaiel.</span>
<a name="l00003"></a>00003 <span class="comment"> * </span>
<a name="l00004"></a>00004 <span class="comment"> * Redistribution and use in source and binary forms, with or without</span>
<a name="l00005"></a>00005 <span class="comment"> * modification, are permitted provided that the following conditions are</span>
<a name="l00006"></a>00006 <span class="comment"> * met:</span>
<a name="l00007"></a>00007 <span class="comment"> * </span>
<a name="l00008"></a>00008 <span class="comment"> *  1. Redistributions of source code must retain the above copyright</span>
<a name="l00009"></a>00009 <span class="comment"> *     notice, this list of conditions and the following disclaimer.</span>
<a name="l00010"></a>00010 <span class="comment"> * </span>
<a name="l00011"></a>00011 <span class="comment"> *  2. Redistributions in binary form must reproduce the above copyright</span>
<a name="l00012"></a>00012 <span class="comment"> *     notice, this list of conditions and the following disclaimer in</span>
<a name="l00013"></a>00013 <span class="comment"> *     the documentation and/or other materials provided with the</span>
<a name="l00014"></a>00014 <span class="comment"> *     distribution.</span>
<a name="l00015"></a>00015 <span class="comment"> * </span>
<a name="l00016"></a>00016 <span class="comment"> *  3. Neither the name of Lloyd Hilaiel nor the names of its</span>
<a name="l00017"></a>00017 <span class="comment"> *     contributors may be used to endorse or promote products derived</span>
<a name="l00018"></a>00018 <span class="comment"> *     from this software without specific prior written permission.</span>
<a name="l00019"></a>00019 <span class="comment"> * </span>
<a name="l00020"></a>00020 <span class="comment"> * THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS&#39;&#39; AND ANY EXPRESS OR</span>
<a name="l00021"></a>00021 <span class="comment"> * IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED</span>
<a name="l00022"></a>00022 <span class="comment"> * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE</span>
<a name="l00023"></a>00023 <span class="comment"> * DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT,</span>
<a name="l00024"></a>00024 <span class="comment"> * INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES</span>
<a name="l00025"></a>00025 <span class="comment"> * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR</span>
<a name="l00026"></a>00026 <span class="comment"> * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)</span>
<a name="l00027"></a>00027 <span class="comment"> * HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,</span>
<a name="l00028"></a>00028 <span class="comment"> * STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING</span>
<a name="l00029"></a>00029 <span class="comment"> * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE</span>
<a name="l00030"></a>00030 <span class="comment"> * POSSIBILITY OF SUCH DAMAGE.</span>
<a name="l00031"></a>00031 <span class="comment"> */</span> 
<a name="l00032"></a>00032 
<a name="l00033"></a>00033 <span class="preprocessor">#ifndef __YAJL_COMMON_H__</span>
<a name="l00034"></a>00034 <span class="preprocessor"></span><span class="preprocessor">#define __YAJL_COMMON_H__</span>
<a name="l00035"></a>00035 <span class="preprocessor"></span>
<a name="l00036"></a>00036 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00037"></a>00037 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00038"></a>00038 <span class="preprocessor">#endif    </span>
<a name="l00039"></a>00039 <span class="preprocessor"></span>
<a name="l00040"></a>00040 <span class="preprocessor">#define YAJL_MAX_DEPTH 128</span>
<a name="l00041"></a>00041 <span class="preprocessor"></span>
<a name="l00042"></a>00042 <span class="comment">/* msft dll export gunk.  To build a DLL on windows, you</span>
<a name="l00043"></a>00043 <span class="comment"> * must define WIN32, YAJL_SHARED, and YAJL_BUILD.  To use a shared</span>
<a name="l00044"></a>00044 <span class="comment"> * DLL, you must define YAJL_SHARED and WIN32 */</span>
<a name="l00045"></a>00045 <span class="preprocessor">#if defined(WIN32) &amp;&amp; defined(YAJL_SHARED)</span>
<a name="l00046"></a>00046 <span class="preprocessor"></span><span class="preprocessor">#  ifdef YAJL_BUILD</span>
<a name="l00047"></a>00047 <span class="preprocessor"></span><span class="preprocessor">#    define YAJL_API __declspec(dllexport)</span>
<a name="l00048"></a>00048 <span class="preprocessor"></span><span class="preprocessor">#  else</span>
<a name="l00049"></a>00049 <span class="preprocessor"></span><span class="preprocessor">#    define YAJL_API __declspec(dllimport)</span>
<a name="l00050"></a>00050 <span class="preprocessor"></span><span class="preprocessor">#  endif</span>
<a name="l00051"></a>00051 <span class="preprocessor"></span><span class="preprocessor">#else</span>
<a name="l00052"></a>00052 <span class="preprocessor"></span><span class="preprocessor">#  define YAJL_API</span>
<a name="l00053"></a>00053 <span class="preprocessor"></span><span class="preprocessor">#endif </span>
<a name="l00054"></a>00054 <span class="preprocessor"></span>
<a name="l00057"></a>00057 <span class="keyword">typedef</span> <span class="keywordtype">void</span> * (*yajl_malloc_func)(<span class="keywordtype">void</span> *ctx, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> sz);
<a name="l00058"></a>00058 
<a name="l00061"></a>00061 <span class="keyword">typedef</span> void (*yajl_free_func)(<span class="keywordtype">void</span> *ctx, <span class="keywordtype">void</span> * ptr);
<a name="l00062"></a>00062 
<a name="l00064"></a>00064 <span class="keyword">typedef</span> <span class="keywordtype">void</span> * (*yajl_realloc_func)(<span class="keywordtype">void</span> *ctx, <span class="keywordtype">void</span> * ptr, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> sz);
<a name="l00065"></a>00065 
<a name="l00068"></a><a class="code" href="structyajl__alloc__funcs.php">00068</a> <span class="keyword">typedef</span> <span class="keyword">struct</span>
<a name="l00069"></a>00069 {
<a name="l00071"></a><a class="code" href="structyajl__alloc__funcs.php#a4e32ade73f896e6446f8cb0ad0ee7456">00071</a>     yajl_malloc_func malloc;
<a name="l00073"></a><a class="code" href="structyajl__alloc__funcs.php#ae677d7c736fe2d735f83f3dd17cfacb7">00073</a>     yajl_realloc_func realloc;
<a name="l00076"></a><a class="code" href="structyajl__alloc__funcs.php#a0c29b65b64754fdadbbbe9ea04701a2f">00076</a>     yajl_free_func free;
<a name="l00078"></a><a class="code" href="structyajl__alloc__funcs.php#afa64c0d73d185a6fdabd648e9746f6b5">00078</a>     <span class="keywordtype">void</span> * ctx;
<a name="l00079"></a>00079 } <a class="code" href="structyajl__alloc__funcs.php" title="A structure which can be passed to yajl_*_alloc routines to allow the client to specify memory alloca...">yajl_alloc_funcs</a>;
<a name="l00080"></a>00080 
<a name="l00081"></a>00081 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00082"></a>00082 <span class="preprocessor"></span>}
<a name="l00083"></a>00083 <span class="preprocessor">#endif    </span>
<a name="l00084"></a>00084 <span class="preprocessor"></span>
<a name="l00085"></a>00085 <span class="preprocessor">#endif</span>
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
