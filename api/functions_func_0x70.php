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
      <li><a href="functions_func_0x6d.php#index_m"><span>m</span></a></li>
      <li><a href="functions_func_0x6e.php#index_n"><span>n</span></a></li>
      <li><a href="functions_func_0x6f.php#index_o"><span>o</span></a></li>
      <li class="current"><a href="functions_func_0x70.php#index_p"><span>p</span></a></li>
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

<h3><a class="anchor" id="index_p"></a>- p -</h3><ul>
<li>parse:
: <a class="el" href="interface_y_a_j_l_parser.php#a70ed47dee24d12e07e136413fffd4cdc">YAJLParser</a>
, <a class="el" href="interface_t_t_markup_stripper.php#ab0da319fbd05ae953f41f91f0440473d">TTMarkupStripper</a>
</li>
<li>parse:error:
: <a class="el" href="interface_y_a_j_l_document.php#a535595df957db118207836ca5217509f">YAJLDocument</a>
</li>
<li>parser:didAdd:
: <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php#a2f554ab453f9108c0c046a9ad5b2034d">&lt;YAJLParserDelegate&gt;</a>
</li>
<li>parser:didMapKey:
: <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php#a9ad90afbda4e77208c1e61fc2a7175fe">&lt;YAJLParserDelegate&gt;</a>
</li>
<li>parserDidEndArray:
: <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php#a2e07bb4fac65e5b329786b6f08efbddc">&lt;YAJLParserDelegate&gt;</a>
</li>
<li>parserDidEndDictionary:
: <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php#a24e62f45b73eb271dc0744b6787992ba">&lt;YAJLParserDelegate&gt;</a>
</li>
<li>parserDidStartArray:
: <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php#ab28667c43cd21dee7500ed3f44137fd2">&lt;YAJLParserDelegate&gt;</a>
</li>
<li>parserDidStartDictionary:
: <a class="el" href="protocol_y_a_j_l_parser_delegate-p.php#a68176263236a3ff3f7578816d0ec9e0d">&lt;YAJLParserDelegate&gt;</a>
</li>
<li>pathForObject:
: <a class="el" href="interface_t_t_base_navigator.php#ada711e28c02762b11d133f495f7a1c36">TTBaseNavigator</a>
</li>
<li>persistController:path:
: <a class="el" href="interface_t_t_base_navigator.php#a9070bac173ad1468315a77e8596d85f5">TTBaseNavigator</a>
</li>
<li>persistViewControllers
: <a class="el" href="interface_t_t_base_navigator.php#ad4c27d2bff652889d9a7e3aec2d5cb76">TTBaseNavigator</a>
</li>
<li>popViewControllerAnimatedWithTransition:
: <a class="el" href="interface_t_t_navigation_controller.php#a7663ce10820624ba5f2a25265aced5e9">TTNavigationController</a>
, <a class="el" href="interface_t_t_base_navigation_controller.php#a9bd38095a492a2f6fcb4b3a92a6e0c6e">TTBaseNavigationController</a>
</li>
<li>post
: <a class="el" href="interface_t_t_text_bar_controller.php#ad0cade3c79264ae3b9047cedefad5c98">TTTextBarController</a>
, <a class="el" href="interface_t_t_post_controller.php#a86239ec0d50d1373dad64b1a6f852b47">TTPostController</a>
</li>
<li>postController:didPostText:withResult:
: <a class="el" href="protocol_t_t_post_controller_delegate-p.php#aed11cf1f3285bd2b798f9d0bba992c56">&lt;TTPostControllerDelegate&gt;</a>
</li>
<li>postController:willAnimateTowards:
: <a class="el" href="protocol_t_t_post_controller_delegate-p.php#aa514ef65b514deb575c358257ad605f0">&lt;TTPostControllerDelegate&gt;</a>
</li>
<li>postController:willPostText:
: <a class="el" href="protocol_t_t_post_controller_delegate-p.php#ada7cac9f62ccac0f51b15495458e32ad">&lt;TTPostControllerDelegate&gt;</a>
</li>
<li>postControllerDidCancel:
: <a class="el" href="protocol_t_t_post_controller_delegate-p.php#aa3fa7d8aba4a4164e7fe3632a19c5dd7">&lt;TTPostControllerDelegate&gt;</a>
</li>
<li>pushAnimationDidStop
: <a class="el" href="interface_t_t_base_navigation_controller.php#a6a2974577c2fc979776792bd942e9987">TTBaseNavigationController</a>
</li>
<li>pushViewController:animatedWithTransition:
: <a class="el" href="interface_t_t_navigation_controller.php#a4b0ae106e2917b00533851217d402d20">TTNavigationController</a>
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
