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
  <title>Three20: Three20Network/Headers/TTModel.h Source File</title>
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
<h1>Three20Network/Headers/TTModel.h</h1>  </div>
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
<a name="l00028"></a><a class="code" href="protocol_t_t_model-p.php">00028</a> <span class="keyword">@protocol </span><a class="code" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> &lt;<a class="code" href="class_n_s_object.php" title="Additions.">NSObject</a>&gt;
<a name="l00029"></a>00029 
<a name="l00033"></a>00033 - (<a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>*)<a class="code" href="protocol_t_t_model-p.php#a75f0ad85113d05134ed5e79b37b5827e" title="An array of objects that conform to the TTModelDelegate protocol.">delegates</a>;
<a name="l00034"></a>00034 
<a name="l00040"></a>00040 - (BOOL)<a class="code" href="protocol_t_t_model-p.php#a0717855b556f4efac8de7571f1d38cea" title="Indicates that the data has been loaded.">isLoaded</a>;
<a name="l00041"></a>00041 
<a name="l00047"></a>00047 - (BOOL)<a class="code" href="protocol_t_t_model-p.php#a68b9d49ad095a221c82ec0d13b6038ec" title="Indicates that the data is in the process of loading.">isLoading</a>;
<a name="l00048"></a>00048 
<a name="l00054"></a>00054 - (BOOL)<a class="code" href="protocol_t_t_model-p.php#a41b1268d87a53c51aa8b22bbeeb29d07" title="Indicates that the data is in the process of loading additional data.">isLoadingMore</a>;
<a name="l00055"></a>00055 
<a name="l00061"></a>00061 -(BOOL)<a class="code" href="protocol_t_t_model-p.php#adbf2fa828a24a0428695f4cd708d9db6" title="Indicates that the model is of date and should be reloaded as soon as possible.">isOutdated</a>;
<a name="l00062"></a>00062 
<a name="l00068"></a>00068 - (void)load:(TTURLRequestCachePolicy)cachePolicy more:(BOOL)more;
<a name="l00069"></a>00069 
<a name="l00075"></a>00075 - (void)<a class="code" href="protocol_t_t_model-p.php#ab1a78579b78649df0061aabd384db721" title="Cancels a load that is in progress.">cancel</a>;
<a name="l00076"></a>00076 
<a name="l00082"></a>00082 - (void)invalidate:(BOOL)erase;
<a name="l00083"></a>00083 
<a name="l00084"></a>00084 <span class="keyword">@end</span>
<a name="l00085"></a>00085 
<a name="l00087"></a>00087 
<a name="l00091"></a><a class="code" href="interface_t_t_model.php">00091</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> : <a class="code" href="class_n_s_object.php" title="Additions.">NSObject</a> &lt;<a class="code" href="protocol_t_t_model-p.php" title="TTModel describes the state of an object that can be loaded from a remote source.">TTModel</a>&gt; {
<a name="l00092"></a>00092   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>* _delegates;
<a name="l00093"></a>00093 }
<a name="l00094"></a>00094 
<a name="l00098"></a>00098 - (void)didStartLoad;
<a name="l00099"></a>00099 
<a name="l00103"></a>00103 - (void)didFinishLoad;
<a name="l00104"></a>00104 
<a name="l00108"></a>00108 - (void)didFailLoadWithError:(NSError*)error;
<a name="l00109"></a>00109 
<a name="l00113"></a>00113 - (void)didCancelLoad;
<a name="l00114"></a>00114 
<a name="l00118"></a>00118 - (void)beginUpdates;
<a name="l00119"></a>00119 
<a name="l00123"></a>00123 - (void)endUpdates;
<a name="l00124"></a>00124 
<a name="l00128"></a>00128 - (void)didUpdateObject:(<span class="keywordtype">id</span>)object atIndexPath:(NSIndexPath*)indexPath;
<a name="l00129"></a>00129 
<a name="l00133"></a>00133 - (void)didInsertObject:(<span class="keywordtype">id</span>)object atIndexPath:(NSIndexPath*)indexPath;
<a name="l00134"></a>00134 
<a name="l00138"></a>00138 - (void)didDeleteObject:(<span class="keywordtype">id</span>)object atIndexPath:(NSIndexPath*)indexPath;
<a name="l00139"></a>00139 
<a name="l00143"></a>00143 - (void)didChange;
<a name="l00144"></a>00144 
<a name="l00145"></a>00145 <span class="keyword">@end</span>
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
