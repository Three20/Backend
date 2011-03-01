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
<title>Three20 API: Three20UI/Headers/Three20UI.h Source File</title>
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
<h1>Three20UI/Headers/Three20UI.h</h1>  </div>
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
<a name="l00017"></a>00017 <span class="comment">// UI Controllers</span>
<a name="l00018"></a>00018 <span class="preprocessor">#import &quot;Three20UI/TTNavigator.h&quot;</span>
<a name="l00019"></a>00019 <span class="preprocessor">#import &quot;Three20UI/TTViewController.h&quot;</span>
<a name="l00020"></a>00020 <span class="preprocessor">#import &quot;Three20UI/TTSplitViewController.h&quot;</span>
<a name="l00021"></a>00021 <span class="preprocessor">#import &quot;Three20UI/TTNavigationController.h&quot;</span>
<a name="l00022"></a>00022 <span class="preprocessor">#import &quot;Three20UI/TTExtensionsController.h&quot;</span>
<a name="l00023"></a>00023 <span class="preprocessor">#import &quot;Three20UI/TTWebController.h&quot;</span>
<a name="l00024"></a>00024 <span class="preprocessor">#import &quot;Three20UI/TTMessageController.h&quot;</span>
<a name="l00025"></a>00025 <span class="preprocessor">#import &quot;Three20UI/TTMessageControllerDelegate.h&quot;</span>
<a name="l00026"></a>00026 <span class="preprocessor">#import &quot;Three20UI/TTMessageField.h&quot;</span>
<a name="l00027"></a>00027 <span class="preprocessor">#import &quot;Three20UI/TTMessageRecipientField.h&quot;</span>
<a name="l00028"></a>00028 <span class="preprocessor">#import &quot;Three20UI/TTMessageTextField.h&quot;</span>
<a name="l00029"></a>00029 <span class="preprocessor">#import &quot;Three20UI/TTMessageSubjectField.h&quot;</span>
<a name="l00030"></a>00030 <span class="preprocessor">#import &quot;Three20UI/TTAlertViewController.h&quot;</span>
<a name="l00031"></a>00031 <span class="preprocessor">#import &quot;Three20UI/TTAlertViewControllerDelegate.h&quot;</span>
<a name="l00032"></a>00032 <span class="preprocessor">#import &quot;Three20UI/TTActionSheetController.h&quot;</span>
<a name="l00033"></a>00033 <span class="preprocessor">#import &quot;Three20UI/TTActionSheetControllerDelegate.h&quot;</span>
<a name="l00034"></a>00034 <span class="preprocessor">#import &quot;Three20UI/TTPostController.h&quot;</span>
<a name="l00035"></a>00035 <span class="preprocessor">#import &quot;Three20UI/TTPostControllerDelegate.h&quot;</span>
<a name="l00036"></a>00036 <span class="preprocessor">#import &quot;Three20UI/TTTextBarController.h&quot;</span>
<a name="l00037"></a>00037 <span class="preprocessor">#import &quot;Three20UI/TTTextBarDelegate.h&quot;</span>
<a name="l00038"></a>00038 <span class="preprocessor">#import &quot;Three20Network/TTURLCache.h&quot;</span>
<a name="l00039"></a>00039 
<a name="l00040"></a>00040 <span class="comment">// UI Views</span>
<a name="l00041"></a>00041 <span class="preprocessor">#import &quot;Three20UI/TTView.h&quot;</span>
<a name="l00042"></a>00042 <span class="preprocessor">#import &quot;Three20UI/TTImageView.h&quot;</span>
<a name="l00043"></a>00043 <span class="preprocessor">#import &quot;Three20UI/TTImageViewDelegate.h&quot;</span>
<a name="l00044"></a>00044 <span class="preprocessor">#import &quot;Three20UI/TTYouTubeView.h&quot;</span>
<a name="l00045"></a>00045 <span class="preprocessor">#import &quot;Three20UI/TTScrollView.h&quot;</span>
<a name="l00046"></a>00046 <span class="preprocessor">#import &quot;Three20UI/TTScrollViewDelegate.h&quot;</span>
<a name="l00047"></a>00047 <span class="preprocessor">#import &quot;Three20UI/TTScrollViewDataSource.h&quot;</span>
<a name="l00048"></a>00048 
<a name="l00049"></a>00049 <span class="preprocessor">#import &quot;Three20UI/TTLauncherView.h&quot;</span>
<a name="l00050"></a>00050 <span class="preprocessor">#import &quot;Three20UI/TTLauncherViewDelegate.h&quot;</span>
<a name="l00051"></a>00051 <span class="preprocessor">#import &quot;Three20UI/TTLauncherItem.h&quot;</span>
<a name="l00052"></a>00052 
<a name="l00053"></a>00053 <span class="preprocessor">#import &quot;Three20UI/TTLabel.h&quot;</span>
<a name="l00054"></a>00054 <span class="preprocessor">#import &quot;Three20UI/TTStyledTextLabel.h&quot;</span>
<a name="l00055"></a>00055 <span class="preprocessor">#import &quot;Three20UI/TTActivityLabel.h&quot;</span>
<a name="l00056"></a>00056 <span class="preprocessor">#import &quot;Three20UI/TTSearchlightLabel.h&quot;</span>
<a name="l00057"></a>00057 
<a name="l00058"></a>00058 <span class="preprocessor">#import &quot;Three20UI/TTButton.h&quot;</span>
<a name="l00059"></a>00059 <span class="preprocessor">#import &quot;Three20UI/TTLink.h&quot;</span>
<a name="l00060"></a>00060 <span class="preprocessor">#import &quot;Three20UI/TTTabBar.h&quot;</span>
<a name="l00061"></a>00061 <span class="preprocessor">#import &quot;Three20UI/TTTabDelegate.h&quot;</span>
<a name="l00062"></a>00062 <span class="preprocessor">#import &quot;Three20UI/TTTabStrip.h&quot;</span>
<a name="l00063"></a>00063 <span class="preprocessor">#import &quot;Three20UI/TTTabGrid.h&quot;</span>
<a name="l00064"></a>00064 <span class="preprocessor">#import &quot;Three20UI/TTTab.h&quot;</span>
<a name="l00065"></a>00065 <span class="preprocessor">#import &quot;Three20UI/TTTabItem.h&quot;</span>
<a name="l00066"></a>00066 <span class="preprocessor">#import &quot;Three20UI/TTButtonBar.h&quot;</span>
<a name="l00067"></a>00067 <span class="preprocessor">#import &quot;Three20UI/TTPageControl.h&quot;</span>
<a name="l00068"></a>00068 
<a name="l00069"></a>00069 <span class="preprocessor">#import &quot;Three20UI/TTTextEditor.h&quot;</span>
<a name="l00070"></a>00070 <span class="preprocessor">#import &quot;Three20UI/TTTextEditorDelegate.h&quot;</span>
<a name="l00071"></a>00071 <span class="preprocessor">#import &quot;Three20UI/TTSearchTextField.h&quot;</span>
<a name="l00072"></a>00072 <span class="preprocessor">#import &quot;Three20UI/TTSearchTextFieldDelegate.h&quot;</span>
<a name="l00073"></a>00073 <span class="preprocessor">#import &quot;Three20UI/TTPickerTextField.h&quot;</span>
<a name="l00074"></a>00074 <span class="preprocessor">#import &quot;Three20UI/TTPickerTextFieldDelegate.h&quot;</span>
<a name="l00075"></a>00075 <span class="preprocessor">#import &quot;Three20UI/TTSearchBar.h&quot;</span>
<a name="l00076"></a>00076 
<a name="l00077"></a>00077 <span class="preprocessor">#import &quot;Three20UI/TTTableViewController.h&quot;</span>
<a name="l00078"></a>00078 <span class="preprocessor">#import &quot;Three20UI/TTSearchDisplayController.h&quot;</span>
<a name="l00079"></a>00079 <span class="preprocessor">#import &quot;Three20UI/TTTableView.h&quot;</span>
<a name="l00080"></a>00080 <span class="preprocessor">#import &quot;Three20UI/TTTableViewDelegate.h&quot;</span>
<a name="l00081"></a>00081 <span class="preprocessor">#import &quot;Three20UI/TTTableViewVarHeightDelegate.h&quot;</span>
<a name="l00082"></a>00082 <span class="preprocessor">#import &quot;Three20UI/TTTableViewGroupedVarHeightDelegate.h&quot;</span>
<a name="l00083"></a>00083 <span class="preprocessor">#import &quot;Three20UI/TTTableViewPlainDelegate.h&quot;</span>
<a name="l00084"></a>00084 <span class="preprocessor">#import &quot;Three20UI/TTTableViewPlainVarHeightDelegate.h&quot;</span>
<a name="l00085"></a>00085 <span class="preprocessor">#import &quot;Three20UI/TTTableViewDragRefreshDelegate.h&quot;</span>
<a name="l00086"></a>00086 <span class="preprocessor">#import &quot;Three20UI/TTTableViewNetworkEnabledDelegate.h&quot;</span>
<a name="l00087"></a>00087 
<a name="l00088"></a>00088 <span class="preprocessor">#import &quot;Three20UI/TTListDataSource.h&quot;</span>
<a name="l00089"></a>00089 <span class="preprocessor">#import &quot;Three20UI/TTSectionedDataSource.h&quot;</span>
<a name="l00090"></a>00090 <span class="preprocessor">#import &quot;Three20UI/TTTableHeaderView.h&quot;</span>
<a name="l00091"></a>00091 <span class="preprocessor">#import &quot;Three20UI/TTTableFooterInfiniteScrollView.h&quot;</span>
<a name="l00092"></a>00092 <span class="preprocessor">#import &quot;Three20UI/TTTableViewCell.h&quot;</span>
<a name="l00093"></a>00093 
<a name="l00094"></a>00094 <span class="comment">// Table Items</span>
<a name="l00095"></a>00095 <span class="preprocessor">#import &quot;Three20UI/TTTableItem.h&quot;</span>
<a name="l00096"></a>00096 <span class="preprocessor">#import &quot;Three20UI/TTTableLinkedItem.h&quot;</span>
<a name="l00097"></a>00097 <span class="preprocessor">#import &quot;Three20UI/TTTableTextItem.h&quot;</span>
<a name="l00098"></a>00098 <span class="preprocessor">#import &quot;Three20UI/TTTableCaptionItem.h&quot;</span>
<a name="l00099"></a>00099 <span class="preprocessor">#import &quot;Three20UI/TTTableRightCaptionItem.h&quot;</span>
<a name="l00100"></a>00100 <span class="preprocessor">#import &quot;Three20UI/TTTableSubtextItem.h&quot;</span>
<a name="l00101"></a>00101 <span class="preprocessor">#import &quot;Three20UI/TTTableSubtitleItem.h&quot;</span>
<a name="l00102"></a>00102 <span class="preprocessor">#import &quot;Three20UI/TTTableMessageItem.h&quot;</span>
<a name="l00103"></a>00103 <span class="preprocessor">#import &quot;Three20UI/TTTableLongTextItem.h&quot;</span>
<a name="l00104"></a>00104 <span class="preprocessor">#import &quot;Three20UI/TTTableGrayTextItem.h&quot;</span>
<a name="l00105"></a>00105 <span class="preprocessor">#import &quot;Three20UI/TTTableSummaryItem.h&quot;</span>
<a name="l00106"></a>00106 <span class="preprocessor">#import &quot;Three20UI/TTTableLink.h&quot;</span>
<a name="l00107"></a>00107 <span class="preprocessor">#import &quot;Three20UI/TTTableButton.h&quot;</span>
<a name="l00108"></a>00108 <span class="preprocessor">#import &quot;Three20UI/TTTableMoreButton.h&quot;</span>
<a name="l00109"></a>00109 <span class="preprocessor">#import &quot;Three20UI/TTTableImageItem.h&quot;</span>
<a name="l00110"></a>00110 <span class="preprocessor">#import &quot;Three20UI/TTTableRightImageItem.h&quot;</span>
<a name="l00111"></a>00111 <span class="preprocessor">#import &quot;Three20UI/TTTableActivityItem.h&quot;</span>
<a name="l00112"></a>00112 <span class="preprocessor">#import &quot;Three20UI/TTTableStyledTextItem.h&quot;</span>
<a name="l00113"></a>00113 <span class="preprocessor">#import &quot;Three20UI/TTTableControlItem.h&quot;</span>
<a name="l00114"></a>00114 <span class="preprocessor">#import &quot;Three20UI/TTTableViewItem.h&quot;</span>
<a name="l00115"></a>00115 
<a name="l00116"></a>00116 <span class="comment">// Table Item Cells</span>
<a name="l00117"></a>00117 <span class="preprocessor">#import &quot;Three20UI/TTTableLinkedItemCell.h&quot;</span>
<a name="l00118"></a>00118 <span class="preprocessor">#import &quot;Three20UI/TTTableTextItemCell.h&quot;</span>
<a name="l00119"></a>00119 <span class="preprocessor">#import &quot;Three20UI/TTTableCaptionItemCell.h&quot;</span>
<a name="l00120"></a>00120 <span class="preprocessor">#import &quot;Three20UI/TTTableSubtextItemCell.h&quot;</span>
<a name="l00121"></a>00121 <span class="preprocessor">#import &quot;Three20UI/TTTableRightCaptionItemCell.h&quot;</span>
<a name="l00122"></a>00122 <span class="preprocessor">#import &quot;Three20UI/TTTableSubtitleItemCell.h&quot;</span>
<a name="l00123"></a>00123 <span class="preprocessor">#import &quot;Three20UI/TTTableMessageItemCell.h&quot;</span>
<a name="l00124"></a>00124 <span class="preprocessor">#import &quot;Three20UI/TTTableMoreButtonCell.h&quot;</span>
<a name="l00125"></a>00125 <span class="preprocessor">#import &quot;Three20UI/TTTableImageItemCell.h&quot;</span>
<a name="l00126"></a>00126 <span class="preprocessor">#import &quot;Three20UI/TTStyledTextTableItemCell.h&quot;</span>
<a name="l00127"></a>00127 <span class="preprocessor">#import &quot;Three20UI/TTStyledTextTableCell.h&quot;</span>
<a name="l00128"></a>00128 <span class="preprocessor">#import &quot;Three20UI/TTTableActivityItemCell.h&quot;</span>
<a name="l00129"></a>00129 <span class="preprocessor">#import &quot;Three20UI/TTTableControlCell.h&quot;</span>
<a name="l00130"></a>00130 <span class="preprocessor">#import &quot;Three20UI/TTTableFlushViewCell.h&quot;</span>
<a name="l00131"></a>00131 
<a name="l00132"></a>00132 <span class="preprocessor">#import &quot;Three20UI/TTErrorView.h&quot;</span>
<a name="l00133"></a>00133 
<a name="l00134"></a>00134 <span class="preprocessor">#import &quot;Three20UI/TTPhotoVersion.h&quot;</span>
<a name="l00135"></a>00135 <span class="preprocessor">#import &quot;Three20UI/TTPhotoSource.h&quot;</span>
<a name="l00136"></a>00136 <span class="preprocessor">#import &quot;Three20UI/TTPhoto.h&quot;</span>
<a name="l00137"></a>00137 <span class="preprocessor">#import &quot;Three20UI/TTPhotoViewController.h&quot;</span>
<a name="l00138"></a>00138 <span class="preprocessor">#import &quot;Three20UI/TTPhotoView.h&quot;</span>
<a name="l00139"></a>00139 <span class="preprocessor">#import &quot;Three20UI/TTThumbsViewController.h&quot;</span>
<a name="l00140"></a>00140 <span class="preprocessor">#import &quot;Three20UI/TTThumbsViewControllerDelegate.h&quot;</span>
<a name="l00141"></a>00141 <span class="preprocessor">#import &quot;Three20UI/TTThumbsDataSource.h&quot;</span>
<a name="l00142"></a>00142 <span class="preprocessor">#import &quot;Three20UI/TTThumbsTableViewCell.h&quot;</span>
<a name="l00143"></a>00143 <span class="preprocessor">#import &quot;Three20UI/TTThumbsTableViewCellDelegate.h&quot;</span>
<a name="l00144"></a>00144 <span class="preprocessor">#import &quot;Three20UI/TTThumbView.h&quot;</span>
<a name="l00145"></a>00145 
<a name="l00146"></a>00146 <span class="preprocessor">#import &quot;Three20UI/TTRecursiveProgress.h&quot;</span>
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
