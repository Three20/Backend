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
  <title>Three20: &lt;SBJsonWriter&gt; Protocol Reference</title>
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
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>&lt;SBJsonWriter&gt; Protocol Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="SBJsonWriter-p" -->
<p>Options for the writer class.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_s_b_json_writer_8h_source.php">SBJsonWriter.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for &lt;SBJsonWriter&gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="protocol_s_b_json_writer-p.png" usemap="#&lt;SBJsonWriter&gt;_map" alt=""/>
  <map id="&lt;SBJsonWriter&gt;_map" name="&lt;SBJsonWriter&gt;_map">
<area href="interface_s_b_j_s_o_n.php" alt="SBJSON" shape="rect" coords="0,56,103,80"/>
<area href="interface_s_b_json_writer.php" alt="SBJsonWriter" shape="rect" coords="113,56,216,80"/>
</map>
</div>

<p><a href="protocol_s_b_json_writer-p-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_s_b_json_writer-p.php#a675b15e830d510b7fcd72f4e0a89ec45">stringWithObject:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return JSON representation (or fragment) for the given object.  <a href="#a675b15e830d510b7fcd72f4e0a89ec45"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="protocol_s_b_json_writer-p.php#a69f531597668b4b3c20aabee1e3d4558">humanReadable</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Whether we are generating human-readable (multiline) JSON.  <a href="#a69f531597668b4b3c20aabee1e3d4558"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="protocol_s_b_json_writer-p.php#ad424f1c19aead35d04509bfa549f7290">sortKeys</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Whether or not to sort the dictionary keys in the output.  <a href="#ad424f1c19aead35d04509bfa549f7290"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Options for the writer class. </p>
<p>This exists so the <a class="el" href="interface_s_b_j_s_o_n.php" title="Facade for SBJsonWriter/SBJsonParser.">SBJSON</a> facade can implement the options in the writer without having to re-declare them. </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a675b15e830d510b7fcd72f4e0a89ec45"></a><!-- doxytag: member="SBJsonWriter&#45;p::stringWithObject:" ref="a675b15e830d510b7fcd72f4e0a89ec45" args="(id value)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_n_s_string.php">NSString</a>*) stringWithObject: </td>
          <td></td>
          <td class="paramtype">(id)&nbsp;</td>
          <td class="paramname"> <em>value</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return JSON representation (or fragment) for the given object. </p>
<p>Returns a string containing JSON representation of the passed in value, or nil on error. If nil is returned and <code>error</code> is not NULL, <code>*error</code> can be interrogated to find the cause of the error.</p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>value</em>&nbsp;</td><td>any instance that can be represented as a JSON fragment </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/><h2>Property Documentation</h2>
<a class="anchor" id="a69f531597668b4b3c20aabee1e3d4558"></a><!-- doxytag: member="SBJsonWriter&#45;p::humanReadable" ref="a69f531597668b4b3c20aabee1e3d4558" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) humanReadable<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Whether we are generating human-readable (multiline) JSON. </p>
<p>Set whether or not to generate human-readable JSON. The default is NO, which produces JSON without any whitespace. (Except inside strings.) If set to YES, generates human-readable JSON with linebreaks after each array value and dictionary key/value pair, indented two spaces per nesting level. </p>

<p>Reimplemented in <a class="el" href="interface_s_b_json_writer.php#a16ca84860a2ee76a03b567dc5181a851">SBJsonWriter</a>.</p>

</div>
</div>
<a class="anchor" id="ad424f1c19aead35d04509bfa549f7290"></a><!-- doxytag: member="SBJsonWriter&#45;p::sortKeys" ref="ad424f1c19aead35d04509bfa549f7290" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) sortKeys<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Whether or not to sort the dictionary keys in the output. </p>
<p>If this is set to YES, the dictionary keys in the JSON output will be in sorted order. (This is useful if you need to compare two structures, for example.) The default is NO. </p>

<p>Reimplemented in <a class="el" href="interface_s_b_json_writer.php#af25807a58a322b56cb5d3593532228e5">SBJsonWriter</a>.</p>

</div>
</div>
<hr/>The documentation for this protocol was generated from the following file:<ul>
<li>extThree20JSON/Vendors/JSON/<a class="el" href="_s_b_json_writer_8h_source.php">SBJsonWriter.h</a></li>
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
