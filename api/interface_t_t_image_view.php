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
  <title>Three20: TTImageView Class Reference</title>
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTImageView Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTImageView" --><!-- doxytag: inherits="TTView,TTURLRequestDelegate-p" -->
<p>A view that asynchronously loads an image and subsequently displays it.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_image_view_8h_source.php">TTImageView.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTImageView:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_image_view.png" usemap="#TTImageView_map" alt=""/>
  <map id="TTImageView_map" name="TTImageView_map">
<area href="interface_t_t_view.php" alt="TTView" shape="rect" coords="83,56,240,80"/>
<area href="protocol_t_t_u_r_l_request_delegate-p.php" alt="&lt;TTURLRequestDelegate&gt;" shape="rect" coords="250,56,407,80"/>
<area href="class_u_i_view.php" alt="UIView" shape="rect" coords="0,0,157,24"/>
<area href="protocol_t_t_style_delegate-p.php" alt="&lt;TTStyleDelegate&gt;" shape="rect" coords="167,0,324,24"/>
<area href="interface_t_t_photo_view.php" alt="TTPhotoView" shape="rect" coords="167,168,324,192"/>
</map>
</div>

<p><a href="class_t_t_image_view-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a45f01356d13b9a4feb16a7d0dfc11dd6"></a><!-- doxytag: member="TTImageView::unsetImage" ref="a45f01356d13b9a4feb16a7d0dfc11dd6" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_image_view.php#a45f01356d13b9a4feb16a7d0dfc11dd6">unsetImage</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancel any pending request, remove the image, and redraw the view. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_image_view.php#acabfc9494cda1e296dfe5395adfa1ded">reload</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Force the image to be reloaded.  <a href="#acabfc9494cda1e296dfe5395adfa1ded"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab726aee4cb2dd60276eae933607366cf"></a><!-- doxytag: member="TTImageView::stopLoading" ref="ab726aee4cb2dd60276eae933607366cf" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_image_view.php#ab726aee4cb2dd60276eae933607366cf">stopLoading</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cancel this image views' active asynchronous requests. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_image_view.php#aeb434f2a23554c10cc7f01d861fe841f">imageViewDidStartLoad</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Called when the image begins loading asynchronously.  <a href="#aeb434f2a23554c10cc7f01d861fe841f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_image_view.php#af0feb022797654f5468d375dc8cd57d6">imageViewDidLoadImage:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Called when the image finishes loading asynchronously.  <a href="#af0feb022797654f5468d375dc8cd57d6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_image_view.php#a6257f74a8a335ea56eed95f5b33f62e6">imageViewDidFailLoadWithError:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Called when the image failed to load asynchronously.  <a href="#a6257f74a8a335ea56eed95f5b33f62e6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_image_view.php#ad2b661168892cc606dff75d436858171">setImage:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Useful when overriding the <a class="el" href="interface_t_t_image_view.php" title="A view that asynchronously loads an image and subsequently displays it.">TTImageView</a> class's setImage method.  <a href="#ad2b661168892cc606dff75d436858171"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad88f3307be7d49bf55b419941a1eabbd"></a><!-- doxytag: member="TTImageView::drawContent:" ref="ad88f3307be7d49bf55b419941a1eabbd" args="(CGRect rect)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>drawContent:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6ca8c9a930241745c77280b6e5296a6b"></a><!-- doxytag: member="TTImageView::textForLayerWithStyle:" ref="a6ca8c9a930241745c77280b6e5296a6b" args="(TTStyle *style)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>textForLayerWithStyle:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a61b305018c41e4b8596d477337614e28"></a><!-- doxytag: member="TTImageView::imageForLayerWithStyle:" ref="a61b305018c41e4b8596d477337614e28" args="(TTStyle *style)" -->
(<a class="el" href="class_u_i_image.php">UIImage</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>imageForLayerWithStyle:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a940c09a71f143ac572cf3ebaddeb127e"></a><!-- doxytag: member="TTImageView::drawLayer:withStyle:" ref="a940c09a71f143ac572cf3ebaddeb127e" args="(TTStyleContext *context,[withStyle] TTStyle *style)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>drawLayer:withStyle:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#ae20fc15de596fef702c47a38343ccec6">requestDidStartLoad:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request has begun loading.  <a href="#ae20fc15de596fef702c47a38343ccec6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a9c831806650a4b887f5cf963f6bbba1c">requestDidUploadData:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request has loaded some more data.  <a href="#a9c831806650a4b887f5cf963f6bbba1c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a82d97cb6c6b7b9fa1d57da6a7493fdeb">requestDidFinishLoad:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request has loaded data and been processed into a response.  <a href="#a82d97cb6c6b7b9fa1d57da6a7493fdeb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a04aedf8b7c34959441ffc6c896682b01"></a><!-- doxytag: member="TTImageView::request:didReceiveAuthenticationChallenge:" ref="a04aedf8b7c34959441ffc6c896682b01" args="(TTURLRequest *request,[didReceiveAuthenticationChallenge] NSURLAuthenticationChallenge *challenge)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a04aedf8b7c34959441ffc6c896682b01">request:didReceiveAuthenticationChallenge:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Allows delegate to handle any authentication challenges. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1a8bc501340864cd0d96cb8a5bc14364"></a><!-- doxytag: member="TTImageView::request:didFailLoadWithError:" ref="a1a8bc501340864cd0d96cb8a5bc14364" args="(TTURLRequest *request,[didFailLoadWithError] NSError *error)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a1a8bc501340864cd0d96cb8a5bc14364">request:didFailLoadWithError:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request failed to load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a208cacf0d2427a1f23d8d56b5536e358"></a><!-- doxytag: member="TTImageView::requestDidCancelLoad:" ref="a208cacf0d2427a1f23d8d56b5536e358" args="(TTURLRequest *request)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_u_r_l_request_delegate-p.php#a208cacf0d2427a1f23d8d56b5536e358">requestDidCancelLoad:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The request was canceled. <br/></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac744ef7f1c0bf049a4618b90aaf7e13d"></a><!-- doxytag: member="TTImageView::_request" ref="ac744ef7f1c0bf049a4618b90aaf7e13d" args="" -->
<a class="el" href="interface_t_t_u_r_l_request.php">TTURLRequest</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_request</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a64da0c5bcff90405cc5f16f03bd572a8"></a><!-- doxytag: member="TTImageView::_urlPath" ref="a64da0c5bcff90405cc5f16f03bd572a8" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_urlPath</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aafadb349734c3755fced0347c71894d7"></a><!-- doxytag: member="TTImageView::_image" ref="aafadb349734c3755fced0347c71894d7" args="" -->
<a class="el" href="class_u_i_image.php">UIImage</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_image</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a53f9cef668fe33fcd16be0e242423042"></a><!-- doxytag: member="TTImageView::_defaultImage" ref="a53f9cef668fe33fcd16be0e242423042" args="" -->
<a class="el" href="class_u_i_image.php">UIImage</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_defaultImage</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a80c2ae080235ba57364ab0359f9fdf6f"></a><!-- doxytag: member="TTImageView::_autoresizesToImage" ref="a80c2ae080235ba57364ab0359f9fdf6f" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><b>_autoresizesToImage</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="adeafb6b49768ffc616e511e2eecd1509"></a><!-- doxytag: member="TTImageView::_delegate" ref="adeafb6b49768ffc616e511e2eecd1509" args="" -->
id&lt; <a class="el" href="protocol_t_t_image_view_delegate-p.php">TTImageViewDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>_delegate</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a97853b2c7509081da5ac2fc9cf89976f"></a><!-- doxytag: member="TTImageView::_style" ref="a97853b2c7509081da5ac2fc9cf89976f" args="" -->
<a class="el" href="interface_t_t_style.php">TTStyle</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_style</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aea5bd0ee9481a7012f50ea91cd7501bf"></a><!-- doxytag: member="TTImageView::_layout" ref="aea5bd0ee9481a7012f50ea91cd7501bf" args="" -->
<a class="el" href="interface_t_t_layout.php">TTLayout</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_layout</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_image_view.php#a037c253134647eeb0dec16dc5bd8f7f6">urlPath</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The path of the image.  <a href="#a037c253134647eeb0dec16dc5bd8f7f6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_u_i_image.php">UIImage</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_image_view.php#ac0806da2d2e376974fe0af0242e8635a">defaultImage</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The default image that is displayed until the image has been downloaded.  <a href="#ac0806da2d2e376974fe0af0242e8635a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5a282b09c9dc2ae0fc3bb2d0dcbe165c"></a><!-- doxytag: member="TTImageView::image" ref="a5a282b09c9dc2ae0fc3bb2d0dcbe165c" args="" -->
<a class="el" href="class_u_i_image.php">UIImage</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_image_view.php#a5a282b09c9dc2ae0fc3bb2d0dcbe165c">image</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The image that is currently being displayed. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_image_view.php#a550deee45ef3cf4f72eba737f38d0924">autoresizesToImage</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Override the default sizing operation and resize the frame of this view with the size of the image.  <a href="#a550deee45ef3cf4f72eba737f38d0924"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a665f800cac80e9b94521e68adf7f06e8"></a><!-- doxytag: member="TTImageView::isLoading" ref="a665f800cac80e9b94521e68adf7f06e8" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_image_view.php#a665f800cac80e9b94521e68adf7f06e8">isLoading</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Is an asynchronous request currently active? <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a771abb9049776ede10ec6db7a667e9fc"></a><!-- doxytag: member="TTImageView::isLoaded" ref="a771abb9049776ede10ec6db7a667e9fc" args="" -->
BOOL&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_image_view.php#a771abb9049776ede10ec6db7a667e9fc">isLoaded</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Has the image been successfully loaded? <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a28a5a7c4401e82b11b9266ae4fb4c414"></a><!-- doxytag: member="TTImageView::delegate" ref="a28a5a7c4401e82b11b9266ae4fb4c414" args="" -->
id&lt; <a class="el" href="protocol_t_t_image_view_delegate-p.php">TTImageViewDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_t_t_image_view.php#a28a5a7c4401e82b11b9266ae4fb4c414">delegate</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">A delegate that notifies you when the image has started and finished loading. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a832ab8c5e49539942c6d40c66fc80c78"></a><!-- doxytag: member="TTImageView::style" ref="a832ab8c5e49539942c6d40c66fc80c78" args="" -->
<a class="el" href="interface_t_t_style.php">TTStyle</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>style</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aae1379b4316b8434d095325bfac7b70a"></a><!-- doxytag: member="TTImageView::layout" ref="aae1379b4316b8434d095325bfac7b70a" args="" -->
<a class="el" href="interface_t_t_layout.php">TTLayout</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>layout</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A view that asynchronously loads an image and subsequently displays it. </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a6257f74a8a335ea56eed95f5b33f62e6"></a><!-- doxytag: member="TTImageView::imageViewDidFailLoadWithError:" ref="a6257f74a8a335ea56eed95f5b33f62e6" args="(NSError *error)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) imageViewDidFailLoadWithError: </td>
          <td></td>
          <td class="paramtype">(NSError*)&nbsp;</td>
          <td class="paramname"> <em>error</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Called when the image failed to load asynchronously. </p>
