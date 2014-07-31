<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ferner & Kollegen
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
  <script>!function(a,b,c,d,e){function g(a,c,d,e){var f=b.getElementsByTagName("script")[0];a.src=e,a.id=c,a.setAttribute("class",d),f.parentNode.insertBefore(a,f)}a.Mobify={points:[+new Date]};var f=/((; )|#|&|^)mobify=(\d)/.exec(location.hash+"; "+b.cookie);if(f&&f[3]){if(!+f[3])return}else if(!c())return;b.write('<plaintext style="display:none">'),setTimeout(function(){var c=a.Mobify=a.Mobify||{};c.capturing=!0;var f=b.createElement("script"),h="mobify",i=function(){var c=new Date;c.setTime(c.getTime()+3e5),b.cookie="mobify=0; expires="+c.toGMTString()+"; path=/",a.location=a.location.href};f.onload=function(){if(e)if("string"==typeof e){var c=b.createElement("script");c.onerror=i,g(c,"main-executable",h,mainUrl)}else a.Mobify.mainExecutable=e.toString(),e()},f.onerror=i,g(f,"mobify-js",h,d)})}(window,document,function(){a=/webkit|(firefox)[\/\s](\d+)|(opera)[\s\S]*version[\/\s](\d+)|(trident)[\/\s](\d+)/i.exec(navigator.userAgent);return!a||a[1]&&4>+a[2]||a[3]&&11>+a[4]||a[5]&&6>+a[6]?!1:!0},
             "//cdn.mobify.com/mobifyjs/build/mobify-2.0.10.min.js",
             function() {
                var capturing = window.Mobify && window.Mobify.capturing || false;
                if (capturing) {
                  Mobify.Capture.init(function(capture){
                    var capturedDoc = capture.capturedDoc;
                    var images = capturedDoc.querySelectorAll("img, picture");
                    Mobify.ResizeImages.resize(images);
                    capture.renderCapturedDoc();
                  });
                }
  });</script>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
  
  <!--
  <div class="_snippet-language-switcher">
    <ul class="_snippet-language-switcher-list">
      <li>Deutsch</li>
      <li>English</li>
      <li>Italiano</li>
      <li>pусский</li>
    </ul>
    <div class="_snippet-language-switcher-toggle"><?php _e("Languages"); ?></div>
  </div>
  -->

    <!--[if lt IE 7]>
    	<p class="browsehappy">Sie verwenden einen <strong>veralteten</strong> Browser. Bitte <a href="http://browsehappy.com/">upgraden Sie Ihren Browser</a> um Ihr Surferlebnis zu verbessern.</p>
    <![endif]-->

	<?php get_template_part('_globals/_global-header');?>
  <?php get_template_part('_globals/_global-hero');?>

	<main class="_global-main" role="main">	