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
<title>Three20 API: &lt;TTURLResponse&gt; Protocol Reference</title>
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
<a href="#pub-methods">Public Member Functions</a>  </div>
  <div class="headertitle">
<h1>&lt;TTURLResponse&gt; Protocol Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTURLResponse-p" -->
<p>A response protocol for <a class="el" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a>.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_u_r_l_response_8h_source.php">TTURLResponse.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for &lt;TTURLResponse&gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="protocol_t_t_u_r_l_response-p.png" usemap="#&lt;TTURLResponse&gt;_map" alt=""/>
  <map id="&lt;TTURLResponse&gt;_map" name="&lt;TTURLResponse&gt;_map">
<area href="interface_t_t_u_r_l_data_response.php" alt="TTURLDataResponse" shape="rect" coords="0,56,138,80"/>
<area href="interface_t_t_u_r_l_image_response.php" alt="TTURLImageResponse" shape="rect" coords="148,56,286,80"/>
<area href="interface_t_t_u_r_l_j_s_o_n_response.php" alt="TTURLJSONResponse" shape="rect" coords="296,56,434,80"/>
<area href="interface_t_t_u_r_l_x_m_l_response.php" alt="TTURLXMLResponse" shape="rect" coords="444,56,582,80"/>
</map>
</div>

<p><a href="protocol_t_t_u_r_l_response-p-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(NSError *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_response-p.php#a92fe1507b1789dfe686f047bffc61f34">request:processResponse:data:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Processes the data from a successful request and determines if it is valid.  <a href="#a92fe1507b1789dfe686f047bffc61f34"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A response protocol for <a class="el" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a>. </p>
<p>This protocol is used upon the successful retrieval of data from a <a class="el" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a>. The processResponse method is used to process the data, whether it be an image or an XML string.</p>
<dl class="see"><dt><b>See also:</b></dt><dd><a class="el" href="interface_t_t_u_r_l_data_response.php" title="An implementation of the TTURLResponse protocal for generic NSData objects.">TTURLDataResponse</a> </dd>
<dd>
<a class="el" href="interface_t_t_u_r_l_image_response.php" title="An implementation of the TTURLResponse protocal for UIImage objects.">TTURLImageResponse</a> </dd></dl>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a92fe1507b1789dfe686f047bffc61f34"></a><!-- doxytag: member="TTURLResponse&#45;p::request:processResponse:data:" ref="a92fe1507b1789dfe686f047bffc61f34" args="(TTURLRequest *request,[processResponse] NSHTTPURLResponse *response,[data] id data)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (NSError*) request: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a> *)&nbsp;</td>
          <td class="paramname"> <em>request</em></td>
        </tr>
        <tr>
          <td class="paramkey">processResponse:</td>
          <td></td>
          <td class="paramtype">(NSHTTPURLResponse *)&nbsp;</td>
          <td class="paramname"> <em>response</em></td>
        </tr>
        <tr>
          <td class="paramkey">data:</td>
          <td></td>
          <td class="paramtype">(id)&nbsp;</td>
          <td class="paramname"> <em>data</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td><code> [required]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Processes the data from a successful request and determines if it is valid. </p>
<p>If the data is not valid, return an error. The data will not be cached if there is an error.</p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>request</em>&nbsp;</td><td>The request this response is bound to. </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>response</em>&nbsp;</td><td>The response object, useful for getting the status code. </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>data</em>&nbsp;</td><td>The data received from the <a class="el" href="interface_t_t_u_r_l_request.php" title="The Three20 network request object, built to work with the Three20 cache and co.">TTURLRequest</a>. </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>Returns:</b></dt><dd>NSError if there was an error parsing the data. nil otherwise.</dd></dl>

</div>
</div>
<hr/>The documentation for this protocol was generated from the following file:<ul>
<li>Three20Network/Headers/<a class="el" href="_t_t_u_r_l_response_8h_source.php">TTURLResponse.h</a></li>
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