<p>Overridable method. </p>

</div>
</div>
<a class="anchor" id="af0feb022797654f5468d375dc8cd57d6"></a><!-- doxytag: member="TTImageView::imageViewDidLoadImage:" ref="af0feb022797654f5468d375dc8cd57d6" args="(UIImage *image)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) imageViewDidLoadImage: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_u_i_image.php">UIImage</a>*)&nbsp;</td>
          <td class="paramname"> <em>image</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Called when the image finishes loading asynchronously. </p>
<p>Overridable method. </p>

</div>
</div>
<a class="anchor" id="aeb434f2a23554c10cc7f01d861fe841f"></a><!-- doxytag: member="TTImageView::imageViewDidStartLoad" ref="aeb434f2a23554c10cc7f01d861fe841f" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) imageViewDidStartLoad </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Called when the image begins loading asynchronously. </p>
<p>Overridable method. </p>

</div>
</div>
<a class="anchor" id="acabfc9494cda1e296dfe5395adfa1ded"></a><!-- doxytag: member="TTImageView::reload" ref="acabfc9494cda1e296dfe5395adfa1ded" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) reload </td>
          <td></td>
          <td class="paramname"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Force the image to be reloaded. </p>
<p>If the image is not in the cache, an asynchronous request is sent off to fetch the image. </p>

