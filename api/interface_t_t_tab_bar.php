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
<title>Three20 API: TTTabBar Class Reference</title>
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>TTTabBar Class Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTTabBar" --><!-- doxytag: inherits="TTView" --><div class="dynheader">
Inheritance diagram for TTTabBar:</div>
<div class="dyncontent">
 <div class="center">
  <img src="interface_t_t_tab_bar.png" usemap="#TTTabBar_map" alt=""/>
  <map id="TTTabBar_map" name="TTTabBar_map">
<area href="interface_t_t_view.php" alt="TTView" shape="rect" coords="64,56,182,80"/>
<area href="class_u_i_view.php" alt="UIView" shape="rect" coords="0,0,118,24"/>
<area href="protocol_t_t_style_delegate-p.php" alt="&lt;TTStyleDelegate&gt;" shape="rect" coords="128,0,246,24"/>
<area href="interface_t_t_tab_grid.php" alt="TTTabGrid" shape="rect" coords="0,168,118,192"/>
<area href="interface_t_t_tab_strip.php" alt="TTTabStrip" shape="rect" coords="128,168,246,192"/>
</map>
</div>

<p><a href="class_t_t_tab_bar-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af60c66bc1ad0a8dbabc66d1923fd1e67"></a><!-- doxytag: member="TTTabBar::initWithFrame:" ref="af60c66bc1ad0a8dbabc66d1923fd1e67" args="(CGRect frame)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>initWithFrame:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3fdf83c25f6a034ef72155a4417ae2c7"></a><!-- doxytag: member="TTTabBar::showTabAtIndex:" ref="a3fdf83c25f6a034ef72155a4417ae2c7" args="(NSInteger tabIndex)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>showTabAtIndex:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae989d5ec06207c9c0e4443ed3f92a334"></a><!-- doxytag: member="TTTabBar::hideTabAtIndex:" ref="ae989d5ec06207c9c0e4443ed3f92a334" args="(NSInteger tabIndex)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>hideTabAtIndex:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aba6dab8bd5c1b6a5807dee1b3f1b03fe"></a><!-- doxytag: member="TTTabBar::layoutTabs" ref="aba6dab8bd5c1b6a5807dee1b3f1b03fe" args="()" -->
(CGSize)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>layoutTabs</b></td></tr>
<tr><td colspan="2"><h2><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8c188157189d7c9683668cdd4174bdd5"></a><!-- doxytag: member="TTTabBar::_tabStyle" ref="a8c188157189d7c9683668cdd4174bdd5" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_tabStyle</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0b94de68a69b12018af313a4ec9eb648"></a><!-- doxytag: member="TTTabBar::_selectedTabIndex" ref="a0b94de68a69b12018af313a4ec9eb648" args="" -->
NSInteger&nbsp;</td><td class="memItemRight" valign="bottom"><b>_selectedTabIndex</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac5542f82f20db54bdb067c722d612700"></a><!-- doxytag: member="TTTabBar::_tabItems" ref="ac5542f82f20db54bdb067c722d612700" args="" -->
<a class="el" href="class_n_s_array.php">NSArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_tabItems</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3cdcaafd96265e3320b50cfe180be47b"></a><!-- doxytag: member="TTTabBar::_tabViews" ref="a3cdcaafd96265e3320b50cfe180be47b" args="" -->
<a class="el" href="class_n_s_mutable_array.php">NSMutableArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>_tabViews</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a04468fd8feff612e3b65b26fa01c66c7"></a><!-- doxytag: member="TTTabBar::_delegate" ref="a04468fd8feff612e3b65b26fa01c66c7" args="" -->
id&lt; <a class="el" href="protocol_t_t_tab_delegate-p.php">TTTabDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>_delegate</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2c3e1cdc292cb49ff06809ff122bbeac"></a><!-- doxytag: member="TTTabBar::tabStyle" ref="a2c3e1cdc292cb49ff06809ff122bbeac" args="" -->
<a class="el" href="class_n_s_string.php">NSString</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>tabStyle</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a07934e4dc1ca33e0fc19d22fbc768b1b"></a><!-- doxytag: member="TTTabBar::selectedTabItem" ref="a07934e4dc1ca33e0fc19d22fbc768b1b" args="" -->
<a class="el" href="interface_t_t_tab_item.php">TTTabItem</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>selectedTabItem</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a0c0738e623416b0e6d90906da55c26f2"></a><!-- doxytag: member="TTTabBar::selectedTabView" ref="a0c0738e623416b0e6d90906da55c26f2" args="" -->
<a class="el" href="interface_t_t_tab.php">TTTab</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>selectedTabView</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a1f8fb2c3764af42e39af69fdcf4ded6e"></a><!-- doxytag: member="TTTabBar::selectedTabIndex" ref="a1f8fb2c3764af42e39af69fdcf4ded6e" args="" -->
NSInteger&nbsp;</td><td class="memItemRight" valign="bottom"><b>selectedTabIndex</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aceecdf8e3676a84b08ba1864ce21387b"></a><!-- doxytag: member="TTTabBar::tabItems" ref="aceecdf8e3676a84b08ba1864ce21387b" args="" -->
<a class="el" href="class_n_s_array.php">NSArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>tabItems</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af7046ca3df14c3e831d57ed4552bf428"></a><!-- doxytag: member="TTTabBar::tabViews" ref="af7046ca3df14c3e831d57ed4552bf428" args="" -->
<a class="el" href="class_n_s_array.php">NSArray</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><b>tabViews</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="afde6b7aedd8d28bdd6b80ab02725894c"></a><!-- doxytag: member="TTTabBar::delegate" ref="afde6b7aedd8d28bdd6b80ab02725894c" args="" -->
id&lt; <a class="el" href="protocol_t_t_tab_delegate-p.php">TTTabDelegate</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><b>delegate</b></td></tr>
</table>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_tab_bar_8h_source.php">TTTabBar.h</a></li>
<li>Three20UI/Sources/TTTabBar.m</li>
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
