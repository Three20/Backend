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
<title>Three20 API: TTStyledTextParser Class Reference</title>
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
<h1>TTStyledTextParser Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTStyledTextParser" --><!-- doxytag: inherits="NSObject" --><div class="dynheader">
Inheritance diagram for TTStyledTextParser:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_styled_text_parser.png" usemap="#TTStyledTextParser_map" alt=""/>
  <map id="TTStyledTextParser_map" name="TTStyledTextParser_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,122,24"/>
</map>
</div>

<p><a href="class_t_t_styled_text_parser-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aafadc4e0780888f9919e75bb215d038a"></a><!-- doxytag: member="TTStyledTextParser::parseXHTML:" ref="aafadc4e0780888f9919e75bb215d038a" args="(NSString *html)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>parseXHTML:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae72eb92074666cff7f7d8adf7c313a36"></a><!-- doxytag: member="TTStyledTextParser::parseText:" ref="ae72eb92074666cff7f7d8adf7c313a36" args="(NSString *string)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>parseText:</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a387dcfbe4c586f613d5667445d9acd88"></a><!-- doxytag: member="TTStyledTextParser::_rootNode" ref="a387dcfbe4c586f613d5667445d9acd88" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_rootNode</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0481e501391f0958c73c9092021c0d3b"></a><!-- doxytag: member="TTStyledTextParser::_topElement" ref="a0481e501391f0958c73c9092021c0d3b" args="" -->
<a class="el" href="interface_t_t_styled_element.php">TTStyledElement</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_topElement</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a06f4c0cda167770095c3018173230a45"></a><!-- doxytag: member="TTStyledTextParser::_lastNode" ref="a06f4c0cda167770095c3018173230a45" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_lastNode</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a95b906ae0dce1a55beeeb37ef1ac0929"></a><!-- doxytag: member="TTStyledTextParser::_parserError" ref="a95b906ae0dce1a55beeeb37ef1ac0929" args="" -->
NSError *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_parserError</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a449e49923a0d3c0929c86231f75d61ea"></a><!-- doxytag: member="TTStyledTextParser::_chars" ref="a449e49923a0d3c0929c86231f75d61ea" args="" -->
NSMutableString *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_chars</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6bc655b1abf20b408adba0912b29e77a"></a><!-- doxytag: member="TTStyledTextParser::_stack" ref="a6bc655b1abf20b408adba0912b29e77a" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_stack</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6399820ec40cf38f356ec53b6c43f7df"></a><!-- doxytag: member="TTStyledTextParser::_parseLineBreaks" ref="a6399820ec40cf38f356ec53b6c43f7df" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_parseLineBreaks</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa5210caf060f07ba685be66a92b9d9b0"></a><!-- doxytag: member="TTStyledTextParser::_parseURLs" ref="aa5210caf060f07ba685be66a92b9d9b0" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_parseURLs</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a88b8a8b1b1171c20046eb7fa5c9773e4"></a><!-- doxytag: member="TTStyledTextParser::rootNode" ref="a88b8a8b1b1171c20046eb7fa5c9773e4" args="" -->
<a class="el" href="interface_t_t_styled_node.php">TTStyledNode</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>rootNode</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a25dcbc7e5aa41a4fd20be9e8fc26e1e2"></a><!-- doxytag: member="TTStyledTextParser::parseLineBreaks" ref="a25dcbc7e5aa41a4fd20be9e8fc26e1e2" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>parseLineBreaks</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae5f3a8ae805af77493acaa203fa9c5fb"></a><!-- doxytag: member="TTStyledTextParser::parseURLs" ref="ae5f3a8ae805af77493acaa203fa9c5fb" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>parseURLs</b></td></tr>
</table>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Style/Headers/<a class="el" href="_t_t_styled_text_parser_8h_source.php">TTStyledTextParser.h</a></li>
<li>Three20Style/Sources/TTStyledTextParser.m</li>
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