</div>
</div>
<a class="anchor" id="a82d97cb6c6b7b9fa1d57da6a7493fdeb"></a><!-- doxytag: member="TTImageView::requestDidFinishLoad:" ref="a82d97cb6c6b7b9fa1d57da6a7493fdeb" args="(TTURLRequest *request)" -->
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
<a class="anchor" id="ae20fc15de596fef702c47a38343ccec6"></a><!-- doxytag: member="TTImageView::requestDidStartLoad:" ref="ae20fc15de596fef702c47a38343ccec6" args="(TTURLRequest *request)" -->
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
<a class="anchor" id="a9c831806650a4b887f5cf963f6bbba1c"></a><!-- doxytag: member="TTImageView::requestDidUploadData:" ref="a9c831806650a4b887f5cf963f6bbba1c" args="(TTURLRequest *request)" -->
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
<a class="anchor" id="ad2b661168892cc606dff75d436858171"></a><!-- doxytag: member="TTImageView::setImage:" ref="ad2b661168892cc606dff75d436858171" args="(UIImage *image)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) setImage: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_u_i_image.php">UIImage</a> *)&nbsp;</td>
          <td class="paramname"> <em>image</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Useful when overriding the <a class="el" href="interface_t_t_image_view.php" title="A view that asynchronously loads an image and subsequently displays it.">TTImageView</a> class's setImage method. </p>
