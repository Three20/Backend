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
  <title>Three20: extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_gen.h File Reference</title>
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
<a href="#define-members">Defines</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>extThree20JSON/Vendors/YAJL/yajl-1.0.9/src/api/yajl_gen.h File Reference</h1>  </div>
</div>
<div class="contents">

<p>Interface to YAJL's JSON generation facilities.  
<a href="#_details">More...</a></p>
<code>#include &quot;yajl_common.h&quot;</code><br/>

<p><a href="yajl__gen_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structyajl__gen__config.php">yajl_gen_config</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">configuration structure for the generator  <a href="structyajl__gen__config.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a497f7224309c1a0118f40c87e3fd3f65"></a><!-- doxytag: member="yajl_gen.h::yajl_gen" ref="a497f7224309c1a0118f40c87e3fd3f65" args="" -->
typedef struct yajl_gen_t *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">an opaque handle to a generator <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef void(*&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#ab5ce9d34211be4fe3f05db71182f3b63">yajl_print_t</a> )(void *ctx, const char *str, unsigned int len)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">a callback used for "printing" the results.  <a href="#ab5ce9d34211be4fe3f05db71182f3b63"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a> { <br/>
&nbsp;&nbsp;<a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa457aa396721f15a7cf34508bf00e22d7">yajl_gen_status_ok</a> =  0, 
<a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caacc1716680733d72f34676755cdc4e876">yajl_gen_keys_must_be_strings</a>, 
<a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa2db8bdfc64aab69fe95a33ba76d087e8">yajl_max_depth_exceeded</a>, 
<a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa9ea74847e6d0e91bc7ee544e9851dc18">yajl_gen_in_error_state</a>, 
<br/>
&nbsp;&nbsp;<a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa8274e47b1f4dd68841a67e56868f7bb4">yajl_gen_generation_complete</a>, 
<a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caa870e2d12c18f71a51697ddc4050a1262">yajl_gen_invalid_number</a>, 
<a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63caae50f6bbe222a87d4d202933e5347b0d7">yajl_gen_no_buf</a>
<br/>
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>generator status codes </p>
 <a href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API <a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#a628319aaa1d322ffa97ef5a766303d1b">yajl_gen_alloc</a> (const <a class="el" href="structyajl__gen__config.php">yajl_gen_config</a> *config, const <a class="el" href="structyajl__alloc__funcs.php">yajl_alloc_funcs</a> *allocFuncs)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">allocate a generator handle  <a href="#a628319aaa1d322ffa97ef5a766303d1b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API <a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#a8a149e582257cc0a40db14c96296d1b2">yajl_gen_alloc2</a> (const <a class="el" href="yajl__gen_8h.php#ab5ce9d34211be4fe3f05db71182f3b63">yajl_print_t</a> callback, const <a class="el" href="structyajl__gen__config.php">yajl_gen_config</a> *config, const <a class="el" href="structyajl__alloc__funcs.php">yajl_alloc_funcs</a> *allocFuncs, void *ctx)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">allocate a generator handle that will print to the specified callback rather than storing the results in an internal buffer.  <a href="#a8a149e582257cc0a40db14c96296d1b2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9579c99fb77fb6f607db47de662adc9c"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_free" ref="a9579c99fb77fb6f607db47de662adc9c" args="(yajl_gen handle)" -->
