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
  <title><?php echo html::specialchars($title) ?></title>
<?
  echo three20html::stylesheet(array(
    'css/reset',
    'css/global.css',
  ), null, FALSE);
?>
</head>
<body>

<div id="page-wrapper">

<?php if ( !IN_PRODUCTION AND ! empty($line) AND ! empty($file)): ?>
<p><?php echo Kohana::lang('core.error_file_line', $file, $line) ?></p>
<?php endif ?>
<?php if ( !IN_PRODUCTION AND ! empty($trace)): ?>
<div id="framework_error" style="width:42em;margin:20px auto;">
<h3><?php echo Kohana::lang('core.stack_trace') ?></h3>
<?php echo $trace ?>
</div>
<?php endif ?>

</div> <!-- #page-wrapper -->

<noscript><p><img alt="Clicky" width="1" height="1" src="http://static.getclicky.com/155532ns.gif" /></p></noscript>

<?
if (IN_PRODUCTION) {
  echo three20html::inlinescript('
    var is_ssl = ("https:" == document.location.protocol);
    var asset_host = is_ssl ? "https://s3.amazonaws.com/getsatisfaction.com/" : "http://s3.amazonaws.com/getsatisfaction.com/";
    document.write(unescape("%3Cscript src=\'" + asset_host + "javascripts/feedback-v2.js\' type=\'text/javascript\'%3E%3C/script%3E"));
  ');

  echo three20html::inlinescript('
    var feedback_widget_options = {};

    feedback_widget_options.display = "overlay";  
    feedback_widget_options.company = "Three20";
    feedback_widget_options.placement = "left";
    feedback_widget_options.color = "#FC9";
    feedback_widget_options.style = "idea";

    var feedback_widget = new GSFN.feedback_widget(feedback_widget_options);
  ');
}

if (IN_PRODUCTION) {
  echo three20html::inlinescript('
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
  ');

  echo three20html::script('http://static.getclicky.com/js');
  echo three20html::inlinescript('clicky.init(155532);');

  echo three20html::inlinescript('
  try {
  var pageTracker = _gat._getTracker("'.Kohana::config('core.google_analytics_key').'");
  pageTracker._setDomainName(".three20.info");
  pageTracker._trackPageview();
  } catch(err) {}');
}
?>

</body>
</html>
