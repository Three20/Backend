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
  <title>Three20: extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_parse.h File Reference</title>
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
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>File&nbsp;Members</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_parse.h File Reference</h1>  </div>
</div>
<div class="contents">

<p>Interface to YAJL's JSON parsing facilities.  
<a href="#_details">More...</a></p>
<code>#include &quot;yajl_common.h&quot;</code><br/>

<p><a href="yajl__parse_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structyajl__callbacks.php">yajl_callbacks</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">yajl is an event driven parser.  <a href="structyajl__callbacks.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structyajl__parser__config.php">yajl_parser_config</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">configuration structure for the generator  <a href="structyajl__parser__config.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acb85b92f3d7cb6f0743b4e68d0172323"></a><!-- doxytag: member="yajl_parse.h::yajl_handle" ref="acb85b92f3d7cb6f0743b4e68d0172323" args="" -->
typedef struct <a class="el" href="structyajl__handle__t.php">yajl_handle_t</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#acb85b92f3d7cb6f0743b4e68d0172323">yajl_handle</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">an opaque handle to a parser <br/></td></tr>
<tr><td colspan="2"><h2><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">yajl_status</a> { <a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7da67a2a1b5d684de357adb0e1ea444ffd7">yajl_status_ok</a>, 
<a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7da44d6b8f18ecb5e30be3eb5b2f1f5717e">yajl_status_client_canceled</a>, 
<a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7da88c7cd7b308d09c32dad74b47b9ae3f4">yajl_status_insufficient_data</a>, 
<a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7daeea581fa9c967d34ad5f062ef59718fd">yajl_status_error</a>
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>error codes returned from this interface </p>
 <a href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae00bd26f1b98a1ed5c86a4480e7782aa"></a><!-- doxytag: member="yajl_parse.h::yajl_status_to_string" ref="ae00bd26f1b98a1ed5c86a4480e7782aa" args="(yajl_status code)" -->
