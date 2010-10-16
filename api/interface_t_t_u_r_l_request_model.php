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
  <title>Three20: TTURLRequestModel Class Reference</title>
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
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTURLRequestModel Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTURLRequestModel" --><!-- doxytag: inherits="TTModel,TTURLRequestDelegate-p" -->
<p>An implementation of <a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> which is built to work with TTURLRequests.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_u_r_l_request_model_8h_source.php">TTURLRequestModel.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTURLRequestModel:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_u_r_l_request_model.png" usemap="#TTURLRequestModel_map" alt=""/>
  <map id="TTURLRequestModel_map" name="TTURLRequestModel_map">
<area href="interface_t_t_model.php" alt="TTModel" shape="rect" coords="83,56,240,80"/>
<area href="protocol_t_t_u_r_l_request_delegate-p.php" alt="&lt;TTURLRequestDelegate&gt;" shape="rect" coords="250,56,407,80"/>
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,157,24"/>
<area href="protocol_t_t_model-p.php" alt="&lt;TTModel&gt;" shape="rect" coords="167,0,324,24"/>
</map>
</div>

<p><a href="class_t_t_u_r_l_request_model-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a29ebf5997eb74ac247bc416e5e90d14a"></a><!-- doxytag: member="TTURLRequestModel::reset" ref="a29ebf5997eb74ac247bc416e5e90d14a" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_u_r_l_request_model.php#a29ebf5997eb74ac247bc416e5e90d14a">reset</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Resets the model to its original state before any data was loaded. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab631e110ec681d86158a8895061a5885"></a><!-- doxytag: member="TTURLRequestModel::didStartLoad" ref="ab631e110ec681d86158a8895061a5885" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#ab631e110ec681d86158a8895061a5885">didStartLoad</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model started to load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="adc24f173e80034b8c27378f95dba5fda"></a><!-- doxytag: member="TTURLRequestModel::didFinishLoad" ref="adc24f173e80034b8c27378f95dba5fda" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#adc24f173e80034b8c27378f95dba5fda">didFinishLoad</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model finished loading. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab9c90625dc2cd0496a77f4c3a3c6142a"></a><!-- doxytag: member="TTURLRequestModel::didFailLoadWithError:" ref="ab9c90625dc2cd0496a77f4c3a3c6142a" args="(NSError *error)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#ab9c90625dc2cd0496a77f4c3a3c6142a">didFailLoadWithError:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model failed to load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3e774c650e1106f3a0c281b7021c95d0"></a><!-- doxytag: member="TTURLRequestModel::didCancelLoad" ref="a3e774c650e1106f3a0c281b7021c95d0" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a3e774c650e1106f3a0c281b7021c95d0">didCancelLoad</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model canceled its load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aafb43ebb3bfec2f63be76cfeccb6b1e0"></a><!-- doxytag: member="TTURLRequestModel::beginUpdates" ref="aafb43ebb3bfec2f63be76cfeccb6b1e0" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#aafb43ebb3bfec2f63be76cfeccb6b1e0">beginUpdates</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model has begun making multiple updates. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a72177e30bb905e113450e8ab5183f04a"></a><!-- doxytag: member="TTURLRequestModel::endUpdates" ref="a72177e30bb905e113450e8ab5183f04a" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a72177e30bb905e113450e8ab5183f04a">endUpdates</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model has completed its updates. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a838de41069159b5af22e3f7b4a6028a6"></a><!-- doxytag: member="TTURLRequestModel::didUpdateObject:atIndexPath:" ref="a838de41069159b5af22e3f7b4a6028a6" args="(id object,[atIndexPath] NSIndexPath *indexPath)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a838de41069159b5af22e3f7b4a6028a6">didUpdateObject:atIndexPath:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that an object was updated. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a340d54a605f5270d6fabb262c862b6b5"></a><!-- doxytag: member="TTURLRequestModel::didInsertObject:atIndexPath:" ref="a340d54a605f5270d6fabb262c862b6b5" args="(id object,[atIndexPath] NSIndexPath *indexPath)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a340d54a605f5270d6fabb262c862b6b5">didInsertObject:atIndexPath:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that an object was inserted. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af1dcd69944ae2470483fd8375e3cc421"></a><!-- doxytag: member="TTURLRequestModel::didDeleteObject:atIndexPath:" ref="af1dcd69944ae2470483fd8375e3cc421" args="(id object,[atIndexPath] NSIndexPath *indexPath)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#af1dcd69944ae2470483fd8375e3cc421">didDeleteObject:atIndexPath:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that an object was deleted. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ade47f3250e00f0809ca3e7da405bcdf2"></a><!-- doxytag: member="TTURLRequestModel::didChange" ref="ade47f3250e00f0809ca3e7da405bcdf2" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#ade47f3250e00f0809ca3e7da405bcdf2">didChange</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model changed in some fundamental way. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a75f0ad85113d05134ed5e79b37b5827e"></a><!-- doxytag: member="TTURLRequestModel::delegates" ref="a75f0ad85113d05134ed5e79b37b5827e" args="()" -->
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
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#ae20fc15de596fef702c47a38343ccec6">requestDidStartLoad:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request has begun loading.  <a href="#ae20fc15de596fef702c47a38343ccec6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a9c831806650a4b887f5cf963f6bbba1c">requestDidUploadData:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request has loaded some more data.  <a href="#a9c831806650a4b887f5cf963f6bbba1c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a82d97cb6c6b7b9fa1d57da6a7493fdeb">requestDidFinishLoad:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request has loaded data and been processed into a response.  <a href="#a82d97cb6c6b7b9fa1d57da6a7493fdeb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a04aedf8b7c34959441ffc6c896682b01"></a><!-- doxytag: member="TTURLRequestModel::request:didReceiveAuthenticationChallenge:" ref="a04aedf8b7c34959441ffc6c896682b01" args="(TTURLRequest *request,[didReceiveAuthenticationChallenge] NSURLAuthenticationChallenge *challenge)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a04aedf8b7c34959441ffc6c896682b01">request:didReceiveAuthenticationChallenge:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Allows delegate to handle any authentication challenges. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1a8bc501340864cd0d96cb8a5bc14364"></a><!-- doxytag: member="TTURLRequestModel::request:didFailLoadWithError:" ref="a1a8bc501340864cd0d96cb8a5bc14364" args="(TTURLRequest *request,[didFailLoadWithError] NSError *error)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a1a8bc501340864cd0d96cb8a5bc14364">request:didFailLoadWithError:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request failed to load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a208cacf0d2427a1f23d8d56b5536e358"></a><!-- doxytag: member="TTURLRequestModel::requestDidCancelLoad:" ref="a208cacf0d2427a1f23d8d56b5536e358" args="(TTURLRequest *request)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a208cacf0d2427a1f23d8d56b5536e358">requestDidCancelLoad:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request was canceled. <br/></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a72353bc2e79d5e0275a4cb5dbfee9142"></a><!-- doxytag: member="TTURLRequestModel::_loadingRequest" ref="a72353bc2e79d5e0275a4cb5dbfee9142" args="" -->
<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_loadingRequest</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa060ac3d200e5fa2022319365a97e0af"></a><!-- doxytag: member="TTURLRequestModel::_loadedTime" ref="aa060ac3d200e5fa2022319365a97e0af" args="" -->
<a class="el" href="class_n_s_date.php">NSDate</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_loadedTime</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a552e08485abea083ec427d10b46f5dcb"></a><!-- doxytag: member="TTURLRequestModel::_cacheKey" ref="a552e08485abea083ec427d10b46f5dcb" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_cacheKey</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acd76b2fffb83a28b1049b55342c26845"></a><!-- doxytag: member="TTURLRequestModel::_isLoadingMore" ref="acd76b2fffb83a28b1049b55342c26845" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_isLoadingMore</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a037ea0103171f09be9791d8aa9120ad4"></a><!-- doxytag: member="TTURLRequestModel::_hasNoMore" ref="a037ea0103171f09be9791d8aa9120ad4" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_hasNoMore</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2dafdf43691e40159c41e055b777c2da"></a><!-- doxytag: member="TTURLRequestModel::_delegates" ref="a2dafdf43691e40159c41e055b777c2da" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_delegates</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_s_date.php">NSDate</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_u_r_l_request_model.php#ace587f260d01aaf0e3e9f885e578689a">loadedTime</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Valid upon completion of the URL request.  <a href="#ace587f260d01aaf0e3e9f885e578689a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_u_r_l_request_model.php#a2127dc12c0ef3b45dd099f37f6337d2b">cacheKey</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Valid upon completion of the URL request.  <a href="#a2127dc12c0ef3b45dd099f37f6337d2b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a408188443e720d09d66bd526d9a669b1"></a><!-- doxytag: member="TTURLRequestModel::hasNoMore" ref="a408188443e720d09d66bd526d9a669b1" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_u_r_l_request_model.php#a408188443e720d09d66bd526d9a669b1">hasNoMore</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Not used internally, but intended for book-keeping purposes when making requests. <br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>An implementation of <a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> which is built to work with TTURLRequests. </p>
<p>If you use a <a class="el" href="interface_t_t_u_r_l_request_model.php" title="An implementation of TTModel which is built to work with TTURLRequests.">TTURLRequestModel</a> as the delegate of your TTURLRequests, it will automatically manage many of the <a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> properties based on the state of your requests. </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="ab1a78579b78649df0061aabd384db721"></a><!-- doxytag: member="TTURLRequestModel::cancel" ref="ab1a78579b78649df0061aabd384db721" args="()" -->
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
<a class="anchor" id="a13efe0c75b14ded343cd95bc84ed65f6"></a><!-- doxytag: member="TTURLRequestModel::invalidate:" ref="a13efe0c75b14ded343cd95bc84ed65f6" args="(BOOL erase)" -->
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
<a class="anchor" id="a0717855b556f4efac8de7571f1d38cea"></a><!-- doxytag: member="TTURLRequestModel::isLoaded" ref="a0717855b556f4efac8de7571f1d38cea" args="()" -->
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
<a class="anchor" id="a68b9d49ad095a221c82ec0d13b6038ec"></a><!-- doxytag: member="TTURLRequestModel::isLoading" ref="a68b9d49ad095a221c82ec0d13b6038ec" args="()" -->
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
<a class="anchor" id="a41b1268d87a53c51aa8b22bbeeb29d07"></a><!-- doxytag: member="TTURLRequestModel::isLoadingMore" ref="a41b1268d87a53c51aa8b22bbeeb29d07" args="()" -->
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
<a class="anchor" id="adbf2fa828a24a0428695f4cd708d9db6"></a><!-- doxytag: member="TTURLRequestModel::isOutdated" ref="adbf2fa828a24a0428695f4cd708d9db6" args="()" -->
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
<a class="anchor" id="a7b6152507942206e12aa6889a0ed8b8c"></a><!-- doxytag: member="TTURLRequestModel::load:more:" ref="a7b6152507942206e12aa6889a0ed8b8c" args="(TTURLRequestCachePolicy cachePolicy,[more] BOOL more)" -->
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
<a class="anchor" id="a82d97cb6c6b7b9fa1d57da6a7493fdeb"></a><!-- doxytag: member="TTURLRequestModel::requestDidFinishLoad:" ref="a82d97cb6c6b7b9fa1d57da6a7493fdeb" args="(TTURLRequest *request)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) requestDidFinishLoad: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a> *)&nbsp;</td>
          <td class="paramname"> <em>request</em></td>
          <td>&nbsp;</td>
          <td><code> [optional, inherited]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The request has loaded data and been processed into a response. </p>
