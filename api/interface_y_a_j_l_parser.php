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
<title>Three20 API: YAJLParser Class Reference</title>
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
</ul> 
 
<div id="fb-root"></div> 
<script> 
  window.fbAsyncInit = function() {
    FB.init({
      appId   : '165692500131929',
      session : {"access_token":"165692500131929|2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446|7YjdqHOYyL6MXMHd-udsP0EbTsg","base_domain":"three20.info","expires":"1298952000","secret":"Hcv3uGki22DI7f_imqBhgQ__","session_key":"2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446","sig":"fdaa725c7cf196ce9579d1b232a16e64","uid":"122605446"}, // don't refetch the session when PHP already has it
      status  : true, // check login status
      cookie  : true, // enable cookies to allow the server to access the session
      xfbml   : true // parse XFBML
    });
 
    // whenever the user logs in, we refresh the page
    FB.Event.subscribe('auth.login', function() {
      window.location.reload();
    });
  };
 
  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script> 
 
<ul class="right-links"> 
<li><img class="profileimg" width="25" height="25" valign="bottom" src="https://graph.facebook.com/122605446/picture?type=square">Jeff Verkoeyen</li> 
<li><a href="https://www.facebook.com/logout.php?next=http%3A%2F%2Fthree20.info%2F&access_token=165692500131929%7C2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446%7C7YjdqHOYyL6MXMHd-udsP0EbTsg" onclick="FB.logout(function() { window.location.reload();}); return false;">Log out</a></li> 
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
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>YAJLParser Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="YAJLParser" --><!-- doxytag: inherits="NSObject" -->
<p> 
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_y_a_j_l_parser_8h_source.php">YAJLParser.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for YAJLParser:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_y_a_j_l_parser.png" usemap="#YAJLParser_map" alt=""/>
  <map id="YAJLParser_map" name="YAJLParser_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,82,24"/>
</map>
</div>

<p><a href="class_y_a_j_l_parser-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_y_a_j_l_parser.php#a3cddbd758c51a3cfbcdabe67f82ea151">initWithParserOptions:</a></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(YAJLParserStatus)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_y_a_j_l_parser.php#a70ed47dee24d12e07e136413fffd4cdc">parse:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"> <a href="#a70ed47dee24d12e07e136413fffd4cdc"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7b028d4a4845223e23279545b8aaf622"></a><!-- doxytag: member="YAJLParser::_add:" ref="a7b028d4a4845223e23279545b8aaf622" args="(id value)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_add:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a73518da5132dcbff1c9e4dd333cec082"></a><!-- doxytag: member="YAJLParser::_mapKey:" ref="a73518da5132dcbff1c9e4dd333cec082" args="(NSString *key)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_mapKey:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="adb9899ceb18035b41d1ff5b61fd127b4"></a><!-- doxytag: member="YAJLParser::_startDictionary" ref="adb9899ceb18035b41d1ff5b61fd127b4" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_startDictionary</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="adb157382977688900f05e759a3bf134a"></a><!-- doxytag: member="YAJLParser::_endDictionary" ref="adb157382977688900f05e759a3bf134a" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_endDictionary</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a4999836ae0a6a2c374b66154d9cc1e2e"></a><!-- doxytag: member="YAJLParser::_startArray" ref="a4999836ae0a6a2c374b66154d9cc1e2e" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_startArray</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a956d439eea835bc80cb79855f62a4ce1"></a><!-- doxytag: member="YAJLParser::_endArray" ref="a956d439eea835bc80cb79855f62a4ce1" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_endArray</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af5789a61d5ecb0773598633a7902eb3a"></a><!-- doxytag: member="YAJLParser::_errorForStatus:message:value:" ref="af5789a61d5ecb0773598633a7902eb3a" args="(NSInteger code,[message] NSString *message,[value] NSString *value)" -->
(NSError *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_errorForStatus:message:value:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a417831c697df66114c9b608a84a03ca0"></a><!-- doxytag: member="YAJLParser::_cancelWithErrorForStatus:message:value:" ref="a417831c697df66114c9b608a84a03ca0" args="(NSInteger code,[message] NSString *message,[value] NSString *value)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>_cancelWithErrorForStatus:message:value:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af0235a311fbebba41b13e592a7422445"></a><!-- doxytag: member="YAJLParser::handle_" ref="af0235a311fbebba41b13e592a7422445" args="" -->
<a class="el" href="structyajl__handle__t.php">yajl_handle</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>handle_</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a72ac82ae7c0f1be20b99ebc47993b683"></a><!-- doxytag: member="YAJLParser::delegate_" ref="a72ac82ae7c0f1be20b99ebc47993b683" args="" -->
__weak id&lt; <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php">YAJLParserDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>delegate_</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6db767fc3b16760a61874d93d8844258"></a><!-- doxytag: member="YAJLParser::parserOptions_" ref="a6db767fc3b16760a61874d93d8844258" args="" -->
YAJLParserOptions&nbsp;</td><td class="memItemRight" valign="bottom"><b>parserOptions_</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3fdd7964f98196527948c283d0f3eae4"></a><!-- doxytag: member="YAJLParser::parserError_" ref="a3fdd7964f98196527948c283d0f3eae4" args="" -->
NSError *&nbsp;</td><td class="memItemRight" valign="bottom"><b>parserError_</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a777c56300ec643a95c9f37db484479d1"></a><!-- doxytag: member="YAJLParser::delegate" ref="a777c56300ec643a95c9f37db484479d1" args="" -->
__weak id&lt; <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php">YAJLParserDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>delegate</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="adb11c1d4115b0846248e29433f1b37e5"></a><!-- doxytag: member="YAJLParser::parserError" ref="adb11c1d4115b0846248e29433f1b37e5" args="" -->
NSError *&nbsp;</td><td class="memItemRight" valign="bottom"><b>parserError</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aca82c7663b39b136b6dd9a042f18c6e7"></a><!-- doxytag: member="YAJLParser::parserOptions" ref="aca82c7663b39b136b6dd9a042f18c6e7" args="" -->
YAJLParserOptions&nbsp;</td><td class="memItemRight" valign="bottom"><b>parserOptions</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>JSON parser.</p>
<div class="fragment"><pre class="fragment"> <a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> *data = [<a class="code" href="class_n_s_data.php" title="Additions.">NSData</a> dataWithContentsOfFile:<span class="stringliteral">@&quot;example.json&quot;</span>];

 <a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *parser = [[<a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> alloc] initWithParserOptions:YAJLParserOptionsAllowComments];
 parser.delegate = <span class="keyword">self</span>;
 [parser parse:data];
 <span class="keywordflow">if</span> (parser.parserError) {
   NSLog(<span class="stringliteral">@&quot;Error:\n%@&quot;</span>, parser.parserError);
 }

 parser.delegate = nil;
 [parser release];

 <span class="comment">// Include delegate methods from YAJLParserDelegate</span>
 - (void)parserDidStartDictionary:(<a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *)parser { }
 - (void)parserDidEndDictionary:(<a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *)parser { }

 - (void)parserDidStartArray:(<a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *)parser { }
 - (void)parserDidEndArray:(<a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *)parser { }

 - (void)parser:(<a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *)parser didMapKey:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a> *)key { }
 - (void)parser:(<a class="code" href="interface_y_a_j_l_parser.php">YAJLParser</a> *)parser didAdd:(id)value { }
