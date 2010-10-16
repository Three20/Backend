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
  <title>Three20: TTURLRequestQueue Class Reference</title>
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

<div id="header">
<div class="fixed-width">
<ul class="left-links">
  <li>&larr; <a href="http://new.three20.info/">Home</a></li>
</ul>
<ul class="right-links">
  <li><a href="http://<?= $_SERVER['SERVER_NAME']?><?= $_SERVER['REQUEST_URI'] ?>#disqus_thread">Comments</a></li>
</ul>
</div> <!-- .fixed-width -->
</div>

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
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#properties">Properties</a> &#124;
<a href="#pri-attribs">Private Attributes</a>  </div>
  <div class="headertitle">
<h1>TTURLRequestQueue Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTURLRequestQueue" --><!-- doxytag: inherits="NSObject" --><div class="dynheader">
Inheritance diagram for TTURLRequestQueue:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_u_r_l_request_queue.png" usemap="#TTURLRequestQueue_map" alt=""/>
  <map id="TTURLRequestQueue_map" name="TTURLRequestQueue_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,131,24"/>
</map>
</div>

<p><a href="class_t_t_u_r_l_request_queue-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_u_r_l_request_queue.php#ad3b50d883f28dd7e9cccbbfa3b52236a">sendRequest:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Load a request from the cache or the network if it is not in the cache.  <a href="#ad3b50d883f28dd7e9cccbbfa3b52236a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_u_r_l_request_queue.php#adf048cfe3144a34a688db67f93908916">sendSynchronousRequest:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Synchronously load a request from the cache or the network if it is not in the cache.  <a href="#adf048cfe3144a34a688db67f93908916"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a008ecf13892baab45a69f8051637aa51"></a><!-- doxytag: member="TTURLRequestQueue::cancelRequest:" ref="a008ecf13892baab45a69f8051637aa51" args="(TTURLRequest *request)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_u_r_l_request_queue.php#a008ecf13892baab45a69f8051637aa51">cancelRequest:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancel a request that is in progress. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_u_r_l_request_queue.php#a263596b58314c7ea6c14f8b5718f7b26">cancelRequestsWithDelegate:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancel all active or pending requests whose delegate or response is an object.  <a href="#a263596b58314c7ea6c14f8b5718f7b26"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a42f6150b9df2681783bc7c534f43abc2"></a><!-- doxytag: member="TTURLRequestQueue::cancelAllRequests" ref="a42f6150b9df2681783bc7c534f43abc2" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_u_r_l_request_queue.php#a42f6150b9df2681783bc7c534f43abc2">cancelAllRequests</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancel all active or pending requests. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="abf973b89da8bd792e80f4d545f72325d"></a><!-- doxytag: member="TTURLRequestQueue::createNSURLRequest:URL:" ref="abf973b89da8bd792e80f4d545f72325d" args="(TTURLRequest *request,[URL] NSURL *URL)" -->
(NSURLRequest *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_u_r_l_request_queue.php#abf973b89da8bd792e80f4d545f72325d">createNSURLRequest:URL:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Create a Cocoa URL request from a Three20 URL request. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af07a6b6413e7f900ad49930becef11ca"></a><!-- doxytag: member="TTURLRequestQueue::loader:didReceiveAuthenticationChallenge:" ref="af07a6b6413e7f900ad49930becef11ca" args="(TTRequestLoader *loader,[didReceiveAuthenticationChallenge] NSURLAuthenticationChallenge *challenge)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>loader:didReceiveAuthenticationChallenge:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a56cd12cf8059400023c2b127fcc1c9e4"></a><!-- doxytag: member="TTURLRequestQueue::loader:didLoadResponse:data:" ref="a56cd12cf8059400023c2b127fcc1c9e4" args="(TTRequestLoader *loader,[didLoadResponse] NSHTTPURLResponse *response,[data] id data)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>loader:didLoadResponse:data:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab44d38d5dbccd180eda6979f0eb6ce55"></a><!-- doxytag: member="TTURLRequestQueue::loader:didLoadUnmodifiedResponse:" ref="ab44d38d5dbccd180eda6979f0eb6ce55" args="(TTRequestLoader *loader,[didLoadUnmodifiedResponse] NSHTTPURLResponse *response)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>loader:didLoadUnmodifiedResponse:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae426cf8f191b900113fc57e79841a6c5"></a><!-- doxytag: member="TTURLRequestQueue::loader:didFailLoadWithError:" ref="ae426cf8f191b900113fc57e79841a6c5" args="(TTRequestLoader *loader,[didFailLoadWithError] NSError *error)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>loader:didFailLoadWithError:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5407435b27f536711d3a015195739c5f"></a><!-- doxytag: member="TTURLRequestQueue::loaderDidCancel:wasLoading:" ref="a5407435b27f536711d3a015195739c5f" args="(TTRequestLoader *loader,[wasLoading] BOOL wasLoading)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>loaderDidCancel:wasLoading:</b></td></tr>
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a673dea0042c9dabea200b4ec4db4c3ba"></a><!-- doxytag: member="TTURLRequestQueue::mainQueue" ref="a673dea0042c9dabea200b4ec4db4c3ba" args="()" -->
(<a class="el" href="interface_t_t_u_r_l_request_queue.php">TTURLRequestQueue</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_t_t_u_r_l_request_queue.php#a673dea0042c9dabea200b4ec4db4c3ba">mainQueue</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the shared cache singleton used across the application. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5ff7462611d450532137bd017cdadb7f"></a><!-- doxytag: member="TTURLRequestQueue::setMainQueue:" ref="a5ff7462611d450532137bd017cdadb7f" args="(TTURLRequestQueue *queue)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_t_t_u_r_l_request_queue.php#a5ff7462611d450532137bd017cdadb7f">setMainQueue:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Set the shared cache singleton used across the application. <br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_u_r_l_request_queue.php#a8addd08d2cef4fa320cf0930b4c8c591">suspended</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Gets the flag that determines if new load requests are allowed to reach the network.  <a href="#a8addd08d2cef4fa320cf0930b4c8c591"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">NSUInteger&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_u_r_l_request_queue.php#ac12fd4da800c6c86a1c9c8cf22a5906f">maxContentLength</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The maximum size of a download that is allowed.  <a href="#ac12fd4da800c6c86a1c9c8cf22a5906f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_u_r_l_request_queue.php#af57cab87b15e0b1c7fa7b6b90e6aa3aa">userAgent</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The user-agent string that is sent with all HTTP requests.  <a href="#af57cab87b15e0b1c7fa7b6b90e6aa3aa"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_u_r_l_request_queue.php#aa6818e451230a069a53bcb2026d14fa0">imageCompressionQuality</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The compression quality used for encoding images sent with HTTP posts.  <a href="#aa6818e451230a069a53bcb2026d14fa0"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="pri-attribs"></a>
Private Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad91e5e3b2bcf872feae4288ca7313de0"></a><!-- doxytag: member="TTURLRequestQueue::_loaders" ref="ad91e5e3b2bcf872feae4288ca7313de0" args="" -->
<a class="el" href="class_n_s_mutable_dictionary.php">NSMutableDictionary</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_loaders</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acdc9ccddd17d80fc8b877b756542ba22"></a><!-- doxytag: member="TTURLRequestQueue::_loaderQueue" ref="acdc9ccddd17d80fc8b877b756542ba22" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_loaderQueue</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a75c408cdcce9da6163c432e89da32a14"></a><!-- doxytag: member="TTURLRequestQueue::_loaderQueueTimer" ref="a75c408cdcce9da6163c432e89da32a14" args="" -->
NSTimer *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_loaderQueueTimer</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae269d597ee56506e2e9b9627bbc2de8a"></a><!-- doxytag: member="TTURLRequestQueue::_totalLoading" ref="ae269d597ee56506e2e9b9627bbc2de8a" args="" -->
NSInteger&nbsp;</td><td class="memItemRight" valign="bottom"><b>_totalLoading</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a865457dc1a713db91a7c5e4c005fbcee"></a><!-- doxytag: member="TTURLRequestQueue::_maxContentLength" ref="a865457dc1a713db91a7c5e4c005fbcee" args="" -->
NSUInteger&nbsp;</td><td class="memItemRight" valign="bottom"><b>_maxContentLength</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9af3e54a3b617838ff3034ff2963d6fd"></a><!-- doxytag: member="TTURLRequestQueue::_userAgent" ref="a9af3e54a3b617838ff3034ff2963d6fd" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_userAgent</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aec6d45fdf0a908da5d19a7fbf33240c1"></a><!-- doxytag: member="TTURLRequestQueue::_imageCompressionQuality" ref="aec6d45fdf0a908da5d19a7fbf33240c1" args="" -->
CGFloat&nbsp;</td><td class="memItemRight" valign="bottom"><b>_imageCompressionQuality</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8bb0463a6e6d0a44e1a3140fb08ac0ef"></a><!-- doxytag: member="TTURLRequestQueue::_suspended" ref="a8bb0463a6e6d0a44e1a3140fb08ac0ef" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_suspended</b></td></tr>
</table>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a263596b58314c7ea6c14f8b5718f7b26"></a><!-- doxytag: member="TTURLRequestQueue::cancelRequestsWithDelegate:" ref="a263596b58314c7ea6c14f8b5718f7b26" args="(id delegate)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) cancelRequestsWithDelegate: </td>
          <td></td>
          <td class="paramtype">(id)&nbsp;</td>
          <td class="paramname"> <em>delegate</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Cancel all active or pending requests whose delegate or response is an object. </p>
<p>This is useful for when an object is about to be destroyed and you want to remove pointers to it from active requests to prevent crashes when those pointers are later referenced. </p>

</div>
</div>
<a class="anchor" id="ad3b50d883f28dd7e9cccbbfa3b52236a"></a><!-- doxytag: member="TTURLRequestQueue::sendRequest:" ref="ad3b50d883f28dd7e9cccbbfa3b52236a" args="(TTURLRequest *request)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) sendRequest: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>*)&nbsp;</td>
          <td class="paramname"> <em>request</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Load a request from the cache or the network if it is not in the cache. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>YES if the request was loaded synchronously from the cache. </dd></dl>

</div>
</div>
<a class="anchor" id="adf048cfe3144a34a688db67f93908916"></a><!-- doxytag: member="TTURLRequestQueue::sendSynchronousRequest:" ref="adf048cfe3144a34a688db67f93908916" args="(TTURLRequest *request)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) sendSynchronousRequest: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a>*)&nbsp;</td>
          <td class="paramname"> <em>request</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Synchronously load a request from the cache or the network if it is not in the cache. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>YES if the request was loaded from the cache. </dd></dl>

</div>
</div>
<hr/><h2>Property Documentation</h2>
<a class="anchor" id="aa6818e451230a069a53bcb2026d14fa0"></a><!-- doxytag: member="TTURLRequestQueue::imageCompressionQuality" ref="aa6818e451230a069a53bcb2026d14fa0" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (CGFloat) imageCompressionQuality<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The compression quality used for encoding images sent with HTTP posts. </p>
<p>0.75 </p>

</div>
</div>
<a class="anchor" id="ac12fd4da800c6c86a1c9c8cf22a5906f"></a><!-- doxytag: member="TTURLRequestQueue::maxContentLength" ref="ac12fd4da800c6c86a1c9c8cf22a5906f" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (NSUInteger) maxContentLength<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The maximum size of a download that is allowed. </p>
<p>If a response reports a content length greater than the max, the download will be cancelled. This is helpful for preventing excessive memory usage. Setting this to zero will allow all downloads regardless of size.</p>
<p>150000 bytes </p>

</div>
</div>
<a class="anchor" id="a8addd08d2cef4fa320cf0930b4c8c591"></a><!-- doxytag: member="TTURLRequestQueue::suspended" ref="a8addd08d2cef4fa320cf0930b4c8c591" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) suspended<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Gets the flag that determines if new load requests are allowed to reach the network. </p>
<p>Because network requests tend to slow down performance, this property can be used to temporarily delay them. All requests made while suspended are queued, and when suspended becomes false again they are executed. </p>

</div>
</div>
<a class="anchor" id="af57cab87b15e0b1c7fa7b6b90e6aa3aa"></a><!-- doxytag: member="TTURLRequestQueue::userAgent" ref="af57cab87b15e0b1c7fa7b6b90e6aa3aa" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_n_s_string.php">NSString</a>*) userAgent<code> [read, write, copy]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The user-agent string that is sent with all HTTP requests. </p>
<p>If set to 'nil', User-Agent set by NSURLRequest will be used, which looks like: 'APP_NAME/N.N CFNetwork/NNN Darwin/NN.N.NNN'.</p>
<p>nil </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Network/Headers/<a class="el" href="_t_t_u_r_l_request_queue_8h_source.php">TTURLRequestQueue.h</a></li>
<li>Three20Network/Sources/TTURLRequestQueue.m</li>
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