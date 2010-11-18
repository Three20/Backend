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
  <title>Three20: SBJsonParser Class Reference</title>
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
<a href="#properties">Properties</a> &#124;
<a href="#pri-attribs">Private Attributes</a>  </div>
  <div class="headertitle">
<h1>SBJsonParser Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="SBJsonParser" --><!-- doxytag: inherits="SBJsonBase,SBJsonParser-p" -->
<p>The JSON parser class.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_s_b_json_parser_8h_source.php">SBJsonParser.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for SBJsonParser:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_s_b_json_parser.png" usemap="#SBJsonParser_map" alt=""/>
  <map id="SBJsonParser_map" name="SBJsonParser_map">
<area href="interface_s_b_json_base.php" alt="SBJsonBase" shape="rect" coords="0,56,107,80"/>
<area href="protocol_s_b_json_parser-p.php" alt="&lt;SBJsonParser&gt;" shape="rect" coords="117,56,224,80"/>
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,107,24"/>
</map>
</div>

<p><a href="class_s_b_json_parser-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac636e0452108eb160cef77b66e912b0a"></a><!-- doxytag: member="SBJsonParser::scanValue:" ref="ac636e0452108eb160cef77b66e912b0a" args="(NSObject **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanValue:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a081c4ee408752efed7e907d9f9c2d4ca"></a><!-- doxytag: member="SBJsonParser::scanRestOfArray:" ref="a081c4ee408752efed7e907d9f9c2d4ca" args="(NSMutableArray **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanRestOfArray:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3de09621653a0a1cd940f227d043bacb"></a><!-- doxytag: member="SBJsonParser::scanRestOfDictionary:" ref="a3de09621653a0a1cd940f227d043bacb" args="(NSMutableDictionary **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanRestOfDictionary:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aeea34f47e63b11e406fa6a7b96108190"></a><!-- doxytag: member="SBJsonParser::scanRestOfNull:" ref="aeea34f47e63b11e406fa6a7b96108190" args="(NSNull **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanRestOfNull:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9b7107e91b570bcb02fb42d1003ead3b"></a><!-- doxytag: member="SBJsonParser::scanRestOfFalse:" ref="a9b7107e91b570bcb02fb42d1003ead3b" args="(NSNumber **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanRestOfFalse:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a246c0a820e6fd69db1bbe79167c578c6"></a><!-- doxytag: member="SBJsonParser::scanRestOfTrue:" ref="a246c0a820e6fd69db1bbe79167c578c6" args="(NSNumber **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanRestOfTrue:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0b251c81dc2753e3330709af36112429"></a><!-- doxytag: member="SBJsonParser::scanRestOfString:" ref="a0b251c81dc2753e3330709af36112429" args="(NSMutableString **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanRestOfString:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a40ea5a3426e2af523b6f4355fc41e0e7"></a><!-- doxytag: member="SBJsonParser::scanNumber:" ref="a40ea5a3426e2af523b6f4355fc41e0e7" args="(NSNumber **o)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanNumber:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a940e3c61c38e199844bf1a9fbc41138d"></a><!-- doxytag: member="SBJsonParser::scanHexQuad:" ref="a940e3c61c38e199844bf1a9fbc41138d" args="(unichar *x)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanHexQuad:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aea014e27d084f4d34e3025089c62aa74"></a><!-- doxytag: member="SBJsonParser::scanUnicodeChar:" ref="aea014e27d084f4d34e3025089c62aa74" args="(unichar *x)" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanUnicodeChar:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a968fa7546f80d05c2d3d53fe57a2cece"></a><!-- doxytag: member="SBJsonParser::scanIsAtEnd" ref="a968fa7546f80d05c2d3d53fe57a2cece" args="()" -->
(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>scanIsAtEnd</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af19e33c5d77f71c4a172661545bb2299"></a><!-- doxytag: member="SBJsonParser::fragmentWithString:" ref="af19e33c5d77f71c4a172661545bb2299" args="(id repr)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>fragmentWithString:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af6fc685c386c1c4528bd30b2bd630d56"></a><!-- doxytag: member="SBJsonParser::addErrorWithCode:description:" ref="af6fc685c386c1c4528bd30b2bd630d56" args="(NSUInteger code,[description] NSString *str)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>addErrorWithCode:description:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6a429d6db2149fea7435b9e0aac5d3fa"></a><!-- doxytag: member="SBJsonParser::clearErrorTrace" ref="a6a429d6db2149fea7435b9e0aac5d3fa" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>clearErrorTrace</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_s_b_json_parser-p.php#a5183c152f4a9e5e79bb9534fcbdf7bf6">objectWithString:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return the object represented by the given string.  <a href="#a5183c152f4a9e5e79bb9534fcbdf7bf6"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9fd64724d5da34a0f9842cee3d14620c"></a><!-- doxytag: member="SBJsonParser::errorTrace" ref="a9fd64724d5da34a0f9842cee3d14620c" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>errorTrace</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5e80155581d240f565ec4149ad812e03"></a><!-- doxytag: member="SBJsonParser::depth" ref="a5e80155581d240f565ec4149ad812e03" args="" -->
NSUInteger&nbsp;</td><td class="memItemRight" valign="bottom"><b>depth</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_s_array.php">NSArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_s_b_json_base.php#aa83f0ee5efade2fd26ddf6591ffd8dc0">errorTrace</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return an error trace, or nil if there was no errors.  <a href="#aa83f0ee5efade2fd26ddf6591ffd8dc0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">NSUInteger&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_s_b_json_base.php#abe3e47517711570a9a57e2d92a15055b">maxDepth</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The maximum recursing depth.  <a href="#abe3e47517711570a9a57e2d92a15055b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">NSUInteger&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_s_b_json_base.php#abe3e47517711570a9a57e2d92a15055b">maxDepth</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The maximum recursing depth.  <a href="#abe3e47517711570a9a57e2d92a15055b"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="pri-attribs"></a>
Private Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a922697b1bcc865dc7b4587ab9b2ba8c0"></a><!-- doxytag: member="SBJsonParser::c" ref="a922697b1bcc865dc7b4587ab9b2ba8c0" args="" -->
const char *&nbsp;</td><td class="memItemRight" valign="bottom"><b>c</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>The JSON parser class. </p>
<p>JSON is mapped to Objective-C types in the following way:</p>
<ul>
<li>Null -&gt; NSNull </li>
<li>String -&gt; NSMutableString </li>
<li>Array -&gt; <a class="el" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a> </li>
<li>Object -&gt; <a class="el" href="class_n_s_mutable_dictionary.php" title="Additions.">NSMutableDictionary</a> </li>
<li>Boolean -&gt; NSNumber (initialised with -initWithBool:) </li>
<li>Number -&gt; NSDecimalNumber</li>
</ul>
<p>Since Objective-C doesn't have a dedicated class for boolean values, these turns into NSNumber instances. These are initialised with the -initWithBool: method, and round-trip back to JSON properly. (They won't silently suddenly become 0 or 1; they'll be represented as 'true' and 'false' again.)</p>
<p>JSON numbers turn into NSDecimalNumber instances, as we can thus avoid any loss of precision. (JSON allows ridiculously large numbers.) </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a5183c152f4a9e5e79bb9534fcbdf7bf6"></a><!-- doxytag: member="SBJsonParser::objectWithString:" ref="a5183c152f4a9e5e79bb9534fcbdf7bf6" args="(NSString *repr)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (id) objectWithString: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td>
          <td class="paramname"> <em>repr</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return the object represented by the given string. </p>
<p>Returns the object represented by the passed-in string or nil on error. The returned object can be a string, number, boolean, null, array or dictionary.</p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>repr</em>&nbsp;</td><td>the json string to parse </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/><h2>Property Documentation</h2>
<a class="anchor" id="aa83f0ee5efade2fd26ddf6591ffd8dc0"></a><!-- doxytag: member="SBJsonParser::errorTrace" ref="aa83f0ee5efade2fd26ddf6591ffd8dc0" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_n_s_array.php">NSArray</a>*) errorTrace<code> [read, copy, inherited]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return an error trace, or nil if there was no errors. </p>
<p>Note that this method returns the trace of the last method that failed. You need to check the return value of the call you're making to figure out if the call actually failed, before you know call this method. </p>

</div>
</div>
<a class="anchor" id="abe3e47517711570a9a57e2d92a15055b"></a><!-- doxytag: member="SBJsonParser::maxDepth" ref="abe3e47517711570a9a57e2d92a15055b" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (NSUInteger) maxDepth<code> [read, write, assign, inherited]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The maximum recursing depth. </p>
<p>Defaults to 512. If the input is nested deeper than this the input will be deemed to be malicious and the parser returns nil, signalling an error. ("Nested too deep".) You can turn off this security feature by setting the maxDepth value to 0. </p>

</div>
</div>
<a class="anchor" id="abe3e47517711570a9a57e2d92a15055b"></a><!-- doxytag: member="SBJsonParser::maxDepth" ref="abe3e47517711570a9a57e2d92a15055b" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (NSUInteger) maxDepth<code> [read, write, assign, inherited]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The maximum recursing depth. </p>
<p>Defaults to 512. If the input is nested deeper than this the input will be deemed to be malicious and the parser returns nil, signalling an error. ("Nested too deep".) You can turn off this security feature by setting the maxDepth value to 0. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li>extThree20JSON/Vendors/JSON/<a class="el" href="_s_b_json_parser_8h_source.php">SBJsonParser.h</a></li>
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
