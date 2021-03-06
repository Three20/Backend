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
<title>Three20 API: YAJL_GTMBase64 Class Reference</title>
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
  <li><a href="http://forums.three20.info/">Forums</a></li> 
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
<a href="#pub-static-methods">Static Public Member Functions</a>  </div>
  <div class="headertitle">
<h1>YAJL_GTMBase64 Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="YAJL_GTMBase64" --><!-- doxytag: inherits="NSObject" -->
<p>Helper for handling Base64 and WebSafeBase64 encodings.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_g_t_m_base64_8h_source.php">GTMBase64.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for YAJL_GTMBase64:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_y_a_j_l___g_t_m_base64.png" usemap="#YAJL_GTMBase64_map" alt=""/>
  <map id="YAJL_GTMBase64_map" name="YAJL_GTMBase64_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,120,24"/>
</map>
</div>

<p><a href="class_y_a_j_l___g_t_m_base64-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#affc5e619fd33c272f45a982fc13eff67">encodeData:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object.  <a href="#affc5e619fd33c272f45a982fc13eff67"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#ae640116ea8eeb46ac6ed4961af626df6">decodeData:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Base64 decodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object.  <a href="#ae640116ea8eeb46ac6ed4961af626df6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#aa65723f813ed006fd2c8f34f61f18597">encodeBytes:length:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Base64 encodes the data pointed at by |bytes|.  <a href="#aa65723f813ed006fd2c8f34f61f18597"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#a2b871f1cf6dea4f5d76df9db3e21d5b1">decodeBytes:length:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Base64 decodes the data pointed at by |bytes|.  <a href="#a2b871f1cf6dea4f5d76df9db3e21d5b1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#ae967ea0a9ad7e59ef54b68a5a7438f02">stringByEncodingData:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object.  <a href="#ae967ea0a9ad7e59ef54b68a5a7438f02"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#ac7889e2ba4cdcd420254292b8279d7cb">stringByEncodingBytes:length:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Base64 encodes the data pointed at by |bytes|.  <a href="#ac7889e2ba4cdcd420254292b8279d7cb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#a52241a9c8d431a73ac3c95b5def7c277">decodeString:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Base64 decodes contents of the <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a>.  <a href="#a52241a9c8d431a73ac3c95b5def7c277"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#ac356135e36f68ffc67e7c39cb2711857">webSafeEncodeData:padded:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">WebSafe Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object.  <a href="#ac356135e36f68ffc67e7c39cb2711857"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#a0e04e226419b424b4cbf407891e3896b">webSafeDecodeData:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">WebSafe Base64 decodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object.  <a href="#a0e04e226419b424b4cbf407891e3896b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#a1eeb73c96a41911dc18233949eb855d0">webSafeEncodeBytes:length:padded:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">WebSafe Base64 encodes the data pointed at by |bytes|.  <a href="#a1eeb73c96a41911dc18233949eb855d0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#a20b117eccceced30423df1430764a279">webSafeDecodeBytes:length:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">WebSafe Base64 decodes the data pointed at by |bytes|.  <a href="#a20b117eccceced30423df1430764a279"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#a558baaa1970fdcd0c31ff0b250d60845">stringByWebSafeEncodingData:padded:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">WebSafe Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object.  <a href="#a558baaa1970fdcd0c31ff0b250d60845"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#ae8c8eb21a3110dcd227f13a86bf6255d">stringByWebSafeEncodingBytes:length:padded:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">WebSafe Base64 encodes the data pointed at by |bytes|.  <a href="#ae8c8eb21a3110dcd227f13a86bf6255d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <a class="el" href="interface_y_a_j_l___g_t_m_base64.php#a66621f8d59760d48e7484cfdf01facbb">webSafeDecodeString:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">WebSafe Base64 decodes contents of the <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a>.  <a href="#a66621f8d59760d48e7484cfdf01facbb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab4e40534349ae8ae0af4c7b933c15df3"></a><!-- doxytag: member="YAJL_GTMBase64::baseEncode:length:charset:padded:" ref="ab4e40534349ae8ae0af4c7b933c15df3" args="(const void *bytes,[length] NSUInteger length,[charset] const char *charset,[padded] BOOL padded)" -->
(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>baseEncode:length:charset:padded:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a518d7f558b242af1af869b9e3a291948"></a><!-- doxytag: member="YAJL_GTMBase64::baseDecode:length:charset:requirePadding:" ref="a518d7f558b242af1af869b9e3a291948" args="(const void *bytes,[length] NSUInteger length,[charset] const char *charset,[requirePadding] BOOL requirePadding)" -->
(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>baseDecode:length:charset:requirePadding:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac0b8f0fca486f9f9ed2517207ce168ab"></a><!-- doxytag: member="YAJL_GTMBase64::baseEncode:srcLen:destBytes:destLen:charset:padded:" ref="ac0b8f0fca486f9f9ed2517207ce168ab" args="(const char *srcBytes,[srcLen] NSUInteger srcLen,[destBytes] char *destBytes,[destLen] NSUInteger destLen,[charset] const char *charset,[padded] BOOL padded)" -->
(NSUInteger)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>baseEncode:srcLen:destBytes:destLen:charset:padded:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a504a32e14172c5c42f9d64c1bc99f214"></a><!-- doxytag: member="YAJL_GTMBase64::baseDecode:srcLen:destBytes:destLen:charset:requirePadding:" ref="a504a32e14172c5c42f9d64c1bc99f214" args="(const char *srcBytes,[srcLen] NSUInteger srcLen,[destBytes] char *destBytes,[destLen] NSUInteger destLen,[charset] const char *charset,[requirePadding] BOOL requirePadding)" -->
(NSUInteger)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>baseDecode:srcLen:destBytes:destLen:charset:requirePadding:</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Helper for handling Base64 and WebSafeBase64 encodings. </p>
<p>The webSafe methods use different character set and also the results aren't always padded to a multiple of 4 characters. This is done so the resulting data can be used in urls and url query arguments without needing any encoding. You must use the webSafe* methods together, the data does not interop with the RFC methods. </p>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a2b871f1cf6dea4f5d76df9db3e21d5b1"></a><!-- doxytag: member="YAJL_GTMBase64::decodeBytes:length:" ref="a2b871f1cf6dea4f5d76df9db3e21d5b1" args="(const void *bytes,[length] NSUInteger length)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) decodeBytes: </td>
          <td></td>
          <td class="paramtype">(const void *)&nbsp;</td>
          <td class="paramname"> <em>bytes</em></td>
        </tr>
        <tr>
          <td class="paramkey">length:</td>
          <td></td>
          <td class="paramtype">(NSUInteger)&nbsp;</td>
          <td class="paramname"> <em>length</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Base64 decodes the data pointed at by |bytes|. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="ae640116ea8eeb46ac6ed4961af626df6"></a><!-- doxytag: member="YAJL_GTMBase64::decodeData:" ref="ae640116ea8eeb46ac6ed4961af626df6" args="(NSData *data)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) decodeData: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td>
          <td class="paramname"> <em>data</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Base64 decodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the decoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="a52241a9c8d431a73ac3c95b5def7c277"></a><!-- doxytag: member="YAJL_GTMBase64::decodeString:" ref="a52241a9c8d431a73ac3c95b5def7c277" args="(NSString *string)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) decodeString: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td>
          <td class="paramname"> <em>string</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Base64 decodes contents of the <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a>. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the decoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="aa65723f813ed006fd2c8f34f61f18597"></a><!-- doxytag: member="YAJL_GTMBase64::encodeBytes:length:" ref="aa65723f813ed006fd2c8f34f61f18597" args="(const void *bytes,[length] NSUInteger length)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) encodeBytes: </td>
          <td></td>
          <td class="paramtype">(const void *)&nbsp;</td>
          <td class="paramname"> <em>bytes</em></td>
        </tr>
        <tr>
          <td class="paramkey">length:</td>
          <td></td>
          <td class="paramtype">(NSUInteger)&nbsp;</td>
          <td class="paramname"> <em>length</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Base64 encodes the data pointed at by |bytes|. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="affc5e619fd33c272f45a982fc13eff67"></a><!-- doxytag: member="YAJL_GTMBase64::encodeData:" ref="affc5e619fd33c272f45a982fc13eff67" args="(NSData *data)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) encodeData: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td>
          <td class="paramname"> <em>data</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="ac7889e2ba4cdcd420254292b8279d7cb"></a><!-- doxytag: member="YAJL_GTMBase64::stringByEncodingBytes:length:" ref="ac7889e2ba4cdcd420254292b8279d7cb" args="(const void *bytes,[length] NSUInteger length)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_string.php">NSString</a> *) stringByEncodingBytes: </td>
          <td></td>
          <td class="paramtype">(const void *)&nbsp;</td>
          <td class="paramname"> <em>bytes</em></td>
        </tr>
        <tr>
          <td class="paramkey">length:</td>
          <td></td>
          <td class="paramtype">(NSUInteger)&nbsp;</td>
          <td class="paramname"> <em>length</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Base64 encodes the data pointed at by |bytes|. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="ae967ea0a9ad7e59ef54b68a5a7438f02"></a><!-- doxytag: member="YAJL_GTMBase64::stringByEncodingData:" ref="ae967ea0a9ad7e59ef54b68a5a7438f02" args="(NSData *data)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_string.php">NSString</a> *) stringByEncodingData: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td>
          <td class="paramname"> <em>data</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="ae8c8eb21a3110dcd227f13a86bf6255d"></a><!-- doxytag: member="YAJL_GTMBase64::stringByWebSafeEncodingBytes:length:padded:" ref="ae8c8eb21a3110dcd227f13a86bf6255d" args="(const void *bytes,[length] NSUInteger length,[padded] BOOL padded)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_string.php">NSString</a> *) stringByWebSafeEncodingBytes: </td>
          <td></td>
          <td class="paramtype">(const void *)&nbsp;</td>
          <td class="paramname"> <em>bytes</em></td>
        </tr>
        <tr>
          <td class="paramkey">length:</td>
          <td></td>
          <td class="paramtype">(NSUInteger)&nbsp;</td>
          <td class="paramname"> <em>length</em></td>
        </tr>
        <tr>
          <td class="paramkey">padded:</td>
          <td></td>
          <td class="paramtype">(BOOL)&nbsp;</td>
          <td class="paramname"> <em>padded</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>WebSafe Base64 encodes the data pointed at by |bytes|. </p>