YAJL_API const char *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#ae00bd26f1b98a1ed5c86a4480e7782aa">yajl_status_to_string</a> (<a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">yajl_status</a> code)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">attain a human readable, english, string for an error <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API <a class="el" href="structyajl__handle__t.php">yajl_handle</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#ac5b76bd2683e48ea5cb97376a62bba46">yajl_alloc</a> (const <a class="el" href="structyajl__callbacks.php">yajl_callbacks</a> *callbacks, const <a class="el" href="structyajl__parser__config.php">yajl_parser_config</a> *config, const <a class="el" href="structyajl__alloc__funcs.php">yajl_alloc_funcs</a> *allocFuncs, void *ctx)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">allocate a parser handle  <a href="#ac5b76bd2683e48ea5cb97376a62bba46"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9fc930b29358ec1e04bda35d8b73422e"></a><!-- doxytag: member="yajl_parse.h::yajl_free" ref="a9fc930b29358ec1e04bda35d8b73422e" args="(yajl_handle handle)" -->
YAJL_API void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#a9fc930b29358ec1e04bda35d8b73422e">yajl_free</a> (<a class="el" href="structyajl__handle__t.php">yajl_handle</a> handle)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">free a parser handle <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API <a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">yajl_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#a6c05371a1532ade860db8b1ef8d31a61">yajl_parse</a> (<a class="el" href="structyajl__handle__t.php">yajl_handle</a> hand, const unsigned char *jsonText, unsigned int jsonTextLength)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Parse some json!  <a href="#a6c05371a1532ade860db8b1ef8d31a61"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API <a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">yajl_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#acb0e5421a4bc2e9b9626f0514f11547f">yajl_parse_complete</a> (<a class="el" href="structyajl__handle__t.php">yajl_handle</a> hand)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Parse any remaining buffered json.  <a href="#acb0e5421a4bc2e9b9626f0514f11547f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API unsigned char *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#aa4f26259fea6bb058b17828598532198">yajl_get_error</a> (<a class="el" href="structyajl__handle__t.php">yajl_handle</a> hand, int verbose, const unsigned char *jsonText, unsigned int jsonTextLength)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">get an error string describing the state of the parse.  <a href="#aa4f26259fea6bb058b17828598532198"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API unsigned int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#a341ea0f4cf8a70dc04c72a6256568b69">yajl_get_bytes_consumed</a> (<a class="el" href="structyajl__handle__t.php">yajl_handle</a> hand)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">get the amount of data consumed from the last chunk passed to YAJL.  <a href="#a341ea0f4cf8a70dc04c72a6256568b69"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a12b6514e18f78fab0825b71465d511ea"></a><!-- doxytag: member="yajl_parse.h::yajl_free_error" ref="a12b6514e18f78fab0825b71465d511ea" args="(yajl_handle hand, unsigned char *str)" -->
YAJL_API void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__parse_8h.php#a12b6514e18f78fab0825b71465d511ea">yajl_free_error</a> (<a class="el" href="structyajl__handle__t.php">yajl_handle</a> hand, unsigned char *str)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">free an error returned from yajl_get_error <br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Interface to YAJL's JSON parsing facilities. </p>
<hr/><h2>Enumeration Type Documentation</h2>
<a class="anchor" id="a1d2bc7f4962c55436daaba61ffaf1f7d"></a><!-- doxytag: member="yajl_parse.h::yajl_status" ref="a1d2bc7f4962c55436daaba61ffaf1f7d" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">yajl_status</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>error codes returned from this interface </p>
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="a1d2bc7f4962c55436daaba61ffaf1f7da67a2a1b5d684de357adb0e1ea444ffd7"></a><!-- doxytag: member="yajl_status_ok" ref="a1d2bc7f4962c55436daaba61ffaf1f7da67a2a1b5d684de357adb0e1ea444ffd7" args="" -->yajl_status_ok</em>&nbsp;</td><td>
<p>no error was encountered </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="a1d2bc7f4962c55436daaba61ffaf1f7da44d6b8f18ecb5e30be3eb5b2f1f5717e"></a><!-- doxytag: member="yajl_status_client_canceled" ref="a1d2bc7f4962c55436daaba61ffaf1f7da44d6b8f18ecb5e30be3eb5b2f1f5717e" args="" -->yajl_status_client_canceled</em>&nbsp;</td><td>
<p>a client callback returned zero, stopping the parse </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="a1d2bc7f4962c55436daaba61ffaf1f7da88c7cd7b308d09c32dad74b47b9ae3f4"></a><!-- doxytag: member="yajl_status_insufficient_data" ref="a1d2bc7f4962c55436daaba61ffaf1f7da88c7cd7b308d09c32dad74b47b9ae3f4" args="" -->yajl_status_insufficient_data</em>&nbsp;</td><td>
<p>The parse cannot yet complete because more json input text is required, call yajl_parse with the next buffer of input text. </p>
<p>(pertinent only when stream parsing) </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="a1d2bc7f4962c55436daaba61ffaf1f7daeea581fa9c967d34ad5f062ef59718fd"></a><!-- doxytag: member="yajl_status_error" ref="a1d2bc7f4962c55436daaba61ffaf1f7daeea581fa9c967d34ad5f062ef59718fd" args="" -->yajl_status_error</em>&nbsp;</td><td>
<p>An error occured during the parse. </p>
<p>Call yajl_get_error for more information about the encountered error </p>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ac5b76bd2683e48ea5cb97376a62bba46"></a><!-- doxytag: member="yajl_parse.h::yajl_alloc" ref="ac5b76bd2683e48ea5cb97376a62bba46" args="(const yajl_callbacks *callbacks, const yajl_parser_config *config, const yajl_alloc_funcs *allocFuncs, void *ctx)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API <a class="el" href="structyajl__handle__t.php">yajl_handle</a> yajl_alloc </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="structyajl__callbacks.php">yajl_callbacks</a> *&nbsp;</td>
          <td class="paramname"> <em>callbacks</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="structyajl__parser__config.php">yajl_parser_config</a> *&nbsp;</td>
          <td class="paramname"> <em>config</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="structyajl__alloc__funcs.php">yajl_alloc_funcs</a> *&nbsp;</td>
          <td class="paramname"> <em>allocFuncs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">void *&nbsp;</td>
          <td class="paramname"> <em>ctx</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>allocate a parser handle </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>callbacks</em>&nbsp;</td><td>a yajl callbacks structure specifying the functions to call when different JSON entities are encountered in the input text. May be NULL, which is only useful for validation. </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>config</em>&nbsp;</td><td>configuration parameters for the parse. </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>ctx</em>&nbsp;</td><td>a context pointer that will be passed to callbacks. </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a341ea0f4cf8a70dc04c72a6256568b69"></a><!-- doxytag: member="yajl_parse.h::yajl_get_bytes_consumed" ref="a341ea0f4cf8a70dc04c72a6256568b69" args="(yajl_handle hand)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API unsigned int yajl_get_bytes_consumed </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="structyajl__handle__t.php">yajl_handle</a>&nbsp;</td>
          <td class="paramname"> <em>hand</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>get the amount of data consumed from the last chunk passed to YAJL. </p>
