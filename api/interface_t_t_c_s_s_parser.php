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
  <title>Three20: TTCSSParser Class Reference</title>
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
<a href="#pri-attribs">Private Attributes</a>  </div>
  <div class="headertitle">
<h1>TTCSSParser Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTCSSParser" --><!-- doxytag: inherits="NSObject" -->
<p>CSS Jargon:  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_c_s_s_parser_8h_source.php">TTCSSParser.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTCSSParser:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_c_s_s_parser.png" usemap="#TTCSSParser_map" alt=""/>
  <map id="TTCSSParser_map" name="TTCSSParser_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,89,24"/>
</map>
</div>

<p><a href="class_t_t_c_s_s_parser-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acfc06e166e72f1c5b6d374ce28202553"></a><!-- doxytag: member="TTCSSParser::parseFilename:" ref="acfc06e166e72f1c5b6d374ce28202553" args="(NSString *filename)" -->
(<a class="el" href="class_n_s_dictionary.php">NSDictionary</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>parseFilename:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3e68f52cca8bd901d306656f13090ebb"></a><!-- doxytag: member="TTCSSParser::consumeToken:text:" ref="a3e68f52cca8bd901d306656f13090ebb" args="(int token,[text] char *text)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>consumeToken:text:</b></td></tr>
<tr><td colspan="2"><h2><a name="pri-attribs"></a>
Private Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6a180b02adba30bbb37a3e8ea0588731"></a><!-- doxytag: member="TTCSSParser::_ruleSets" ref="a6a180b02adba30bbb37a3e8ea0588731" args="" -->
<a class="el" href="class_n_s_mutable_dictionary.php">NSMutableDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_ruleSets</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad602f9560ff7a048e4bfe232efb8d470"></a><!-- doxytag: member="TTCSSParser::_activeCssSelectors" ref="ad602f9560ff7a048e4bfe232efb8d470" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_activeCssSelectors</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6cf965faa1f7ba2c40a517196d4c3067"></a><!-- doxytag: member="TTCSSParser::_activeRuleSet" ref="a6cf965faa1f7ba2c40a517196d4c3067" args="" -->
<a class="el" href="class_n_s_mutable_dictionary.php">NSMutableDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_activeRuleSet</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a01c8524b814f1d94afe9e0eecb856517"></a><!-- doxytag: member="TTCSSParser::_activePropertyName" ref="a01c8524b814f1d94afe9e0eecb856517" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_activePropertyName</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a38ecfcf715a916af72edb6df216d06fd"></a><!-- doxytag: member="TTCSSParser::_lastTokenText" ref="a38ecfcf715a916af72edb6df216d06fd" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_lastTokenText</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2e3b42c709c7a3336a7df31aa369a847"></a><!-- doxytag: member="TTCSSParser::_lastToken" ref="a2e3b42c709c7a3336a7df31aa369a847" args="" -->
int&nbsp;</td><td class="memItemRight" valign="bottom"><b>_lastToken</b></td></tr>
<tr><td class="memItemLeft" ><a class="anchor" id="adafc55d5fb46e2c0a5b2797340aa2e82"></a><!-- doxytag: member="TTCSSParser::_state" ref="adafc55d5fb46e2c0a5b2797340aa2e82" args="" -->
union {</td></tr>
<tr><td class="memItemLeft" >&nbsp;&nbsp;&nbsp;struct {</td></tr>
<tr><td class="memItemLeft" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;&nbsp;&nbsp;<b>InsideDefinition</b>: 1</td></tr>
<tr><td class="memItemLeft" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;&nbsp;&nbsp;<b>InsideProperty</b>: 1</td></tr>
<tr><td class="memItemLeft" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;&nbsp;&nbsp;<b>InsideFunction</b>: 1</td></tr>
<tr><td class="memItemLeft" valign="top">&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;<b>Flags</b></td></tr>
<tr><td class="memItemLeft" >&nbsp;&nbsp;&nbsp;int&nbsp;&nbsp;&nbsp;<b>_data</b></td></tr>
<tr><td class="memItemLeft" valign="top">}&nbsp;</td><td class="memItemRight" valign="bottom"><b>_state</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>CSS Jargon: </p>
<p>Rule Set: A selector and a set of property/value pairs. Selector: An identifier for a rule set. Example: "img" Property: A name for a set of values. Example: "color" Value: A value for a property.</p>
<p>img { \ border-color: red; | A single rule set. } / </p>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>extThree20CSSStyle/Headers/<a class="el" href="_t_t_c_s_s_parser_8h_source.php">TTCSSParser.h</a></li>
<li>extThree20CSSStyle/Sources/TTCSSParser.m</li>
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
