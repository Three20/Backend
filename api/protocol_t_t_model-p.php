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
  <title>Three20: &lt;TTModel&gt; Protocol Reference</title>
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
<h1>&lt;TTModel&gt; Protocol Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTModel-p" -->
<p><a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> describes the state of an object that can be loaded from a remote source.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_model_8h_source.php">TTModel.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for &lt;TTModel&gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="protocol_t_t_model-p.png" usemap="#&lt;TTModel&gt;_map" alt=""/>
  <map id="&lt;TTModel&gt;_map" name="&lt;TTModel&gt;_map">
<area href="interface_t_t_model.php" alt="TTModel" shape="rect" coords="0,56,205,80"/>
<area href="protocol_t_t_photo_source-p.php" alt="&lt;TTPhotoSource&gt;" shape="rect" coords="215,56,420,80"/>
<area href="protocol_t_t_table_view_data_source-p.php" alt="&lt;TTTableViewDataSource&gt;" shape="rect" coords="430,56,635,80"/>
<area href="interface_t_t_table_view_interstitial_data_source.php" alt="TTTableViewInterstitialDataSource" shape="rect" coords="645,56,850,80"/>
<area href="interface_t_t_u_r_l_request_model.php" alt="TTURLRequestModel" shape="rect" coords="0,112,205,136"/>
<area href="interface_t_t_table_view_data_source.php" alt="TTTableViewDataSource" shape="rect" coords="430,112,635,136"/>
<area href="interface_t_t_list_data_source.php" alt="TTListDataSource" shape="rect" coords="107,168,312,192"/>
<area href="interface_t_t_sectioned_data_source.php" alt="TTSectionedDataSource" shape="rect" coords="322,168,527,192"/>
<area href="interface_t_t_table_view_interstitial_data_source.php" alt="TTTableViewInterstitialDataSource" shape="rect" coords="537,168,742,192"/>
<area href="interface_t_t_thumbs_data_source.php" alt="TTThumbsDataSource" shape="rect" coords="752,168,957,192"/>
</map>
</div>

<p><a href="protocol_t_t_model-p-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a75f0ad85113d05134ed5e79b37b5827e"></a><!-- doxytag: member="TTModel&#45;p::delegates" ref="a75f0ad85113d05134ed5e79b37b5827e" args="()" -->
(<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#a75f0ad85113d05134ed5e79b37b5827e">delegates</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">An array of objects that conform to the <a class="el" href="protocol_t_t_model_delegate-p.php">TTModelDelegate</a> protocol. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#a0717855b556f4efac8de7571f1d38cea">isLoaded</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Indicates that the data has been loaded.  <a href="#a0717855b556f4efac8de7571f1d38cea"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#a68b9d49ad095a221c82ec0d13b6038ec">isLoading</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Indicates that the data is in the process of loading.  <a href="#a68b9d49ad095a221c82ec0d13b6038ec"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#a41b1268d87a53c51aa8b22bbeeb29d07">isLoadingMore</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Indicates that the data is in the process of loading additional data.  <a href="#a41b1268d87a53c51aa8b22bbeeb29d07"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#adbf2fa828a24a0428695f4cd708d9db6">isOutdated</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Indicates that the model is of date and should be reloaded as soon as possible.  <a href="#adbf2fa828a24a0428695f4cd708d9db6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#a7b6152507942206e12aa6889a0ed8b8c">load:more:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Loads the model.  <a href="#a7b6152507942206e12aa6889a0ed8b8c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#ab1a78579b78649df0061aabd384db721">cancel</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancels a load that is in progress.  <a href="#ab1a78579b78649df0061aabd384db721"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_model-p.php#a13efe0c75b14ded343cd95bc84ed65f6">invalidate:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Invalidates data stored in the cache or optionally erases it.  <a href="#a13efe0c75b14ded343cd95bc84ed65f6"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p><a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> describes the state of an object that can be loaded from a remote source. </p>
<p>By implementing this protocol, you can communicate to the user the state of network activity in an object. </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="ab1a78579b78649df0061aabd384db721"></a><!-- doxytag: member="TTModel&#45;p::cancel" ref="ab1a78579b78649df0061aabd384db721" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) cancel </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Cancels a load that is in progress. </p>
<p>Default implementation does nothing. </p>

</div>
</div>
<a class="anchor" id="a13efe0c75b14ded343cd95bc84ed65f6"></a><!-- doxytag: member="TTModel&#45;p::invalidate:" ref="a13efe0c75b14ded343cd95bc84ed65f6" args="(BOOL erase)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) invalidate: </td>
          <td></td>
          <td class="paramtype">(BOOL)&nbsp;</td>
          <td class="paramname"> <em>erase</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Invalidates data stored in the cache or optionally erases it. </p>
<p>Default implementation does nothing. </p>

</div>
</div>
<a class="anchor" id="a0717855b556f4efac8de7571f1d38cea"></a><!-- doxytag: member="TTModel&#45;p::isLoaded" ref="a0717855b556f4efac8de7571f1d38cea" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) isLoaded </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Indicates that the data has been loaded. </p>
<p>Default implementation returns YES. </p>

</div>
</div>
<a class="anchor" id="a68b9d49ad095a221c82ec0d13b6038ec"></a><!-- doxytag: member="TTModel&#45;p::isLoading" ref="a68b9d49ad095a221c82ec0d13b6038ec" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) isLoading </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Indicates that the data is in the process of loading. </p>
<p>Default implementation returns NO. </p>

</div>
</div>
<a class="anchor" id="a41b1268d87a53c51aa8b22bbeeb29d07"></a><!-- doxytag: member="TTModel&#45;p::isLoadingMore" ref="a41b1268d87a53c51aa8b22bbeeb29d07" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) isLoadingMore </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Indicates that the data is in the process of loading additional data. </p>
<p>Default implementation returns NO. </p>

</div>
</div>
<a class="anchor" id="adbf2fa828a24a0428695f4cd708d9db6"></a><!-- doxytag: member="TTModel&#45;p::isOutdated" ref="adbf2fa828a24a0428695f4cd708d9db6" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) isOutdated </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Indicates that the model is of date and should be reloaded as soon as possible. </p>
<p>Default implementation returns NO. </p>

</div>
</div>
<a class="anchor" id="a7b6152507942206e12aa6889a0ed8b8c"></a><!-- doxytag: member="TTModel&#45;p::load:more:" ref="a7b6152507942206e12aa6889a0ed8b8c" args="(TTURLRequestCachePolicy cachePolicy,[more] BOOL more)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) load: </td>
          <td></td>
          <td class="paramtype">(TTURLRequestCachePolicy)&nbsp;</td>
          <td class="paramname"> <em>cachePolicy</em></td>
        </tr>
        <tr>
          <td class="paramkey">more:</td>
          <td></td>
          <td class="paramtype">(BOOL)&nbsp;</td>
          <td class="paramname"> <em>more</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Loads the model. </p>
<p>Default implementation does nothing. </p>

</div>
</div>
<hr/>The documentation for this protocol was generated from the following file:<ul>
<li>Three20Network/Headers/<a class="el" href="_t_t_model_8h_source.php">TTModel.h</a></li>
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
