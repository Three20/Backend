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
<title>Three20 API: Three20UI/Headers/TTMessageController.h Source File</title>
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
<div class="header">
  <div class="headertitle">
<h1>Three20UI/Headers/TTMessageController.h</h1>  </div>
</div>
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">//</span>
<a name="l00002"></a>00002 <span class="comment">// Copyright 2009-2011 Facebook</span>
<a name="l00003"></a>00003 <span class="comment">//</span>
<a name="l00004"></a>00004 <span class="comment">// Licensed under the Apache License, Version 2.0 (the &quot;License&quot;);</span>
<a name="l00005"></a>00005 <span class="comment">// you may not use this file except in compliance with the License.</span>
<a name="l00006"></a>00006 <span class="comment">// You may obtain a copy of the License at</span>
<a name="l00007"></a>00007 <span class="comment">//</span>
<a name="l00008"></a>00008 <span class="comment">//    http://www.apache.org/licenses/LICENSE-2.0</span>
<a name="l00009"></a>00009 <span class="comment">//</span>
<a name="l00010"></a>00010 <span class="comment">// Unless required by applicable law or agreed to in writing, software</span>
<a name="l00011"></a>00011 <span class="comment">// distributed under the License is distributed on an &quot;AS IS&quot; BASIS,</span>
<a name="l00012"></a>00012 <span class="comment">// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.</span>
<a name="l00013"></a>00013 <span class="comment">// See the License for the specific language governing permissions and</span>
<a name="l00014"></a>00014 <span class="comment">// limitations under the License.</span>
<a name="l00015"></a>00015 <span class="comment">//</span>
<a name="l00016"></a>00016 
<a name="l00017"></a>00017 <span class="comment">// UI</span>
<a name="l00018"></a>00018 <span class="preprocessor">#import &quot;Three20UI/TTViewController.h&quot;</span>
<a name="l00019"></a>00019 <span class="preprocessor">#import &quot;Three20UI/TTTextEditorDelegate.h&quot;</span>
<a name="l00020"></a>00020 
<a name="l00021"></a>00021 <span class="keyword">@protocol </span><a class="code" href="interface_t_t_table_view_data_source.php">TTTableViewDataSource</a>;
<a name="l00022"></a>00022 <span class="keyword">@protocol </span><a class="code" href="protocol_t_t_message_controller_delegate-p.php" title="A protocol for the object that implements the backend logic for the TTMessageController.">TTMessageControllerDelegate</a>;
<a name="l00023"></a>00023 <span class="keyword">@class</span> <a class="code" href="interface_t_t_picker_text_field.php">TTPickerTextField</a>;
<a name="l00024"></a>00024 <span class="keyword">@class</span> <a class="code" href="interface_t_t_activity_label.php">TTActivityLabel</a>;
<a name="l00025"></a>00025 <span class="keyword">@class</span> <a class="code" href="interface_t_t_text_editor.php">TTTextEditor</a>;
<a name="l00026"></a>00026 
<a name="l00041"></a><a class="code" href="interface_t_t_message_controller.php">00041</a> <span class="keyword">@interface </span><a class="code" href="interface_t_t_message_controller.php" title="A view controller for composing email like messages, which is visually similar to Apple&amp;#39;s in-app ...">TTMessageController</a> : <a class="code" href="interface_t_t_view_controller.php" title="A view controller with some useful additions.">TTViewController</a> &lt;UITextFieldDelegate, <a class="code" href="protocol_t_t_text_editor_delegate-p.php">TTTextEditorDelegate</a>&gt; {
<a name="l00042"></a>00042 <span class="keyword">@protected</span>
<a name="l00043"></a>00043   <a class="code" href="class_n_s_array.php" title="Additions.">NSArray</a>*          _fields;
<a name="l00044"></a>00044   <a class="code" href="class_n_s_mutable_array.php" title="Additions.">NSMutableArray</a>*   _fieldViews;
<a name="l00045"></a>00045   UIScrollView*     _scrollView;
<a name="l00046"></a>00046   <a class="code" href="interface_t_t_text_editor.php">TTTextEditor</a>*     _textEditor;
<a name="l00047"></a>00047   <a class="code" href="interface_t_t_activity_label.php">TTActivityLabel</a>*  _activityView;
<a name="l00048"></a>00048   <a class="code" href="class_n_s_array.php" title="Additions.">NSArray</a>*          _initialRecipients;
<a name="l00049"></a>00049 
<a name="l00050"></a>00050   BOOL _showsRecipientPicker;
<a name="l00051"></a>00051   BOOL _isModified;
<a name="l00052"></a>00052   BOOL _requireNonEmptyMessageBody;
<a name="l00053"></a>00053 
<a name="l00054"></a>00054   id&lt;TTTableViewDataSource&gt;       _dataSource;
<a name="l00055"></a>00055   id&lt;TTMessageControllerDelegate&gt; _delegate;
<a name="l00056"></a>00056 }
<a name="l00057"></a>00057 
<a name="l00062"></a><a class="code" href="interface_t_t_message_controller.php#a8cf1658e4a2cdbe7dc72f1c0e9e6b2ed">00062</a> @property (nonatomic, assign) id&lt;<a class="code" href="protocol_t_t_message_controller_delegate-p.php" title="A protocol for the object that implements the backend logic for the TTMessageController.">TTMessageControllerDelegate</a>&gt; delegate;
<a name="l00063"></a>00063 
<a name="l00069"></a><a class="code" href="interface_t_t_message_controller.php#a577f1d8cad6e8591a4759f11d36aad2d">00069</a> @property (nonatomic, retain) <span class="keywordtype">id</span>&lt;<a class="code" href="interface_t_t_table_view_data_source.php">TTTableViewDataSource</a>&gt; dataSource;
<a name="l00070"></a>00070 
<a name="l00075"></a><a class="code" href="interface_t_t_message_controller.php#a81c2daf27f3f8f21cecf0a92fa45b1d3">00075</a> @property (nonatomic, copy) <a class="code" href="class_n_s_array.php" title="Additions.">NSArray</a>* fields;
<a name="l00076"></a>00076 
<a name="l00082"></a><a class="code" href="interface_t_t_message_controller.php#a8414169377f297b9fcb41bbc9c0a058d">00082</a> @property (nonatomic, copy) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* subject;
<a name="l00083"></a>00083 
<a name="l00088"></a><a class="code" href="interface_t_t_message_controller.php#a179539948de0b4377b0559e9ef2c57e6">00088</a> @property (nonatomic, copy) <a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>* body;
<a name="l00089"></a>00089 
<a name="l00094"></a><a class="code" href="interface_t_t_message_controller.php#a81e95b4725b4c6ad3bb9a534fa045660">00094</a> @property (nonatomic) BOOL showsRecipientPicker;
<a name="l00095"></a>00095 
<a name="l00101"></a><a class="code" href="interface_t_t_message_controller.php#aa41f369642a1ce1afcfc381972d79d68">00101</a> @property (nonatomic, readonly) BOOL isModified;
<a name="l00102"></a>00102 
<a name="l00109"></a><a class="code" href="interface_t_t_message_controller.php#a59c21173aaf5330e31ba62a8a0f834d5">00109</a> @property (nonatomic) BOOL requireNonEmptyMessageBody;
<a name="l00110"></a>00110 
<a name="l00119"></a>00119 - (<span class="keywordtype">id</span>)initWithRecipients:(<a class="code" href="class_n_s_array.php" title="Additions.">NSArray</a>*)recipients;
<a name="l00120"></a>00120 
<a name="l00131"></a>00131 - (<span class="keywordtype">void</span>)addRecipient:(<span class="keywordtype">id</span>)recipient forFieldAtIndex:(NSUInteger)fieldIndex;
<a name="l00132"></a>00132 
<a name="l00139"></a>00139 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)textForFieldAtIndex:(NSUInteger)fieldIndex;
<a name="l00140"></a>00140 
<a name="l00145"></a>00145 - (<span class="keywordtype">void</span>)setText:(<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)text forFieldAtIndex:(NSUInteger)fieldIndex;
<a name="l00146"></a>00146 
<a name="l00152"></a>00152 - (BOOL)fieldHasValueAtIndex:(NSUInteger)fieldIndex;
<a name="l00153"></a>00153 
<a name="l00158"></a>00158 - (<a class="code" href="class_u_i_view.php" title="Additions.">UIView</a>*)viewForFieldAtIndex:(NSUInteger)fieldIndex;
<a name="l00159"></a>00159 
<a name="l00165"></a>00165 - (<span class="keywordtype">void</span>)showActivityView:(BOOL)show;
<a name="l00166"></a>00166 
<a name="l00172"></a>00172 - (<a class="code" href="class_n_s_string.php" title="Additions.">NSString</a>*)titleForSending;
<a name="l00173"></a>00173 
<a name="l00177"></a>00177 - (<span class="keywordtype">void</span>)send;
<a name="l00178"></a>00178 
<a name="l00182"></a>00182 - (<span class="keywordtype">void</span>)cancel:(BOOL)confirmIfNecessary;
<a name="l00183"></a>00183 
<a name="l00187"></a>00187 - (<span class="keywordtype">void</span>)confirmCancellation;
<a name="l00188"></a>00188 
<a name="l00193"></a>00193 - (<span class="keywordtype">void</span>)messageWillSend:(<a class="code" href="class_n_s_array.php" title="Additions.">NSArray</a>*)fields;
<a name="l00194"></a>00194 
<a name="l00199"></a>00199 - (<span class="keywordtype">void</span>)messageWillShowRecipientPicker;
<a name="l00200"></a>00200 
<a name="l00205"></a>00205 - (<span class="keywordtype">void</span>)messageDidSend;
<a name="l00206"></a>00206 
<a name="l00213"></a>00213 - (BOOL)messageShouldCancel;
<a name="l00214"></a>00214 
<a name="l00215"></a>00215 @end
</pre></div></div>
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
