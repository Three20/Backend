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
<title>Three20 API: yajl_callbacks Struct Reference</title>
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
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="annotated.php"><span>Class&nbsp;List</span></a></li>
      <li><a href="hierarchy.php"><span>Class&nbsp;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&nbsp;Members</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Public Attributes</a>  </div>
  <div class="headertitle">
<h1>yajl_callbacks Struct Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="yajl_callbacks" -->
<p>yajl is an event driven parser.  
<a href="#_details">More...</a></p>

<p><code>#include &lt;<a class="el" href="yajl__parse_8h_source.php">yajl_parse.h</a>&gt;</code></p>

<p><a href="structyajl__callbacks-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a119925fa35d01fd556faa502397a6eb8"></a><!-- doxytag: member="yajl_callbacks::yajl_null" ref="a119925fa35d01fd556faa502397a6eb8" args=")(void *ctx)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_null</b> )(void *ctx)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9e4e6a69c6e88dbb1db692cc51fdcb85"></a><!-- doxytag: member="yajl_callbacks::yajl_boolean" ref="a9e4e6a69c6e88dbb1db692cc51fdcb85" args=")(void *ctx, int boolVal)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_boolean</b> )(void *ctx, int boolVal)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a929c2dc82d37b48fc03ce20f22d40769"></a><!-- doxytag: member="yajl_callbacks::yajl_integer" ref="a929c2dc82d37b48fc03ce20f22d40769" args=")(void *ctx, long integerVal)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_integer</b> )(void *ctx, long integerVal)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6e4b6fc64ddb2707950eb811304d1c46"></a><!-- doxytag: member="yajl_callbacks::yajl_double" ref="a6e4b6fc64ddb2707950eb811304d1c46" args=")(void *ctx, double doubleVal)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_double</b> )(void *ctx, double doubleVal)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int(*&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structyajl__callbacks.php#a485231e16d8cfc35efef17dfe2da2964">yajl_number</a> )(void *ctx, const char *numberVal, unsigned int numberLen)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">A callback which passes the string representation of the number back to the client.  <a href="#a485231e16d8cfc35efef17dfe2da2964"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a401e63b822dccecc78dc548a5a35cff1"></a><!-- doxytag: member="yajl_callbacks::yajl_string" ref="a401e63b822dccecc78dc548a5a35cff1" args=")(void *ctx, const unsigned char *stringVal, unsigned int stringLen)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structyajl__callbacks.php#a401e63b822dccecc78dc548a5a35cff1">yajl_string</a> )(void *ctx, const unsigned char *stringVal, unsigned int stringLen)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">strings are returned as pointers into the JSON text when, possible, as a result, they are _not_ null padded <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9da6fafbc2069780a02710778e61462e"></a><!-- doxytag: member="yajl_callbacks::yajl_start_map" ref="a9da6fafbc2069780a02710778e61462e" args=")(void *ctx)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_start_map</b> )(void *ctx)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae0c22a317a89a4d2bcb71a45673b28c9"></a><!-- doxytag: member="yajl_callbacks::yajl_map_key" ref="ae0c22a317a89a4d2bcb71a45673b28c9" args=")(void *ctx, const unsigned char *key, unsigned int stringLen)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_map_key</b> )(void *ctx, const unsigned char *key, unsigned int stringLen)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aff8abd4229027390adf59afcbb4e0f42"></a><!-- doxytag: member="yajl_callbacks::yajl_end_map" ref="aff8abd4229027390adf59afcbb4e0f42" args=")(void *ctx)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_end_map</b> )(void *ctx)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aaf4cf875e2a6e1ab1a8af94d16f60083"></a><!-- doxytag: member="yajl_callbacks::yajl_start_array" ref="aaf4cf875e2a6e1ab1a8af94d16f60083" args=")(void *ctx)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_start_array</b> )(void *ctx)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4671213ae60fed9bc885c38829362b0c"></a><!-- doxytag: member="yajl_callbacks::yajl_end_array" ref="a4671213ae60fed9bc885c38829362b0c" args=")(void *ctx)" -->
int(*&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_end_array</b> )(void *ctx)</td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>yajl is an event driven parser. </p>
<p>this means as json elements are parsed, you are called back to do something with the data. The functions in this table indicate the various events for which you will be called back. Each callback accepts a "context" pointer, this is a void * that is passed into the yajl_parse function which the client code may use to pass around context.</p>
<p>All callbacks return an integer. If non-zero, the parse will continue. If zero, the parse will be canceled and yajl_status_client_canceled will be returned from the parse.</p>
<p>Note about handling of numbers: yajl will only convert numbers that can be represented in a double or a long int. All other numbers will be passed to the client in string form using the yajl_number callback. Furthermore, if yajl_number is not NULL, it will always be used to return numbers, that is yajl_integer and yajl_double will be ignored. If yajl_number is NULL but one of yajl_integer or yajl_double are defined, parsing of a number larger than is representable in a double or long int will result in a parse error. </p>
<hr/><h2>Member Data Documentation</h2>
<a class="anchor" id="a485231e16d8cfc35efef17dfe2da2964"></a><!-- doxytag: member="yajl_callbacks::yajl_number" ref="a485231e16d8cfc35efef17dfe2da2964" args=")(void *ctx, const char *numberVal, unsigned int numberLen)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int(*  <a class="el" href="structyajl__callbacks.php#a485231e16d8cfc35efef17dfe2da2964">yajl_callbacks::yajl_number</a>)(void *ctx, const char *numberVal, unsigned int numberLen)</td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>A callback which passes the string representation of the number back to the client. </p>
<p>Will be used for all numbers when present </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li>extThree20JSON/Vendors/YAJL/yajl/src/api/<a class="el" href="yajl__parse_8h_source.php">yajl_parse.h</a></li>
</ul>
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
