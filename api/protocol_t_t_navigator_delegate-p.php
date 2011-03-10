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
<title>Three20 API: &lt;TTNavigatorDelegate&gt; Protocol Reference</title>
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
<a href="#pub-methods">Public Member Functions</a>  </div>
  <div class="headertitle">
<h1>&lt;TTNavigatorDelegate&gt; Protocol Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="TTNavigatorDelegate-p" -->
<p><a href="protocol_t_t_navigator_delegate-p-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(BOOL)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_navigator_delegate-p.php#ac204e45ddb34b5383f48facfacf0b800">navigator:shouldOpenURL:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Asks if the URL should be opened and allows the delegate to prevent it.  <a href="#ac204e45ddb34b5383f48facfacf0b800"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(NSURL *)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_navigator_delegate-p.php#a7d91f7752fc517c89b139e1b6bbaec0e">navigator:URLToOpen:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Asks if the URL should be opened and allows the delegate to return a different URL to open instead.  <a href="#a7d91f7752fc517c89b139e1b6bbaec0e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">(void)&nbsp;</td><td class="memItemRight" valign="bottom">- <a class="el" href="protocol_t_t_navigator_delegate-p.php#a0502598c7cebd0b064ae151be2145bfc">navigator:willOpenURL:inViewController:</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">The URL is about to be opened in a controller.  <a href="#a0502598c7cebd0b064ae151be2145bfc"></a><br/></td></tr>
</table>
<hr/><h2>Member Function Documentation</h2>
<a class="anchor" id="ac204e45ddb34b5383f48facfacf0b800"></a><!-- doxytag: member="TTNavigatorDelegate&#45;p::navigator:shouldOpenURL:" ref="ac204e45ddb34b5383f48facfacf0b800" args="(TTBaseNavigator *navigator,[shouldOpenURL] NSURL *URL)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (BOOL) navigator: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_base_navigator.php">TTBaseNavigator</a> *)&nbsp;</td>
          <td class="paramname"> <em>navigator</em></td>
        </tr>
        <tr>
          <td class="paramkey">shouldOpenURL:</td>
          <td></td>
          <td class="paramtype">(NSURL *)&nbsp;</td>
          <td class="paramname"> <em>URL</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td><code> [optional]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Asks if the URL should be opened and allows the delegate to prevent it. </p>
<p>See -navigator:URLToOpen: for a superset of functionality </p>

</div>
</div>
<a class="anchor" id="a7d91f7752fc517c89b139e1b6bbaec0e"></a><!-- doxytag: member="TTNavigatorDelegate&#45;p::navigator:URLToOpen:" ref="a7d91f7752fc517c89b139e1b6bbaec0e" args="(TTBaseNavigator *navigator,[URLToOpen] NSURL *URL)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (NSURL*) navigator: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_base_navigator.php">TTBaseNavigator</a> *)&nbsp;</td>
          <td class="paramname"> <em>navigator</em></td>
        </tr>
        <tr>
          <td class="paramkey">URLToOpen:</td>
          <td></td>
          <td class="paramtype">(NSURL *)&nbsp;</td>
          <td class="paramname"> <em>URL</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td><code> [optional]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Asks if the URL should be opened and allows the delegate to return a different URL to open instead. </p>
<p>A return value of nil indicates the URL should not be opened.</p>
<p>This is a superset of the functionality of -navigator:shouldOpenURL:. Returning YES from that method is equivalent to returning URL from this method. </p>

</div>
</div>
<a class="anchor" id="a0502598c7cebd0b064ae151be2145bfc"></a><!-- doxytag: member="TTNavigatorDelegate&#45;p::navigator:willOpenURL:inViewController:" ref="a0502598c7cebd0b064ae151be2145bfc" args="(TTBaseNavigator *navigator,[willOpenURL] NSURL *URL,[inViewController] UIViewController *controller)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">- (void) navigator: </td>
          <td></td>
          <td class="paramtype">(<a class="el" href="interface_t_t_base_navigator.php">TTBaseNavigator</a> *)&nbsp;</td>
          <td class="paramname"> <em>navigator</em></td>
        </tr>
        <tr>
          <td class="paramkey">willOpenURL:</td>
          <td></td>
          <td class="paramtype">(NSURL *)&nbsp;</td>
          <td class="paramname"> <em>URL</em></td>
        </tr>
        <tr>
          <td class="paramkey">inViewController:</td>
          <td></td>
          <td class="paramtype">(<a class="el" href="class_u_i_view_controller.php">UIViewController</a> *)&nbsp;</td>
          <td class="paramname"> <em>controller</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td><td></td><td><code> [optional]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The URL is about to be opened in a controller. </p>
<p>If the controller argument is nil, the URL is going to be opened externally. </p>

</div>
</div>
<hr/>The documentation for this protocol was generated from the following file:<ul>
<li>Three20UINavigator/Headers/<a class="el" href="_t_t_navigator_delegate_8h_source.php">TTNavigatorDelegate.h</a></li>
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