YAJL_API void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#a9579c99fb77fb6f607db47de662adc9c">yajl_gen_free</a> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> handle)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">free a generator handle <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acf28d90964ffe01bb3f0f2e5ed941e54"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_integer" ref="acf28d90964ffe01bb3f0f2e5ed941e54" args="(yajl_gen hand, long int number)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_integer</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand, long int number)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#ab588fa96fd582c3f592923fc0172f17c">yajl_gen_double</a> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand, double number)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">generate a floating point number.  <a href="#ab588fa96fd582c3f592923fc0172f17c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="acc239456e918c2bba77ebbcc11246da4"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_number" ref="acc239456e918c2bba77ebbcc11246da4" args="(yajl_gen hand, const char *num, unsigned int len)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_number</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand, const char *num, unsigned int len)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aae28972365346706ca1d25f2b0677f2b"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_string" ref="aae28972365346706ca1d25f2b0677f2b" args="(yajl_gen hand, const unsigned char *str, unsigned int len)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_string</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand, const unsigned char *str, unsigned int len)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a33ad490ddf9372c0d27d4c32b4b693d2"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_null" ref="a33ad490ddf9372c0d27d4c32b4b693d2" args="(yajl_gen hand)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_null</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9b761fd105b212682de291ca70836f93"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_bool" ref="a9b761fd105b212682de291ca70836f93" args="(yajl_gen hand, int boolean)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_bool</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand, int boolean)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aaaefb19b3b2c96b0d3d0bbf3bc4886b2"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_map_open" ref="aaaefb19b3b2c96b0d3d0bbf3bc4886b2" args="(yajl_gen hand)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_map_open</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af75cd0ee728dbd835bbbefbcdc923dbe"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_map_close" ref="af75cd0ee728dbd835bbbefbcdc923dbe" args="(yajl_gen hand)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_map_close</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a68f7bc4fbfe8015f590bc284d386bf44"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_array_open" ref="a68f7bc4fbfe8015f590bc284d386bf44" args="(yajl_gen hand)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_array_open</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae3ba7ebfbea5a27f30f4c6c62ddc493b"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_array_close" ref="ae3ba7ebfbea5a27f30f4c6c62ddc493b" args="(yajl_gen hand)" -->
YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><b>yajl_gen_array_close</b> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#a38ab5597a024b05fb6c6564eaaa192ab">yajl_gen_get_buf</a> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand, const unsigned char **buf, unsigned int *len)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">access the null terminated generator buffer.  <a href="#a38ab5597a024b05fb6c6564eaaa192ab"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">YAJL_API void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="yajl__gen_8h.php#a50116818ab3c0f3116e3baff0db2f4ef">yajl_gen_clear</a> (<a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> hand)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">clear yajl's output buffer, but maintain all internal generation state.  <a href="#a50116818ab3c0f3116e3baff0db2f4ef"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Interface to YAJL's JSON generation facilities. </p>
<hr/><h2>Typedef Documentation</h2>
<a class="anchor" id="ab5ce9d34211be4fe3f05db71182f3b63"></a><!-- doxytag: member="yajl_gen.h::yajl_print_t" ref="ab5ce9d34211be4fe3f05db71182f3b63" args=")(void *ctx, const char *str, unsigned int len)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef void(* <a class="el" href="yajl__gen_8h.php#ab5ce9d34211be4fe3f05db71182f3b63">yajl_print_t</a>)(void *ctx, const char *str, unsigned int len)</td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>a callback used for "printing" the results. </p>

</div>
</div>
<hr/><h2>Enumeration Type Documentation</h2>
<a class="anchor" id="aff033c27f29817c1fc794a16197f63ca"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_status" ref="aff033c27f29817c1fc794a16197f63ca" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>generator status codes </p>
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="aff033c27f29817c1fc794a16197f63caa457aa396721f15a7cf34508bf00e22d7"></a><!-- doxytag: member="yajl_gen_status_ok" ref="aff033c27f29817c1fc794a16197f63caa457aa396721f15a7cf34508bf00e22d7" args="" -->yajl_gen_status_ok</em>&nbsp;</td><td>
<p>no error </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="aff033c27f29817c1fc794a16197f63caacc1716680733d72f34676755cdc4e876"></a><!-- doxytag: member="yajl_gen_keys_must_be_strings" ref="aff033c27f29817c1fc794a16197f63caacc1716680733d72f34676755cdc4e876" args="" -->yajl_gen_keys_must_be_strings</em>&nbsp;</td><td>
<p>at a point where a map key is generated, a function other than yajl_gen_string was called </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="aff033c27f29817c1fc794a16197f63caa2db8bdfc64aab69fe95a33ba76d087e8"></a><!-- doxytag: member="yajl_max_depth_exceeded" ref="aff033c27f29817c1fc794a16197f63caa2db8bdfc64aab69fe95a33ba76d087e8" args="" -->yajl_max_depth_exceeded</em>&nbsp;</td><td>
<p>YAJL's maximum generation depth was exceeded. </p>
<p>see YAJL_MAX_DEPTH </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="aff033c27f29817c1fc794a16197f63caa9ea74847e6d0e91bc7ee544e9851dc18"></a><!-- doxytag: member="yajl_gen_in_error_state" ref="aff033c27f29817c1fc794a16197f63caa9ea74847e6d0e91bc7ee544e9851dc18" args="" -->yajl_gen_in_error_state</em>&nbsp;</td><td>
<p>A generator function (yajl_gen_XXX) was called while in an error state. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="aff033c27f29817c1fc794a16197f63caa8274e47b1f4dd68841a67e56868f7bb4"></a><!-- doxytag: member="yajl_gen_generation_complete" ref="aff033c27f29817c1fc794a16197f63caa8274e47b1f4dd68841a67e56868f7bb4" args="" -->yajl_gen_generation_complete</em>&nbsp;</td><td>
<p>A complete JSON document has been generated. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="aff033c27f29817c1fc794a16197f63caa870e2d12c18f71a51697ddc4050a1262"></a><!-- doxytag: member="yajl_gen_invalid_number" ref="aff033c27f29817c1fc794a16197f63caa870e2d12c18f71a51697ddc4050a1262" args="" -->yajl_gen_invalid_number</em>&nbsp;</td><td>
<p>yajl_gen_double was passed an invalid floating point value (infinity or NaN). </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="aff033c27f29817c1fc794a16197f63caae50f6bbe222a87d4d202933e5347b0d7"></a><!-- doxytag: member="yajl_gen_no_buf" ref="aff033c27f29817c1fc794a16197f63caae50f6bbe222a87d4d202933e5347b0d7" args="" -->yajl_gen_no_buf</em>&nbsp;</td><td>
<p>A print callback was passed in, so there is no internal buffer to get from. </p>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="a628319aaa1d322ffa97ef5a766303d1b"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_alloc" ref="a628319aaa1d322ffa97ef5a766303d1b" args="(const yajl_gen_config *config, const yajl_alloc_funcs *allocFuncs)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API <a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> yajl_gen_alloc </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="structyajl__gen__config.php">yajl_gen_config</a> *&nbsp;</td>
          <td class="paramname"> <em>config</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="structyajl__alloc__funcs.php">yajl_alloc_funcs</a> *&nbsp;</td>
          <td class="paramname"> <em>allocFuncs</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>allocate a generator handle </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>config</em>&nbsp;</td><td>a pointer to a structure containing parameters which configure the behavior of the json generator </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>allocFuncs</em>&nbsp;</td><td>an optional pointer to a structure which allows the client to overide the memory allocation used by yajl. May be NULL, in which case malloc/free/realloc will be used.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>Returns:</b></dt><dd>an allocated handle on success, NULL on failure (bad params) </dd></dl>

