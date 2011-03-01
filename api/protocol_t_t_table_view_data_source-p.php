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
<title>Three20 API: &lt;TTTableViewDataSource&gt; Protocol Reference</title>
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
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#properties">Properties</a>  </div>
  <div class="headertitle">
<h1>&lt;TTTableViewDataSource&gt; Protocol Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTTableViewDataSource-p" --><!-- doxytag: inherits="TTModel-p" --><div class="dynheader">
Inheritance diagram for &lt;TTTableViewDataSource&gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="protocol_t_t_table_view_data_source-p.png" usemap="#&lt;TTTableViewDataSource&gt;_map" alt=""/>
  <map id="&lt;TTTableViewDataSource&gt;_map" name="&lt;TTTableViewDataSource&gt;_map">
<area href="protocol_t_t_model-p.php" alt="&lt;TTModel&gt;" shape="rect" coords="322,0,527,24"/>
<area href="interface_t_t_table_view_data_source.php" alt="TTTableViewDataSource" shape="rect" coords="322,112,527,136"/>
<area href="interface_t_t_list_data_source.php" alt="TTListDataSource" shape="rect" coords="0,168,205,192"/>
<area href="interface_t_t_sectioned_data_source.php" alt="TTSectionedDataSource" shape="rect" coords="215,168,420,192"/>
<area href="interface_t_t_table_view_interstitial_data_source.php" alt="TTTableViewInterstitialDataSource" shape="rect" coords="430,168,635,192"/>
<area href="interface_t_t_thumbs_data_source.php" alt="TTThumbsDataSource" shape="rect" coords="645,168,850,192"/>
</map>
</div>