<p>In the case of a successful parse this can help you understand if the entire buffer was consumed (which will allow you to handle "junk at end of input".</p>
<p>In the event an error is encountered during parsing, this function affords the client a way to get the offset into the most recent chunk where the error occured. 0 will be returned if no error was encountered. </p>

</div>
</div>
<a class="anchor" id="aa4f26259fea6bb058b17828598532198"></a><!-- doxytag: member="yajl_parse.h::yajl_get_error" ref="aa4f26259fea6bb058b17828598532198" args="(yajl_handle hand, int verbose, const unsigned char *jsonText, unsigned int jsonTextLength)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API unsigned char* yajl_get_error </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="structyajl__handle__t.php">yajl_handle</a>&nbsp;</td>
          <td class="paramname"> <em>hand</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>verbose</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const unsigned char *&nbsp;</td>
          <td class="paramname"> <em>jsonText</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&nbsp;</td>
          <td class="paramname"> <em>jsonTextLength</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>get an error string describing the state of the parse. </p>
<p>If verbose is non-zero, the message will include the JSON text where the error occured, along with an arrow pointing to the specific char.</p>
<dl class="return"><dt><b>Returns:</b></dt><dd>A dynamically allocated string will be returned which should be freed with yajl_free_error </dd></dl>

</div>
</div>
<a class="anchor" id="a6c05371a1532ade860db8b1ef8d31a61"></a><!-- doxytag: member="yajl_parse.h::yajl_parse" ref="a6c05371a1532ade860db8b1ef8d31a61" args="(yajl_handle hand, const unsigned char *jsonText, unsigned int jsonTextLength)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API <a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">yajl_status</a> yajl_parse </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="structyajl__handle__t.php">yajl_handle</a>&nbsp;</td>
          <td class="paramname"> <em>hand</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const unsigned char *&nbsp;</td>
          <td class="paramname"> <em>jsonText</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&nbsp;</td>
          <td class="paramname"> <em>jsonTextLength</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Parse some json! </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>hand</em>&nbsp;</td><td>- a handle to the json parser allocated with yajl_alloc </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>jsonText</em>&nbsp;</td><td>- a pointer to the UTF8 json text to be parsed </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>jsonTextLength</em>&nbsp;</td><td>- the length, in bytes, of input text </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="acb0e5421a4bc2e9b9626f0514f11547f"></a><!-- doxytag: member="yajl_parse.h::yajl_parse_complete" ref="acb0e5421a4bc2e9b9626f0514f11547f" args="(yajl_handle hand)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API <a class="el" href="yajl__parse_8h.php#a1d2bc7f4962c55436daaba61ffaf1f7d">yajl_status</a> yajl_parse_complete </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="structyajl__handle__t.php">yajl_handle</a>&nbsp;</td>
          <td class="paramname"> <em>hand</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Parse any remaining buffered json. </p>
<p>Since yajl is a stream-based parser, without an explicit end of input, yajl sometimes can't decide if content at the end of the stream is valid or not. For example, if "1" has been fed in, yajl can't know whether another digit is next or some character that would terminate the integer token.</p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>hand</em>&nbsp;</td><td>- a handle to the json parser allocated with yajl_alloc </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
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
