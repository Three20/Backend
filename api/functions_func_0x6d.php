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
<title>Three20 API: Class Members - Functions</title>
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
      <li class="current"><a href="functions.php"><span>Class&nbsp;Members</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="functions.php"><span>All</span></a></li>
      <li class="current"><a href="functions_func.php"><span>Functions</span></a></li>
      <li><a href="functions_vars.php"><span>Variables</span></a></li>
      <li><a href="functions_prop.php"><span>Properties</span></a></li>
    </ul>
  </div>
  <div class="tabs3">
    <ul class="tablist">
      <li><a href="functions_func.php#index_a"><span>a</span></a></li>
      <li><a href="functions_func_0x62.php#index_b"><span>b</span></a></li>
      <li><a href="functions_func_0x63.php#index_c"><span>c</span></a></li>
      <li><a href="functions_func_0x64.php#index_d"><span>d</span></a></li>
      <li><a href="functions_func_0x65.php#index_e"><span>e</span></a></li>
      <li><a href="functions_func_0x66.php#index_f"><span>f</span></a></li>
      <li><a href="functions_func_0x67.php#index_g"><span>g</span></a></li>
      <li><a href="functions_func_0x68.php#index_h"><span>h</span></a></li>
      <li><a href="functions_func_0x69.php#index_i"><span>i</span></a></li>
      <li><a href="functions_func_0x6a.php#index_j"><span>j</span></a></li>
      <li><a href="functions_func_0x6b.php#index_k"><span>k</span></a></li>
      <li><a href="functions_func_0x6c.php#index_l"><span>l</span></a></li>
      <li class="current"><a href="functions_func_0x6d.php#index_m"><span>m</span></a></li>
      <li><a href="functions_func_0x6e.php#index_n"><span>n</span></a></li>
      <li><a href="functions_func_0x6f.php#index_o"><span>o</span></a></li>
      <li><a href="functions_func_0x70.php#index_p"><span>p</span></a></li>
      <li><a href="functions_func_0x72.php#index_r"><span>r</span></a></li>
      <li><a href="functions_func_0x73.php#index_s"><span>s</span></a></li>
      <li><a href="functions_func_0x74.php#index_t"><span>t</span></a></li>
      <li><a href="functions_func_0x75.php#index_u"><span>u</span></a></li>
      <li><a href="functions_func_0x76.php#index_v"><span>v</span></a></li>
      <li><a href="functions_func_0x77.php#index_w"><span>w</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
&nbsp;

<h3><a class="anchor" id="index_m"></a>- m -</h3><ul>
<li>mainQueue
: <a class="el" href="interface_t_t_u_r_l_request_queue.php#a673dea0042c9dabea200b4ec4db4c3ba">TTURLRequestQueue</a>
</li>
<li>messageDidSend
: <a class="el" href="interface_t_t_message_controller.php#a3e9dcb9a2a11041b1694d0da3b135d71">TTMessageController</a>
</li>
<li>messageShouldCancel
: <a class="el" href="interface_t_t_message_controller.php#af47187c50e2e1b382841fa4be783c0ba">TTMessageController</a>
</li>
<li>messageWillSend:
: <a class="el" href="interface_t_t_message_controller.php#ae493ee3a5016a6b30a30bb7c704aac4e">TTMessageController</a>
</li>
<li>messageWillShowRecipientPicker
: <a class="el" href="interface_t_t_message_controller.php#a761a9ceb7a704fbb5e6c902a3faf500c">TTMessageController</a>
</li>
<li>modelDidBeginUpdates:
: <a class="el" href="protocol_t_t_model_delegate-p.php#a58855366f525d711b76767007d99fd43">&lt;TTModelDelegate&gt;</a>
</li>
<li>modelDidChange:
: <a class="el" href="protocol_t_t_model_delegate-p.php#a2f3a9659380ba388b9a475d6761e5143">&lt;TTModelDelegate&gt;</a>
</li>
<li>modelDidEndUpdates:
: <a class="el" href="protocol_t_t_model_delegate-p.php#a3aa2a5802f68a87df0605342d8b4ca7a">&lt;TTModelDelegate&gt;</a>
</li>
<li>moveDataForURL:toURL:
: <a class="el" href="interface_t_t_u_r_l_cache.php#a0b6697a9431b45ca772d63ec92a6916b">TTURLCache</a>
</li>
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
