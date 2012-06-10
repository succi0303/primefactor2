<!DOCTYPE html>
<html xmlns:og="http:://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_rul'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- コンテナ -->
<div id="container">

<div id="ad_bigbanner">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-3774269786525137";
/* ビッグバナー */
google_ad_slot = "9969363728";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<div id="ad_link1">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-3774269786525137";
/* リンクユニット72815 */
google_ad_slot = "3511575259";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<!-- ヘッダー -->
<div id="header">

<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p id="desc"><?php bloginfo('description'); ?></p>

<!--
<div id="subinfo">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/feed.png" alt="RSS FEED" width="28" height="28" /></a>
</div>
-->
<div id="subinfo">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/Feed.png" alt="Feed.png" width="30" height="30" /></a>
<img src="<?php bloginfo('template_url'); ?>/cat_img.png" alt="CatImage" width="75" height="75" />
</div>

<div id="nav">
<?php wp_nav_menu(array(
  'theme_location' => 'navigation'
)); ?>
</div>

</div>