</div>
</div>
<a class="anchor" id="a8a149e582257cc0a40db14c96296d1b2"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_alloc2" ref="a8a149e582257cc0a40db14c96296d1b2" args="(const yajl_print_t callback, const yajl_gen_config *config, const yajl_alloc_funcs *allocFuncs, void *ctx)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API <a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a> yajl_gen_alloc2 </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="yajl__gen_8h.php#ab5ce9d34211be4fe3f05db71182f3b63">yajl_print_t</a>&nbsp;</td>
          <td class="paramname"> <em>callback</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="structyajl__gen__config.php">yajl_gen_config</a> *&nbsp;</td>
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

<p>allocate a generator handle that will print to the specified callback rather than storing the results in an internal buffer. </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>callback</em>&nbsp;</td><td>a pointer to a printer function. May be NULL in which case, the results will be store in an internal buffer. </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>config</em>&nbsp;</td><td>a pointer to a structure containing parameters which configure the behavior of the json generator. </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>allocFuncs</em>&nbsp;</td><td>an optional pointer to a structure which allows the client to overide the memory allocation used by yajl. May be NULL, in which case malloc/free/realloc will be used. </td></tr>
    <tr><td valign="top"></td><td valign="top"><em>ctx</em>&nbsp;</td><td>a context pointer that will be passed to the printer callback.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>Returns:</b></dt><dd>an allocated handle on success, NULL on failure (bad params) </dd></dl>

</div>
</div>
<a class="anchor" id="a50116818ab3c0f3116e3baff0db2f4ef"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_clear" ref="a50116818ab3c0f3116e3baff0db2f4ef" args="(yajl_gen hand)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API void yajl_gen_clear </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a>&nbsp;</td>
          <td class="paramname"> <em>hand</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>clear yajl's output buffer, but maintain all internal generation state. </p>
<p>This function will not "reset" the generator state, and is intended to enable incremental JSON outputing. </p>

</div>
</div>
<a class="anchor" id="ab588fa96fd582c3f592923fc0172f17c"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_double" ref="ab588fa96fd582c3f592923fc0172f17c" args="(yajl_gen hand, double number)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a> yajl_gen_double </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a>&nbsp;</td>
          <td class="paramname"> <em>hand</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">double&nbsp;</td>
          <td class="paramname"> <em>number</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>generate a floating point number. </p>
<p>number may not be infinity or NaN, as these have no representation in JSON. In these cases the generator will return 'yajl_gen_invalid_number' </p>

</div>
</div>
<a class="anchor" id="a38ab5597a024b05fb6c6564eaaa192ab"></a><!-- doxytag: member="yajl_gen.h::yajl_gen_get_buf" ref="a38ab5597a024b05fb6c6564eaaa192ab" args="(yajl_gen hand, const unsigned char **buf, unsigned int *len)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">YAJL_API <a class="el" href="yajl__gen_8h.php#aff033c27f29817c1fc794a16197f63ca">yajl_gen_status</a> yajl_gen_get_buf </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="yajl__gen_8h.php#a497f7224309c1a0118f40c87e3fd3f65">yajl_gen</a>&nbsp;</td>
          <td class="paramname"> <em>hand</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const unsigned char **&nbsp;</td>
          <td class="paramname"> <em>buf</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int *&nbsp;</td>
          <td class="paramname"> <em>len</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>access the null terminated generator buffer. </p>
<p>If incrementally outputing JSON, one should call yajl_gen_clear to clear the buffer. This allows stream generation. </p>

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
