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
  <title>Three20: extThree20JSON/Vendors/YAJL/YAJLDocument.h Source File</title>
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
<h1>extThree20JSON/Vendors/YAJL/YAJLDocument.h</h1>  </div>
</div>
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">//</span>
<a name="l00002"></a>00002 <span class="comment">//  YAJLDecoder.h</span>
<a name="l00003"></a>00003 <span class="comment">//  YAJL</span>
<a name="l00004"></a>00004 <span class="comment">//</span>
<a name="l00005"></a>00005 <span class="comment">//  Created by Gabriel Handford on 3/1/09.</span>
<a name="l00006"></a>00006 <span class="comment">//  Copyright 2009. All rights reserved.</span>
<a name="l00007"></a>00007 <span class="comment">//</span>
<a name="l00008"></a>00008 <span class="comment">//  Permission is hereby granted, free of charge, to any person</span>
<a name="l00009"></a>00009 <span class="comment">//  obtaining a copy of this software and associated documentation</span>
<a name="l00010"></a>00010 <span class="comment">//  files (the &quot;Software&quot;), to deal in the Software without</span>
<a name="l00011"></a>00011 <span class="comment">//  restriction, including without limitation the rights to use,</span>
<a name="l00012"></a>00012 <span class="comment">//  copy, modify, merge, publish, distribute, sublicense, and/or sell</span>
<a name="l00013"></a>00013 <span class="comment">//  copies of the Software, and to permit persons to whom the</span>
<a name="l00014"></a>00014 <span class="comment">//  Software is furnished to do so, subject to the following</span>
<a name="l00015"></a>00015 <span class="comment">//  conditions:</span>
<a name="l00016"></a>00016 <span class="comment">//</span>
<a name="l00017"></a>00017 <span class="comment">//  The above copyright notice and this permission notice shall be</span>
<a name="l00018"></a>00018 <span class="comment">//  included in all copies or substantial portions of the Software.</span>
<a name="l00019"></a>00019 <span class="comment">//</span>
<a name="l00020"></a>00020 <span class="comment">//  THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND,</span>
<a name="l00021"></a>00021 <span class="comment">//  EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES</span>
<a name="l00022"></a>00022 <span class="comment">//  OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND</span>
<a name="l00023"></a>00023 <span class="comment">//  NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT</span>
<a name="l00024"></a>00024 <span class="comment">//  HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,</span>
<a name="l00025"></a>00025 <span class="comment">//  WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING</span>
<a name="l00026"></a>00026 <span class="comment">//  FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR</span>
<a name="l00027"></a>00027 <span class="comment">//  OTHER DEALINGS IN THE SOFTWARE.</span>
<a name="l00028"></a>00028 <span class="comment">//</span>
<a name="l00029"></a>00029 
<a name="l00030"></a>00030 
<a name="l00031"></a>00031 <span class="preprocessor">#include &quot;YAJLParser.h&quot;</span>
<a name="l00032"></a>00032 
<a name="l00033"></a>00033 <span class="keyword">typedef</span> <span class="keyword">enum</span> {
<a name="l00034"></a>00034   YAJLDecoderCurrentTypeNone,
<a name="l00035"></a>00035   YAJLDecoderCurrentTypeArray,
<a name="l00036"></a>00036   YAJLDecoderCurrentTypeDict
<a name="l00037"></a>00037 } YAJLDecoderCurrentType;
<a name="l00038"></a>00038 
<a name="l00039"></a>00039 <span class="keyword">extern</span> NSInteger YAJLDocumentStackCapacity;
<a name="l00040"></a>00040 
<a name="l00041"></a>00041 <span class="keyword">@class</span> <a class="code" href="interface_y_a_j_l_document.php">YAJLDocument</a>;
<a name="l00042"></a>00042 
<a name="l00043"></a><a class="code" href="protocol_y_a_j_l_document_delegate-p.php">00043</a> <span class="keyword">@protocol </span><a class="code" href="protocol_y_a_j_l_document_delegate-p.php">YAJLDocumentDelegate</a> &lt;<a class="code" href="class_n_s_object.php" title="Additions.">NSObject</a>&gt;
<a name="l00044"></a>00044 <span class="keyword">@optional</span>
<a name="l00045"></a>00045 - (void)document:(<a class="code" href="interface_y_a_j_l_document.php">YAJLDocument</a> *)document didAddDictionary:(<a class="code" href="class_n_s_dictionary.php">NSDictionary</a> *)dict;
<a name="l00046"></a>00046 - (void)document:(<a class="code" href="interface_y_a_j_l_document.php">YAJLDocument</a> *)document didAddArray:(<a class="code" href="class_n_s_array.php" title="Additions.">NSArray</a> *)array;
<a name="l00047"></a>00047 - (void)document:(<a class="code" href="interface_y_a_j_l_document.php">YAJLDocument</a> *)document didAddObject:(<span class="keywordtype">id</span>)object toArray:(<a class="code" href="class_n_s_array.php" title="Additions.">NSArray</a> *)array;
<a name="l00048"></a>00048 - (void)document:(<a class="code" href="interface_y_a_j_l_document.php">YAJLDocument</a> *)document didSetObject:(<span class="keywordtype">id</span>)object forKey:(<span class="keywordtype">id</span>)key inDictionary:(<a class="code" href="class_n_s_dictionary.php">NSDictionary</a> *)dict;
<a name="l00049"></a>00049 <span class="keyword">@end</span>
<a name="l00050"></a>00050 
<a name="l00051"></a><a class="code" href="interface_y_a_j_l_document.php">00051</a> <span class="keyword">@interface </span><a class="code" href="interface_y_a_j_l_document.php">YAJLDocument</a> : <a class="code" href="class_n_s_object.php" title="Additions.">NSObject</a> &lt;<a class="code" href="protocol_y_a_j_l_parser_delegate-p.php">YAJLParserDelegate</a>&gt; {
<a name="l00052"></a>00052   
<a name="l00053"></a>00053   <span class="keywordtype">id</span> root_; <span class="comment">// NSArray or NSDictionary</span>
<a name="l00054"></a>00054   <a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *parser_;
<a name="l00055"></a>00055   
<a name="l00056"></a>00056   __weak id&lt;YAJLDocumentDelegate&gt; delegate_;
<a name="l00057"></a>00057   
<a name="l00058"></a>00058   __weak <a class="code" href="class_n_s_mutable_dictionary.php" title="Additions.">NSMutableDictionary</a> *dict_; <span class="comment">// weak; if map in progress, points to the current map </span>
<a name="l00059"></a>00059   __weak <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a> *array_; <span class="comment">// weak; If array in progress, points the current array</span>
<a name="l00060"></a>00060   __weak <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *key_; <span class="comment">// weak; If map in progress, points to current key</span>
<a name="l00061"></a>00061   
<a name="l00062"></a>00062   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a> *stack_;
<a name="l00063"></a>00063   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a> *keyStack_;
<a name="l00064"></a>00064   
<a name="l00065"></a>00065   YAJLDecoderCurrentType currentType_;
<a name="l00066"></a>00066   
<a name="l00067"></a>00067   YAJLParserStatus parserStatus_;
<a name="l00068"></a>00068   
<a name="l00069"></a>00069 }
<a name="l00070"></a>00070 
<a name="l00071"></a>00071 @property (readonly, nonatomic) id root; 
<a name="l00072"></a><a class="code" href="interface_y_a_j_l_document.php#a3ef4dae31a36129f29cc48046cdfd97e">00072</a> @property (readonly, nonatomic) YAJLParserStatus parserStatus;
<a name="l00073"></a>00073 @property (assign, nonatomic) <span class="keywordtype">id</span>&lt;<a class="code" href="protocol_y_a_j_l_document_delegate-p.php">YAJLDocumentDelegate</a>&gt; delegate;
<a name="l00074"></a>00074 
<a name="l00081"></a>00081 - (<span class="keywordtype">id</span>)initWithData:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data parserOptions:(YAJLParserOptions)parserOptions error:(NSError **)error;
<a name="l00082"></a>00082 
<a name="l00087"></a>00087 - (<span class="keywordtype">id</span>)initWithParserOptions:(YAJLParserOptions)parserOptions;
<a name="l00088"></a>00088 
<a name="l00095"></a>00095 - (YAJLParserStatus)parse:(<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *)data error:(NSError **)error;
<a name="l00096"></a>00096 
<a name="l00097"></a>00097 @end
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