<dl class="see"><dt><b>See also:</b></dt><dd><a class="el" href="interface_t_t_photo_view.php">TTPhotoView</a> </dd></dl>

</div>
</div>
<hr/><h2>Property Documentation</h2>
<a class="anchor" id="a550deee45ef3cf4f72eba737f38d0924"></a><!-- doxytag: member="TTImageView::autoresizesToImage" ref="a550deee45ef3cf4f72eba737f38d0924" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) autoresizesToImage<code> [read, write, assign]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Override the default sizing operation and resize the frame of this view with the size of the image. </p>
<p>NO </p>

</div>
</div>
<a class="anchor" id="ac0806da2d2e376974fe0af0242e8635a"></a><!-- doxytag: member="TTImageView::defaultImage" ref="ac0806da2d2e376974fe0af0242e8635a" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_u_i_image.php">UIImage</a>*) defaultImage<code> [read, write, retain]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The default image that is displayed until the image has been downloaded. </p>
<p>If no urlPath is specified, this image will be displayed indefinitely. </p>

</div>
</div>
<a class="anchor" id="a037c253134647eeb0dec16dc5bd8f7f6"></a><!-- doxytag: member="TTImageView::urlPath" ref="a037c253134647eeb0dec16dc5bd8f7f6" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (<a class="el" href="class_n_s_string.php">NSString</a>*) urlPath<code> [read, write, copy]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The path of the image. </p>
<p>This may be a web path (<a href="http://path/to/image.gif">http://path/to/image.gif</a>) or a local bundle path (bundle://path/to/image.png). </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_image_view_8h_source.php">TTImageView.h</a></li>
<li>Three20UI/Sources/TTImageView.m</li>
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