<p><a href="protocol_t_t_table_view_data_source-p-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aba12e1d7bef111d6f5956b2fd6759faf"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:objectForRowAtIndexPath:" ref="aba12e1d7bef111d6f5956b2fd6759faf" args="(UITableView *tableView,[objectForRowAtIndexPath] NSIndexPath *indexPath)" -->
(id)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:objectForRowAtIndexPath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac11f86bf7d0d42d5e20b0f89004a4c56"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:cellClassForObject:" ref="ac11f86bf7d0d42d5e20b0f89004a4c56" args="(UITableView *tableView,[cellClassForObject] id object)" -->
(Class)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:cellClassForObject:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac0ee4024f85437dedf7f256e5e00a3ee"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:labelForObject:" ref="ac0ee4024f85437dedf7f256e5e00a3ee" args="(UITableView *tableView,[labelForObject] id object)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:labelForObject:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa5179df0a147ee5170dfa7d5e0b6a996"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:indexPathForObject:" ref="aa5179df0a147ee5170dfa7d5e0b6a996" args="(UITableView *tableView,[indexPathForObject] id object)" -->
(NSIndexPath *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:indexPathForObject:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af066c5f1bf3b623b0bc15d625a3dfefd"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:cell:willAppearAtIndexPath:" ref="af066c5f1bf3b623b0bc15d625a3dfefd" args="(UITableView *tableView,[cell] UITableViewCell *cell,[willAppearAtIndexPath] NSIndexPath *indexPath)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:cell:willAppearAtIndexPath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_table_view_data_source-p.php#a96aa481ecfee16bc78f32bc1ba3128d7">tableViewDidLoadModel:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Informs the data source that its model loaded.  <a href="#a96aa481ecfee16bc78f32bc1ba3128d7"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a432044702db503f758eb6fb93cebd032"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::titleForLoading:" ref="a432044702db503f758eb6fb93cebd032" args="(BOOL reloading)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>titleForLoading:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8d0d695ba46be9c20f58eb4fc3424fb9"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::imageForEmpty" ref="a8d0d695ba46be9c20f58eb4fc3424fb9" args="()" -->
(<a class="el" href="class_u_i_image.php">UIImage</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>imageForEmpty</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5f54b11f92cd485ac5dc4c81c26c978a"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::titleForEmpty" ref="a5f54b11f92cd485ac5dc4c81c26c978a" args="()" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>titleForEmpty</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a712c72db930b723c5bad64cc87b38644"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::subtitleForEmpty" ref="a712c72db930b723c5bad64cc87b38644" args="()" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>subtitleForEmpty</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ab69cea7f2e4c174bd134b82782a523f2"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::imageForError:" ref="ab69cea7f2e4c174bd134b82782a523f2" args="(NSError *error)" -->
(<a class="el" href="class_u_i_image.php">UIImage</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>imageForError:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae950d5e9343de3514b99f7dfcc9c8bca"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::titleForError:" ref="ae950d5e9343de3514b99f7dfcc9c8bca" args="(NSError *error)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>titleForError:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad1326ecafd1eeb59e49ba9257b6b2ff8"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::subtitleForError:" ref="ad1326ecafd1eeb59e49ba9257b6b2ff8" args="(NSError *error)" -->
(<a class="el" href="class_n_s_string.php">NSString</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>subtitleForError:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7a1979c7af6da8c2dc943d3e816a47bc"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:willUpdateObject:atIndexPath:" ref="a7a1979c7af6da8c2dc943d3e816a47bc" args="(UITableView *tableView,[willUpdateObject] id object,[atIndexPath] NSIndexPath *indexPath)" -->
(NSIndexPath *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:willUpdateObject:atIndexPath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a981fc1cae11416c6497002ae4ef903af"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:willInsertObject:atIndexPath:" ref="a981fc1cae11416c6497002ae4ef903af" args="(UITableView *tableView,[willInsertObject] id object,[atIndexPath] NSIndexPath *indexPath)" -->
(NSIndexPath *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:willInsertObject:atIndexPath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a663315fc2c2d144f773d57a16bb001c9"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableView:willRemoveObject:atIndexPath:" ref="a663315fc2c2d144f773d57a16bb001c9" args="(UITableView *tableView,[willRemoveObject] id object,[atIndexPath] NSIndexPath *indexPath)" -->
(NSIndexPath *)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>tableView:willRemoveObject:atIndexPath:</b></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a963c2771674e2dca920685e34fc20cce"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::search:" ref="a963c2771674e2dca920685e34fc20cce" args="(NSString *text)" -->
(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <b>search:</b></td></tr>
<tr><td colspan="2"><h2><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a554b7a403f36a62957d3e7d10b89453e"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::lettersForSectionsWithSearch:summary:" ref="a554b7a403f36a62957d3e7d10b89453e" args="(BOOL search,[summary] BOOL summary)" -->
(<a class="el" href="class_n_s_array.php">NSArray</a> *)&nbsp;</td><td class="memItemRight" valign="bottom">+ <b>lettersForSectionsWithSearch:summary:</b></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
Properties</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aeb1d63fdb51ebb1608817e3d43a64ab6"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::model" ref="aeb1d63fdb51ebb1608817e3d43a64ab6" args="" -->
id&lt; <a class="el" href="interface_t_t_model.php">TTModel</a> &gt;&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="protocol_t_t_table_view_data_source-p.php#aeb1d63fdb51ebb1608817e3d43a64ab6">model</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Optional method to return a model object to delegate the <a class="el" href="interface_t_t_model.php" title="A default implementation of TTModel does nothing other than appear to be loaded.">TTModel</a> protocol to. <br/></td></tr>
</table>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="a96aa481ecfee16bc78f32bc1ba3128d7"></a><!-- doxytag: member="TTTableViewDataSource&#45;p::tableViewDidLoadModel:" ref="a96aa481ecfee16bc78f32bc1ba3128d7" args="(UITableView *tableView)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) tableViewDidLoadModel: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_u_i_table_view.php">UITableView</a> *)&nbsp;</td>
          <td class="paramname"> <em>tableView</em></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Informs the data source that its model loaded. </p>
<p>That would be a good time to prepare the freshly loaded data for use in the table view. </p>

</div>
</div>
<hr/>The documentation for this protocol was generated from the following file:<ul>
<li>Three20UI/Headers/<a class="el" href="_t_t_table_view_data_source_8h_source.php">TTTableViewDataSource.h</a></li>
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
