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
  <title>Three20: extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_parse.h Source File</title>
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
<h1>extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_parse.h</h1>  </div>
</div>
<div class="contents">
<a href="yajl__parse_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
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
<a name="l00040"></a>00040 <span class="preprocessor">#ifndef __YAJL_PARSE_H__</span>
<a name="l00041"></a>00041 <span class="preprocessor"></span><span class="preprocessor">#define __YAJL_PARSE_H__</span>
<a name="l00042"></a>00042 <span class="preprocessor"></span>
<a name="l00043"></a>00043 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00044"></a>00044 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00045"></a>00045 <span class="preprocessor">#endif    </span>
<a name="l00046"></a>00046 <span class="preprocessor"></span>
<a name="l00047"></a><a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">00047</a>     <span class="keyword">typedef</span> <span class="keyword">enum</span> {
<a name="l00049"></a><a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7da67a2a1b5d684de357adb0e1ea444ffd7">00049</a>         yajl_status_ok,
<a name="l00051"></a><a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7da44d6b8f18ecb5e30be3eb5b2f1f5717e">00051</a>         yajl_status_client_canceled,
<a name="l00055"></a><a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7da88c7cd7b308d09c32dad74b47b9ae3f4">00055</a>         yajl_status_insufficient_data,
<a name="l00058"></a><a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7daeea581fa9c967d34ad5f062ef59718fd">00058</a>         <a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7daeea581fa9c967d34ad5f062ef59718fd" title="An error occured during the parse.">yajl_status_error</a>
<a name="l00059"></a>00059     } yajl_status;
<a name="l00060"></a>00060 
<a name="l00062"></a>00062     YAJL_API <span class="keyword">const</span> <span class="keywordtype">char</span> * <a class="code" href="yajl__parse_8h.php#ae00bd26f1b98a1ed5c86a4480e7782aa" title="attain a human readable, english, string for an error">yajl_status_to_string</a>(<a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d" title="error codes returned from this interface">yajl_status</a> code);
<a name="l00063"></a>00063 
<a name="l00065"></a><a class="code" href="yajl__parse_8h.php#acb85b92f3d7cb6f0743b4e68d0172323">00065</a>     <span class="keyword">typedef</span> <span class="keyword">struct </span><a class="code" href="structyajl__handle__t.php">yajl_handle_t</a> * <a class="code" href="structyajl__handle__t.php">yajl_handle</a>;
<a name="l00066"></a>00066 
<a name="l00088"></a><a class="code" href="structyajl__callbacks.php">00088</a>     <span class="keyword">typedef</span> <span class="keyword">struct </span>{
<a name="l00089"></a>00089         int (* yajl_null)(<span class="keywordtype">void</span> * ctx);
<a name="l00090"></a>00090         int (* yajl_boolean)(<span class="keywordtype">void</span> * ctx, <span class="keywordtype">int</span> boolVal);
<a name="l00091"></a>00091         int (* yajl_integer)(<span class="keywordtype">void</span> * ctx, <span class="keywordtype">long</span> integerVal);
<a name="l00092"></a>00092         int (* yajl_double)(<span class="keywordtype">void</span> * ctx, <span class="keywordtype">double</span> doubleVal);
<a name="l00095"></a><a class="code" href="structyajl__callbacks.php#a485231e16d8cfc35efef17dfe2da2964">00095</a>         int (* yajl_number)(<span class="keywordtype">void</span> * ctx, <span class="keyword">const</span> <span class="keywordtype">char</span> * numberVal,
<a name="l00096"></a>00096                             <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> numberLen);
<a name="l00097"></a>00097 
<a name="l00100"></a><a class="code" href="structyajl__callbacks.php#a401e63b822dccecc78dc548a5a35cff1">00100</a>         int (* yajl_string)(<span class="keywordtype">void</span> * ctx, <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * stringVal,
<a name="l00101"></a>00101                             <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> stringLen);
<a name="l00102"></a>00102 
<a name="l00103"></a>00103         int (* yajl_start_map)(<span class="keywordtype">void</span> * ctx);
<a name="l00104"></a>00104         int (* yajl_map_key)(<span class="keywordtype">void</span> * ctx, <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * key,
<a name="l00105"></a>00105                              <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> stringLen);
<a name="l00106"></a>00106         int (* yajl_end_map)(<span class="keywordtype">void</span> * ctx);        
<a name="l00107"></a>00107 
<a name="l00108"></a>00108         int (* yajl_start_array)(<span class="keywordtype">void</span> * ctx);
<a name="l00109"></a>00109         int (* yajl_end_array)(<span class="keywordtype">void</span> * ctx);        
<a name="l00110"></a>00110     } <a class="code" href="structyajl__callbacks.php" title="yajl is an event driven parser.">yajl_callbacks</a>;
<a name="l00111"></a>00111     
<a name="l00113"></a><a class="code" href="structyajl__parser__config.php">00113</a>     <span class="keyword">typedef</span> <span class="keyword">struct </span>{
<a name="l00116"></a><a class="code" href="structyajl__parser__config.php#a756447fe054dc7a0b423d679e8391163">00116</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> allowComments;
<a name="l00119"></a><a class="code" href="structyajl__parser__config.php#a33f7ab7fb27bf626441f15d649dea5d9">00119</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> checkUTF8;
<a name="l00120"></a>00120     } <a class="code" href="structyajl__parser__config.php" title="configuration structure for the generator">yajl_parser_config</a>;
<a name="l00121"></a>00121 
<a name="l00130"></a>00130     YAJL_API yajl_handle <a class="code" href="yajl__parse_8h.php#ac5b76bd2683e48ea5cb97376a62bba46" title="allocate a parser handle">yajl_alloc</a>(<span class="keyword">const</span> <a class="code" href="structyajl__callbacks.php" title="yajl is an event driven parser.">yajl_callbacks</a> * callbacks,
<a name="l00131"></a>00131                                     <span class="keyword">const</span> <a class="code" href="structyajl__parser__config.php" title="configuration structure for the generator">yajl_parser_config</a> * config,
<a name="l00132"></a>00132                                     <span class="keyword">const</span> <a class="code" href="structyajl__alloc__funcs.php" title="A structure which can be passed to yajl_*_alloc routines to allow the client to specify memory alloca...">yajl_alloc_funcs</a> * allocFuncs,
<a name="l00133"></a>00133                                     <span class="keywordtype">void</span> * ctx);
<a name="l00134"></a>00134 
<a name="l00136"></a>00136     YAJL_API <span class="keywordtype">void</span> <a class="code" href="yajl__parse_8h.php#a9fc930b29358ec1e04bda35d8b73422e" title="free a parser handle">yajl_free</a>(yajl_handle handle);
<a name="l00137"></a>00137 
<a name="l00143"></a>00143     YAJL_API <a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d" title="error codes returned from this interface">yajl_status</a> <a class="code" href="yajl__parse_8h.php#a6c05371a1532ade860db8b1ef8d31a61" title="Parse some json!">yajl_parse</a>(yajl_handle hand,
<a name="l00144"></a>00144                                     <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * jsonText,
<a name="l00145"></a>00145                                     <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> jsonTextLength);
<a name="l00146"></a>00146 
<a name="l00156"></a>00156     YAJL_API <a class="code" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d" title="error codes returned from this interface">yajl_status</a> <a class="code" href="yajl__parse_8h.php#acb0e5421a4bc2e9b9626f0514f11547f" title="Parse any remaining buffered json.">yajl_parse_complete</a>(yajl_handle hand);
<a name="l00157"></a>00157     
<a name="l00168"></a>00168     YAJL_API <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * <a class="code" href="yajl__parse_8h.php#aa4f26259fea6bb058b17828598532198" title="get an error string describing the state of the parse.">yajl_get_error</a>(yajl_handle hand, <span class="keywordtype">int</span> verbose,
<a name="l00169"></a>00169                                             <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * jsonText,
<a name="l00170"></a>00170                                             <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> jsonTextLength);
<a name="l00171"></a>00171 
<a name="l00184"></a>00184     YAJL_API <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="yajl__parse_8h.php#a341ea0f4cf8a70dc04c72a6256568b69" title="get the amount of data consumed from the last chunk passed to YAJL.">yajl_get_bytes_consumed</a>(yajl_handle hand);
<a name="l00185"></a>00185 
<a name="l00187"></a>00187     YAJL_API <span class="keywordtype">void</span> <a class="code" href="yajl__parse_8h.php#a12b6514e18f78fab0825b71465d511ea" title="free an error returned from yajl_get_error">yajl_free_error</a>(yajl_handle hand, <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> * str);
<a name="l00188"></a>00188 
<a name="l00189"></a>00189 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00190"></a>00190 <span class="preprocessor"></span>}
<a name="l00191"></a>00191 <span class="preprocessor">#endif    </span>
<a name="l00192"></a>00192 <span class="preprocessor"></span>
<a name="l00193"></a>00193 <span class="preprocessor">#endif</span>
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
