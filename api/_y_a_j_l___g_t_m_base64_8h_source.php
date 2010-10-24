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
  <title>Three20: extThree20JSON/Vendors/YAJL/GTM/YAJL_GTMBase64.h Source File</title>
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
  <li><a href="http://new.three20.info/roadmap">Roadmap</a></li> 
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
<h1>extThree20JSON/Vendors/YAJL/GTM/YAJL_GTMBase64.h</h1>  </div>
</div>
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">//</span>
<a name="l00002"></a>00002 <span class="comment">//  GTMBase64.h</span>
<a name="l00003"></a>00003 <span class="comment">//</span>
<a name="l00004"></a>00004 <span class="comment">//  Copyright 2006-2008 Google Inc.</span>
<a name="l00005"></a>00005 <span class="comment">//</span>
<a name="l00006"></a>00006 <span class="comment">//  Licensed under the Apache License, Version 2.0 (the &quot;License&quot;); you may not</span>
<a name="l00007"></a>00007 <span class="comment">//  use this file except in compliance with the License.  You may obtain a copy</span>
<a name="l00008"></a>00008 <span class="comment">//  of the License at</span>
<a name="l00009"></a>00009 <span class="comment">// </span>
<a name="l00010"></a>00010 <span class="comment">//  http://www.apache.org/licenses/LICENSE-2.0</span>
<a name="l00011"></a>00011 <span class="comment">// </span>
<a name="l00012"></a>00012 <span class="comment">//  Unless required by applicable law or agreed to in writing, software</span>
<a name="l00013"></a>00013 <span class="comment">//  distributed under the License is distributed on an &quot;AS IS&quot; BASIS, WITHOUT</span>
<a name="l00014"></a>00014 <span class="comment">//  WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the</span>
<a name="l00015"></a>00015 <span class="comment">//  License for the specific language governing permissions and limitations under</span>
<a name="l00016"></a>00016 <span class="comment">//  the License.</span>
<a name="l00017"></a>00017 <span class="comment">//</span>
<a name="l00018"></a>00018 
<a name="l00019"></a>00019 <span class="preprocessor">#import &lt;Foundation/Foundation.h&gt;</span>
<a name="l00020"></a>00020 
<a name="l00021"></a>00021 <span class="comment">// Give ourselves a consistent way to do inlines.  Apple&#39;s macros even use</span>
<a name="l00022"></a>00022 <span class="comment">// a few different actual definitions, so we&#39;re based off of the foundation</span>
<a name="l00023"></a>00023 <span class="comment">// one.</span>
<a name="l00024"></a>00024 <span class="preprocessor">#if !defined(GTM_INLINE)</span>
<a name="l00025"></a>00025 <span class="preprocessor"></span><span class="preprocessor">#if defined (__GNUC__) &amp;&amp; (__GNUC__ == 4)</span>
<a name="l00026"></a>00026 <span class="preprocessor"></span><span class="preprocessor">#define GTM_INLINE static __inline__ __attribute__((always_inline))</span>
<a name="l00027"></a>00027 <span class="preprocessor"></span><span class="preprocessor">#else</span>
<a name="l00028"></a>00028 <span class="preprocessor"></span><span class="preprocessor">#define GTM_INLINE static __inline__</span>
<a name="l00029"></a>00029 <span class="preprocessor"></span><span class="preprocessor">#endif</span>
<a name="l00030"></a>00030 <span class="preprocessor"></span><span class="preprocessor">#endif</span>
<a name="l00031"></a>00031 <span class="preprocessor"></span>
<a name="l00032"></a>00032 <span class="preprocessor">#define _GTMDevAssert(condition, ...) do { } while (0)</span>
<a name="l00033"></a>00033 <span class="preprocessor"></span>
<a name="l00034"></a>00034 <span class="comment">// GTMBase64</span>
<a name="l00035"></a>00035 <span class="comment">//</span>
<a name="l00037"></a>00037 <span class="comment"></span><span class="comment">//</span>
<a name="l00043"></a>00043 <span class="comment"></span><span class="comment">//</span>
<a name="l00044"></a><a class="code" href="interface_y_a_j_l___g_t_m_base64.php">00044</a> <span class="keyword">@interface </span><a class="code" href="interface_y_a_j_l___g_t_m_base64.php" title="Helper for handling Base64 and WebSafeBase64 encodings.">YAJL_GTMBase64</a> : <a class="code" href="class_n_s_object.php" title="Additions.">NSObject</a>
<a name="l00045"></a>00045 
<a name="l00046"></a>00046 <span class="comment">//</span>
<a name="l00047"></a>00047 <span class="comment">// Standard Base64 (RFC) handling</span>
<a name="l00048"></a>00048 <span class="comment">//</span>
<a name="l00049"></a>00049 
<a name="l00050"></a>00050 <span class="comment">// encodeData:</span>
<a name="l00051"></a>00051 <span class="comment">//</span>
<a name="l00053"></a>00053 <span class="comment"></span><span class="comment">//</span>
<a name="l00056"></a>00056 <span class="comment"></span><span class="comment">//</span>
<a name="l00057"></a>00057 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)encodeData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data;
<a name="l00058"></a>00058 
<a name="l00059"></a>00059 <span class="comment">// decodeData:</span>
<a name="l00060"></a>00060 <span class="comment">//</span>
<a name="l00062"></a>00062 <span class="comment"></span><span class="comment">//</span>
<a name="l00065"></a>00065 <span class="comment"></span><span class="comment">//</span>
<a name="l00066"></a>00066 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)decodeData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data;
<a name="l00067"></a>00067 
<a name="l00068"></a>00068 <span class="comment">// encodeBytes:length:</span>
<a name="l00069"></a>00069 <span class="comment">//</span>
<a name="l00071"></a>00071 <span class="comment"></span><span class="comment">//</span>
<a name="l00074"></a>00074 <span class="comment"></span><span class="comment">//</span>
<a name="l00075"></a>00075 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)encodeBytes:(const <span class="keywordtype">void</span> *)bytes length:(NSUInteger)length;
<a name="l00076"></a>00076 
<a name="l00077"></a>00077 <span class="comment">// decodeBytes:length:</span>
<a name="l00078"></a>00078 <span class="comment">//</span>
<a name="l00080"></a>00080 <span class="comment"></span><span class="comment">//</span>
<a name="l00083"></a>00083 <span class="comment"></span><span class="comment">//</span>
<a name="l00084"></a>00084 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)decodeBytes:(const <span class="keywordtype">void</span> *)bytes length:(NSUInteger)length;
<a name="l00085"></a>00085 
<a name="l00086"></a>00086 <span class="comment">// stringByEncodingData:</span>
<a name="l00087"></a>00087 <span class="comment">//</span>
<a name="l00089"></a>00089 <span class="comment"></span><span class="comment">//</span>
<a name="l00092"></a>00092 <span class="comment"></span><span class="comment">//</span>
<a name="l00093"></a>00093 +(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)stringByEncodingData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data;
<a name="l00094"></a>00094 
<a name="l00095"></a>00095 <span class="comment">// stringByEncodingBytes:length:</span>
<a name="l00096"></a>00096 <span class="comment">//</span>
<a name="l00098"></a>00098 <span class="comment"></span><span class="comment">//</span>
<a name="l00101"></a>00101 <span class="comment"></span><span class="comment">//</span>
<a name="l00102"></a>00102 +(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)stringByEncodingBytes:(const <span class="keywordtype">void</span> *)bytes length:(NSUInteger)length;
<a name="l00103"></a>00103 
<a name="l00104"></a>00104 <span class="comment">// decodeString:</span>
<a name="l00105"></a>00105 <span class="comment">//</span>
<a name="l00107"></a>00107 <span class="comment"></span><span class="comment">//</span>
<a name="l00110"></a>00110 <span class="comment"></span><span class="comment">//</span>
<a name="l00111"></a>00111 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)decodeString:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)string;
<a name="l00112"></a>00112 
<a name="l00113"></a>00113 <span class="comment">//</span>
<a name="l00114"></a>00114 <span class="comment">// Modified Base64 encoding so the results can go onto urls.</span>
<a name="l00115"></a>00115 <span class="comment">//</span>
<a name="l00116"></a>00116 <span class="comment">// The changes are in the characters generated and also allows the result to</span>
<a name="l00117"></a>00117 <span class="comment">// not be padded to a multiple of 4.</span>
<a name="l00118"></a>00118 <span class="comment">// Must use the matching call to encode/decode, won&#39;t interop with the</span>
<a name="l00119"></a>00119 <span class="comment">// RFC versions.</span>
<a name="l00120"></a>00120 <span class="comment">//</span>
<a name="l00121"></a>00121 
<a name="l00122"></a>00122 <span class="comment">// webSafeEncodeData:padded:</span>
<a name="l00123"></a>00123 <span class="comment">//</span>
<a name="l00126"></a>00126 <span class="comment"></span><span class="comment">//</span>
<a name="l00129"></a>00129 <span class="comment"></span><span class="comment">//</span>
<a name="l00130"></a>00130 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)webSafeEncodeData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data
<a name="l00131"></a>00131                       padded:(BOOL)padded;
<a name="l00132"></a>00132 
<a name="l00133"></a>00133 <span class="comment">// webSafeDecodeData:</span>
<a name="l00134"></a>00134 <span class="comment">//</span>
<a name="l00136"></a>00136 <span class="comment"></span><span class="comment">//</span>
<a name="l00139"></a>00139 <span class="comment"></span><span class="comment">//</span>
<a name="l00140"></a>00140 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)webSafeDecodeData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data;
<a name="l00141"></a>00141 
<a name="l00142"></a>00142 <span class="comment">// webSafeEncodeBytes:length:padded:</span>
<a name="l00143"></a>00143 <span class="comment">//</span>
<a name="l00146"></a>00146 <span class="comment"></span><span class="comment">//</span>
<a name="l00149"></a>00149 <span class="comment"></span><span class="comment">//</span>
<a name="l00150"></a>00150 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)webSafeEncodeBytes:(const <span class="keywordtype">void</span> *)bytes
<a name="l00151"></a>00151                        length:(NSUInteger)length
<a name="l00152"></a>00152                        padded:(BOOL)padded;
<a name="l00153"></a>00153 
<a name="l00154"></a>00154 <span class="comment">// webSafeDecodeBytes:length:</span>
<a name="l00155"></a>00155 <span class="comment">//</span>
<a name="l00157"></a>00157 <span class="comment"></span><span class="comment">//</span>
<a name="l00160"></a>00160 <span class="comment"></span><span class="comment">//</span>
<a name="l00161"></a>00161 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)webSafeDecodeBytes:(const <span class="keywordtype">void</span> *)bytes length:(NSUInteger)length;
<a name="l00162"></a>00162 
<a name="l00163"></a>00163 <span class="comment">// stringByWebSafeEncodingData:padded:</span>
<a name="l00164"></a>00164 <span class="comment">//</span>
<a name="l00167"></a>00167 <span class="comment"></span><span class="comment">//</span>
<a name="l00170"></a>00170 <span class="comment"></span><span class="comment">//</span>
<a name="l00171"></a>00171 +(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)stringByWebSafeEncodingData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data
<a name="l00172"></a>00172                                   padded:(BOOL)padded;
<a name="l00173"></a>00173 
<a name="l00174"></a>00174 <span class="comment">// stringByWebSafeEncodingBytes:length:padded:</span>
<a name="l00175"></a>00175 <span class="comment">//</span>
<a name="l00178"></a>00178 <span class="comment"></span><span class="comment">//</span>
<a name="l00181"></a>00181 <span class="comment"></span><span class="comment">//</span>
<a name="l00182"></a>00182 +(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)stringByWebSafeEncodingBytes:(const <span class="keywordtype">void</span> *)bytes
<a name="l00183"></a>00183                                    length:(NSUInteger)length
<a name="l00184"></a>00184                                    padded:(BOOL)padded;
<a name="l00185"></a>00185 
<a name="l00186"></a>00186 <span class="comment">// webSafeDecodeString:</span>
<a name="l00187"></a>00187 <span class="comment">//</span>
<a name="l00189"></a>00189 <span class="comment"></span><span class="comment">//</span>
<a name="l00192"></a>00192 <span class="comment"></span><span class="comment">//</span>
<a name="l00193"></a>00193 +(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)webSafeDecodeString:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)string;
<a name="l00194"></a>00194 
<a name="l00195"></a>00195 <span class="keyword">@end</span>
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
