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
<title>Three20 API: TTModel Class Reference</title>
<link href="http://three20.info/css/reset.css" rel="stylesheet" type="text/css"/>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javaScript" src="search/search.js"></script>
<link href="http://dev.three20.info/css/global.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/article.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/headerbar.css" rel="stylesheet" type="text/css"/> 
<link href="http://dev.three20.info/css/api.css" rel="stylesheet" type="text/css"/>
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
<li><a href="https://www.facebook.com/logout.php?next=http%3A%2F%2Fdev.three20.info%2F&access_token=165692500131929%7C2.cwAeriJtimeS2wNxeTCEqQ__.3600.1298952000-122605446%7C7YjdqHOYyL6MXMHd-udsP0EbTsg" onclick="FB.logout(function() { window.location.reload();}); return false;">Log out</a></li> 
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
<a href="#pro-attribs">Protected Attributes</a>  </div>
  <div class="headertitle">
<h1>TTModel Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTModel" --><!-- doxytag: inherits="NSObject,TTModel-p" -->
<p>A default implementation of <a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> does nothing other than appear to be loaded.  
<a href="#_details">More...</a></p>

<p><code>#import &lt;<a class="el" href="_t_t_model_8h_source.php">TTModel.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for TTModel:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_model.png" usemap="#TTModel_map" alt=""/>
  <map id="TTModel_map" name="TTModel_map">
<area href="class_n_s_object.php" alt="NSObject" shape="rect" coords="0,0,128,24"/>
<area href="protocol_t_t_model-p.php" alt="&lt;TTModel&gt;" shape="rect" coords="138,0,266,24"/>
<area href="interface_t_t_u_r_l_request_model.php" alt="TTURLRequestModel" shape="rect" coords="69,112,197,136"/>
</map>
</div>

<p><a href="class_t_t_model-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab631e110ec681d86158a8895061a5885"></a><!-- doxytag: member="TTModel::didStartLoad" ref="ab631e110ec681d86158a8895061a5885" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#ab631e110ec681d86158a8895061a5885">didStartLoad</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model started to load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="adc24f173e80034b8c27378f95dba5fda"></a><!-- doxytag: member="TTModel::didFinishLoad" ref="adc24f173e80034b8c27378f95dba5fda" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#adc24f173e80034b8c27378f95dba5fda">didFinishLoad</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model finished loading. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab9c90625dc2cd0496a77f4c3a3c6142a"></a><!-- doxytag: member="TTModel::didFailLoadWithError:" ref="ab9c90625dc2cd0496a77f4c3a3c6142a" args="(NSError *error)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#ab9c90625dc2cd0496a77f4c3a3c6142a">didFailLoadWithError:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model failed to load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3e774c650e1106f3a0c281b7021c95d0"></a><!-- doxytag: member="TTModel::didCancelLoad" ref="a3e774c650e1106f3a0c281b7021c95d0" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a3e774c650e1106f3a0c281b7021c95d0">didCancelLoad</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model canceled its load. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aafb43ebb3bfec2f63be76cfeccb6b1e0"></a><!-- doxytag: member="TTModel::beginUpdates" ref="aafb43ebb3bfec2f63be76cfeccb6b1e0" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#aafb43ebb3bfec2f63be76cfeccb6b1e0">beginUpdates</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model has begun making multiple updates. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a72177e30bb905e113450e8ab5183f04a"></a><!-- doxytag: member="TTModel::endUpdates" ref="a72177e30bb905e113450e8ab5183f04a" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a72177e30bb905e113450e8ab5183f04a">endUpdates</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model has completed its updates. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a838de41069159b5af22e3f7b4a6028a6"></a><!-- doxytag: member="TTModel::didUpdateObject:atIndexPath:" ref="a838de41069159b5af22e3f7b4a6028a6" args="(id object,[atIndexPath] NSIndexPath *indexPath)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a838de41069159b5af22e3f7b4a6028a6">didUpdateObject:atIndexPath:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that an object was updated. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a340d54a605f5270d6fabb262c862b6b5"></a><!-- doxytag: member="TTModel::didInsertObject:atIndexPath:" ref="a340d54a605f5270d6fabb262c862b6b5" args="(id object,[atIndexPath] NSIndexPath *indexPath)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#a340d54a605f5270d6fabb262c862b6b5">didInsertObject:atIndexPath:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that an object was inserted. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af1dcd69944ae2470483fd8375e3cc421"></a><!-- doxytag: member="TTModel::didDeleteObject:atIndexPath:" ref="af1dcd69944ae2470483fd8375e3cc421" args="(id object,[atIndexPath] NSIndexPath *indexPath)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#af1dcd69944ae2470483fd8375e3cc421">didDeleteObject:atIndexPath:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that an object was deleted. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ade47f3250e00f0809ca3e7da405bcdf2"></a><!-- doxytag: member="TTModel::didChange" ref="ade47f3250e00f0809ca3e7da405bcdf2" args="()" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="interface_t_t_model.php#ade47f3250e00f0809ca3e7da405bcdf2">didChange</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Notifies delegates that the model changed in some fundamental way. <br/></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2dafdf43691e40159c41e055b777c2da"></a><!-- doxytag: member="TTModel::_delegates" ref="a2dafdf43691e40159c41e055b777c2da" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_delegates</b></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>A default implementation of <a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> does nothing other than appear to be loaded. </p>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20Network/Headers/<a class="el" href="_t_t_model_8h_source.php">TTModel.h</a></li>
<li>Three20Network/Sources/TTModel.m</li>
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