<p>If |padded| is YES then padding characters are added so the result length is a multiple of 4. Returns: A new autoreleased <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="a558baaa1970fdcd0c31ff0b250d60845"></a><!-- doxytag: member="YAJL_GTMBase64::stringByWebSafeEncodingData:padded:" ref="a558baaa1970fdcd0c31ff0b250d60845" args="(NSData *data,[padded] BOOL padded)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_string.php">NSString</a> *) stringByWebSafeEncodingData: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td>
          <td class="paramname"> <em>data</em></td>
        </tr>
        <tr>
          <td class="paramkey">padded:</td>
          <td></td>
          <td class="paramtype">(BOOL)&nbsp;</td>
          <td class="paramname"> <em>padded</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>WebSafe Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object. </p>
<p>If |padded| is YES then padding characters are added so the result length is a multiple of 4. Returns: A new autoreleased <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="a20b117eccceced30423df1430764a279"></a><!-- doxytag: member="YAJL_GTMBase64::webSafeDecodeBytes:length:" ref="a20b117eccceced30423df1430764a279" args="(const void *bytes,[length] NSUInteger length)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) webSafeDecodeBytes: </td>
          <td></td>
          <td class="paramtype">(const void *)&nbsp;</td>
          <td class="paramname"> <em>bytes</em></td>
        </tr>
        <tr>
          <td class="paramkey">length:</td>
          <td></td>
          <td class="paramtype">(NSUInteger)&nbsp;</td>
          <td class="paramname"> <em>length</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>WebSafe Base64 decodes the data pointed at by |bytes|. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="a0e04e226419b424b4cbf407891e3896b"></a><!-- doxytag: member="YAJL_GTMBase64::webSafeDecodeData:" ref="a0e04e226419b424b4cbf407891e3896b" args="(NSData *data)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) webSafeDecodeData: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td>
          <td class="paramname"> <em>data</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>WebSafe Base64 decodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the decoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="a66621f8d59760d48e7484cfdf01facbb"></a><!-- doxytag: member="YAJL_GTMBase64::webSafeDecodeString:" ref="a66621f8d59760d48e7484cfdf01facbb" args="(NSString *string)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) webSafeDecodeString: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td>
          <td class="paramname"> <em>string</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>WebSafe Base64 decodes contents of the <a class="el" href="class_n_s_string.php" title="Additions.">NSString</a>. </p>
