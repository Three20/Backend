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
  <title>Three20: extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_gen.h Source File</title>
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
<h1>extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_gen.h</h1>  </div>
</div>
<div class="contents">
<a href="yajl__gen_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
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
<a name="l00038"></a>00038 <span class="preprocessor">#include &quot;yajl_common.h&quot;</span>
<a name="l00039"></a>00039 
<a name="l00040"></a>00040 <span class="preprocessor">#ifndef __YAJL_GEN_H__</span>
<a name="l00041"></a>00041 <span class="preprocessor"></span><span class="preprocessor">#define __YAJL_GEN_H__</span>
<a name="l00042"></a>00042 <span class="preprocessor"></span>
<a name="l00043"></a>00043 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00044"></a>00044 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00045"></a>00045 <span class="preprocessor">#endif    </span>
<a name="l00046"></a>00046 <span class="preprocessor"></span>
<a name="l00047"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">00047</a>     <span class="keyword">typedef</span> <span class="keyword">enum</span> {
<a name="l00049"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa457aa396721f15a7cf34508bf00e22d7">00049</a>         <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa457aa396721f15a7cf34508bf00e22d7" title="no error">yajl_gen_status_ok</a> = 0,
<a name="l00052"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caacc1716680733d72f34676755cdc4e876">00052</a>         yajl_gen_keys_must_be_strings,
<a name="l00055"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa2db8bdfc64aab69fe95a33ba76d087e8">00055</a>         yajl_max_depth_exceeded,
<a name="l00058"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa9ea74847e6d0e91bc7ee544e9851dc18">00058</a>         yajl_gen_in_error_state,
<a name="l00060"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa8274e47b1f4dd68841a67e56868f7bb4">00060</a>         yajl_gen_generation_complete,                
<a name="l00063"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa870e2d12c18f71a51697ddc4050a1262">00063</a>         yajl_gen_invalid_number,
<a name="l00066"></a><a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caae50f6bbe222a87d4d202933e5347b0d7">00066</a>         <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caae50f6bbe222a87d4d202933e5347b0d7" title="A print callback was passed in, so there is no internal buffer to get from.">yajl_gen_no_buf</a>
<a name="l00067"></a>00067     } yajl_gen_status;
<a name="l00068"></a>00068 
<a name="l00070"></a><a class="code" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">00070</a>     <span class="keyword">typedef</span> <span class="keyword">struct </span>yajl_gen_t * yajl_gen;
<a name="l00071"></a>00071 
<a name="l00073"></a><a class="code" href="yajl__gen_8h.php#ab5ce9d34211be4fe3f05db71182f3b63">00073</a>     <span class="keyword">typedef</span> void (*<a class="code" href="yajl__gen_8h.php#ab5ce9d34211be4fe3f05db71182f3b63" title="a callback used for &amp;quot;printing&amp;quot; the results.">yajl_print_t</a>)(<span class="keywordtype">void</span> * ctx,
<a name="l00074"></a>00074                                  <span class="keyword">const</span> <span class="keywordtype">char</span> * str,
<a name="l00075"></a>00075                                  <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> len);
<a name="l00076"></a>00076 
<a name="l00078"></a><a class="code" href="structyajl__gen__config.php">00078</a>     <span class="keyword">typedef</span> <span class="keyword">struct </span>{
<a name="l00080"></a><a class="code" href="structyajl__gen__config.php#a85437a875ae65161b4f28bac6ff89c99">00080</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> beautify;
<a name="l00084"></a><a class="code" href="structyajl__gen__config.php#aa260f86485635c65ab7cf7bbb6f34107">00084</a>         <span class="keyword">const</span> <span class="keywordtype">char</span> * indentString;
<a name="l00085"></a>00085     } <a class="code" href="structyajl__gen__config.php" title="configuration structure for the generator">yajl_gen_config</a>;
<a name="l00086"></a>00086 
<a name="l00097"></a>00097     YAJL_API yajl_gen <a class="code" href="yajl__gen_8h.php#a628319aaa1d322ffa97ef5a766303d1b" title="allocate a generator handle">yajl_gen_alloc</a>(<span class="keyword">const</span> <a class="code" href="structyajl__gen__config.php" title="configuration structure for the generator">yajl_gen_config</a> * config,
<a name="l00098"></a>00098                                      <span class="keyword">const</span> <a class="code" href="structyajl__alloc__funcs.php" title="A structure which can be passed to yajl_*_alloc routines to allow the client to specify memory alloca...">yajl_alloc_funcs</a> * allocFuncs);
<a name="l00099"></a>00099 
<a name="l00117"></a>00117     YAJL_API yajl_gen <a class="code" href="yajl__gen_8h.php#a8a149e582257cc0a40db14c96296d1b2" title="allocate a generator handle that will print to the specified callback rather than storing the results...">yajl_gen_alloc2</a>(<span class="keyword">const</span> <a class="code" href="yajl__gen_8h.php#ab5ce9d34211be4fe3f05db71182f3b63" title="a callback used for &amp;quot;printing&amp;quot; the results.">yajl_print_t</a> callback,
<a name="l00118"></a>00118                                       <span class="keyword">const</span> <a class="code" href="structyajl__gen__config.php" title="configuration structure for the generator">yajl_gen_config</a> * config,
<a name="l00119"></a>00119                                       <span class="keyword">const</span> <a class="code" href="structyajl__alloc__funcs.php" title="A structure which can be passed to yajl_*_alloc routines to allow the client to specify memory alloca...">yajl_alloc_funcs</a> * allocFuncs,
<a name="l00120"></a>00120                                       <span class="keywordtype">void</span> * ctx);
<a name="l00121"></a>00121 
<a name="l00123"></a>00123     YAJL_API <span class="keywordtype">void</span> <a class="code" href="yajl__gen_8h.php#a9579c99fb77fb6f607db47de662adc9c" title="free a generator handle">yajl_gen_free</a>(yajl_gen handle);
<a name="l00124"></a>00124 
<a name="l00125"></a>00125     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_integer(yajl_gen hand, <span class="keywordtype">long</span> <span class="keywordtype">int</span> number);
<a name="l00129"></a>00129     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> <a class="code" href="yajl__gen_8h.php#ab588fa96fd582c3f592923fc0172f17c" title="generate a floating point number.">yajl_gen_double</a>(yajl_gen hand, <span class="keywordtype">double</span> number);
<a name="l00130"></a>00130     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_number(yajl_gen hand,
<a name="l00131"></a>00131                                              <span class="keyword">const</span> <span class="keywordtype">char</span> * num,
<a name="l00132"></a>00132                                              <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> len);
<a name="l00133"></a>00133     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_string(yajl_gen hand,
<a name="l00134"></a>00134                                              <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * str,
<a name="l00135"></a>00135                                              <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> len);
<a name="l00136"></a>00136     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_null(yajl_gen hand);
<a name="l00137"></a>00137     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_bool(yajl_gen hand, <span class="keywordtype">int</span> <span class="keywordtype">boolean</span>);    
<a name="l00138"></a>00138     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_map_open(yajl_gen hand);
<a name="l00139"></a>00139     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_map_close(yajl_gen hand);
<a name="l00140"></a>00140     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_array_open(yajl_gen hand);
<a name="l00141"></a>00141     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> yajl_gen_array_close(yajl_gen hand);
<a name="l00142"></a>00142 
<a name="l00146"></a>00146     YAJL_API <a class="code" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca" title="generator status codes">yajl_gen_status</a> <a class="code" href="yajl__gen_8h.php#a38ab5597a024b05fb6c6564eaaa192ab" title="access the null terminated generator buffer.">yajl_gen_get_buf</a>(yajl_gen hand,
<a name="l00147"></a>00147                                               <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> ** buf,
<a name="l00148"></a>00148                                               <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> * len);
<a name="l00149"></a>00149 
<a name="l00153"></a>00153     YAJL_API <span class="keywordtype">void</span> <a class="code" href="yajl__gen_8h.php#a50116818ab3c0f3116e3baff0db2f4ef" title="clear yajl&amp;#39;s output buffer, but maintain all internal generation state.">yajl_gen_clear</a>(yajl_gen hand);
<a name="l00154"></a>00154 
<a name="l00155"></a>00155 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00156"></a>00156 <span class="preprocessor"></span>}
<a name="l00157"></a>00157 <span class="preprocessor">#endif    </span>
<a name="l00158"></a>00158 <span class="preprocessor"></span>
<a name="l00159"></a>00159 <span class="preprocessor">#endif</span>
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
