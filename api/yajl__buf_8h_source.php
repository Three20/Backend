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
  <title>Three20: extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/yajl_buf.h Source File</title>
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
<h1>extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/yajl_buf.h</h1>  </div>
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
<a name="l00033"></a>00033 <span class="preprocessor">#ifndef __YAJL_BUF_H__</span>
<a name="l00034"></a>00034 <span class="preprocessor"></span><span class="preprocessor">#define __YAJL_BUF_H__</span>
<a name="l00035"></a>00035 <span class="preprocessor"></span>
<a name="l00036"></a>00036 <span class="preprocessor">#include &quot;api/yajl_common.h&quot;</span>
<a name="l00037"></a>00037 <span class="preprocessor">#include &quot;<a class="code" href="yajl__alloc_8h.php" title="default memory allocation routines for yajl which use malloc/realloc and free">yajl_alloc.h</a>&quot;</span>
<a name="l00038"></a>00038 
<a name="l00039"></a>00039 <span class="comment">/*</span>
<a name="l00040"></a>00040 <span class="comment"> * Implementation/performance notes.  If this were moved to a header</span>
<a name="l00041"></a>00041 <span class="comment"> * only implementation using #define&#39;s where possible we might be </span>
<a name="l00042"></a>00042 <span class="comment"> * able to sqeeze a little performance out of the guy by killing function</span>
<a name="l00043"></a>00043 <span class="comment"> * call overhead.  YMMV.</span>
<a name="l00044"></a>00044 <span class="comment"> */</span>
<a name="l00045"></a>00045 
<a name="l00050"></a>00050 <span class="keyword">typedef</span> <span class="keyword">struct </span>yajl_buf_t * yajl_buf;
<a name="l00051"></a>00051 
<a name="l00052"></a>00052 <span class="comment">/* allocate a new buffer */</span>
<a name="l00053"></a>00053 yajl_buf yajl_buf_alloc(<a class="code" href="structyajl__alloc__funcs.php" title="A structure which can be passed to yajl_*_alloc routines to allow the client to specify memory alloca...">yajl_alloc_funcs</a> * alloc);
<a name="l00054"></a>00054 
<a name="l00055"></a>00055 <span class="comment">/* free the buffer */</span>
<a name="l00056"></a>00056 <span class="keywordtype">void</span> yajl_buf_free(yajl_buf buf);
<a name="l00057"></a>00057 
<a name="l00058"></a>00058 <span class="comment">/* append a number of bytes to the buffer */</span>
<a name="l00059"></a>00059 <span class="keywordtype">void</span> yajl_buf_append(yajl_buf buf, <span class="keyword">const</span> <span class="keywordtype">void</span> * data, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> len);
<a name="l00060"></a>00060 
<a name="l00061"></a>00061 <span class="comment">/* empty the buffer */</span>
<a name="l00062"></a>00062 <span class="keywordtype">void</span> yajl_buf_clear(yajl_buf buf);
<a name="l00063"></a>00063 
<a name="l00064"></a>00064 <span class="comment">/* get a pointer to the beginning of the buffer */</span>
<a name="l00065"></a>00065 <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * yajl_buf_data(yajl_buf buf);
<a name="l00066"></a>00066 
<a name="l00067"></a>00067 <span class="comment">/* get the length of the buffer */</span>
<a name="l00068"></a>00068 <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> yajl_buf_len(yajl_buf buf);
<a name="l00069"></a>00069 
<a name="l00070"></a>00070 <span class="comment">/* truncate the buffer */</span>
<a name="l00071"></a>00071 <span class="keywordtype">void</span> yajl_buf_truncate(yajl_buf buf, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> len);
<a name="l00072"></a>00072 
<a name="l00073"></a>00073 <span class="preprocessor">#endif</span>
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