<p>If the request is served from the cache, this is the only delegate method that will be called. </p>

</div>
</div>
<a class="anchor" id="ae20fc15de596fef702c47a38343ccec6"></a><!-- doxytag: member="TTURLRequestModel::requestDidStartLoad:" ref="ae20fc15de596fef702c47a38343ccec6" args="(TTURLRequest *request)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) requestDidStartLoad: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a> *)&nbsp;</td>
          <td class="paramname"> <em>request</em></td>
          <td>&nbsp;</td>
          <td><code> [optional, inherited]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The request has begun loading. </p>
<p>This method will not be called if the data is loaded immediately from the cache. </p>
<dl class="see"><dt><b>See also:</b></dt><dd><a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a82d97cb6c6b7b9fa1d57da6a7493fdeb" title="The request has loaded data and been processed into a response.">- requestDidFinishLoad:</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a9c831806650a4b887f5cf963f6bbba1c"></a><!-- doxytag: member="TTURLRequestModel::requestDidUploadData:" ref="a9c831806650a4b887f5cf963f6bbba1c" args="(TTURLRequest *request)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) requestDidUploadData: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a> *)&nbsp;</td>
          <td class="paramname"> <em>request</em></td>
          <td>&nbsp;</td>
          <td><code> [optional, inherited]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The request has loaded some more data. </p>
<p>Check the totalBytesLoaded and totalBytesExpected properties for details. </p>

</div>
</div>
<hr/><h2>Property Documentation</h2>
<a class="anchor" id="a2127dc12c0ef3b45dd099f37f6337d2b"></a><!-- doxytag: member="TTURLRequestModel::cacheKey" ref="a2127dc12c0ef3b45dd099f37f6337d2b" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_n_s_string.php">NSString</a>*) cacheKey<code> [read, write, copy]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Valid upon completion of the URL request. </p>
<p>Represents the request's cache key. </p>

</div>
</div>
<a class="anchor" id="ace587f260d01aaf0e3e9f885e578689a"></a><!-- doxytag: member="TTURLRequestModel::loadedTime" ref="ace587f260d01aaf0e3e9f885e578689a" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_n_s_date.php">NSDate</a>*) loadedTime<code> [read, write, retain]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Valid upon completion of the URL request. </p>
<p>Represents the timestamp of the completed request. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Network/Headers/<a class="el" href="_t_t_u_r_l_request_model_8h_source.php">TTURLRequestModel.h</a></li>
<li>Three20Network/Sources/TTURLRequestModel.m</li>
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