</pre></div> <hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a3cddbd758c51a3cfbcdabe67f82ea151"></a><!-- doxytag: member="YAJLParser::initWithParserOptions:" ref="a3cddbd758c51a3cfbcdabe67f82ea151" args="(YAJLParserOptions parserOptions)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (id) initWithParserOptions: </td>
          <td></td>
          <td class="paramtype">(YAJLParserOptions)&nbsp;</td>
          <td class="paramname"> <em>parserOptions</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">
<p>Create parser with data and options. </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>parserOptions</em>&nbsp;</td><td>Parser options</p>
<ul>
<li>YAJLParserOptionsNone: No options</li>
<li>YAJLParserOptionsAllowComments: Javascript style comments will be allowed in the input (both / / and //)</li>
<li>YAJLParserOptionsCheckUTF8: Invalid UTF8 strings will cause a parse error</li>
<li>YAJLParserOptionsStrictPrecision: If YES will force strict precision and return integer overflow error </li>
</ul>
</td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a70ed47dee24d12e07e136413fffd4cdc"></a><!-- doxytag: member="YAJLParser::parse:" ref="a70ed47dee24d12e07e136413fffd4cdc" args="(NSData *data)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (YAJLParserStatus) parse: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td>
          <td class="paramname"> <em>data</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p></p>
<p>Parse data.</p>
<p>If streaming, you can call parse multiple times as long as previous calls return YAJLParserStatusInsufficientData.</p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>data</em>&nbsp;</td><td></td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>Returns:</b></dt><dd>Parser status<ul>
<li>YAJLParserStatusNone: No status</li>
<li>YAJLParserStatusOK: Parsed OK</li>
<li>YAJLParserStatusInsufficientData: There was insufficient data</li>
<li>YAJLParserStatusError: Parser errored </li>
</ul>
</dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>extThree20JSON/Vendors/YAJL/<a class="el" href="_y_a_j_l_parser_8h_source.php">YAJLParser.h</a></li>
<li>extThree20JSON/Vendors/YAJL/YAJLParser.m</li>
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