<p>Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the decoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="a1eeb73c96a41911dc18233949eb855d0"></a><!-- doxytag: member="YAJL_GTMBase64::webSafeEncodeBytes:length:padded:" ref="a1eeb73c96a41911dc18233949eb855d0" args="(const void *bytes,[length] NSUInteger length,[padded] BOOL padded)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) webSafeEncodeBytes: </td>
          <td></td>
          <td class="paramtype">(const void *)&nbsp;</td>
          <td class="paramname"> <em>bytes</em></td>
        </tr>
        <tr>
          <td class="paramkey">length:</td>
          <td></td>
          <td class="paramtype">(NSUInteger)&nbsp;</td>
          <td class="paramname"> <em>length</em></td>
        </tr>
        <tr>
          <td class="paramkey">padded:</td>
          <td></td>
          <td class="paramtype">(BOOL)&nbsp;</td>
          <td class="paramname"> <em>padded</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>WebSafe Base64 encodes the data pointed at by |bytes|. </p>
<p>If |padded| is YES then padding characters are added so the result length is a multiple of 4. Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<a class="anchor" id="ac356135e36f68ffc67e7c39cb2711857"></a><!-- doxytag: member="YAJL_GTMBase64::webSafeEncodeData:padded:" ref="ac356135e36f68ffc67e7c39cb2711857" args="(NSData *data,[padded] BOOL padded)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">+ (<a class="el" href="class_n_s_data.php">NSData</a> *) webSafeEncodeData: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_n_s_data.php">NSData</a> *)&nbsp;</td>
          <td class="paramname"> <em>data</em></td>
        </tr>
        <tr>
          <td class="paramkey">padded:</td>
          <td></td>
          <td class="paramtype">(BOOL)&nbsp;</td>
          <td class="paramname"> <em>padded</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>WebSafe Base64 encodes contents of the <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> object. </p>
<p>If |padded| is YES then padding characters are added so the result length is a multiple of 4. Returns: A new autoreleased <a class="el" href="class_n_s_data.php" title="Additions.">NSData</a> with the encoded payload. nil for any error. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>extThree20JSON/Vendors/YAJL/GTM/<a class="el" href="_g_t_m_base64_8h_source.php">GTMBase64.h</a></li>
<li>extThree20JSON/Vendors/YAJL/GTM/GTMBase64.m</li>
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
