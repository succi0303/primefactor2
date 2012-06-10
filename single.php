<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url>
<span itemprop="title">トップ</span>
</a> &rsaquo;
</div>

<?php $postcat = get_the_category(); ?>
<?php $catid = $postcat[0]->cat_ID; ?>
<div itemscope="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo get_category_link($catid); ?>" itemprop="url">
<span itemprop="title"><?php echo get_cat_name($catid); ?></span>
</a> &rsaquo;
</div>

<div>
<?php the_title(); ?>
</div>
</div>
<!-- コンテンツ -->
<div id="content">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <p class="pagenation">
    <span class="oldpage"><?php previous_post_link(); ?></span>
    <span class="newpage"><?php next_post_link(); ?></span>
  </p>
  <?php get_template_part('content'); ?>
  
  <div id="ad_rectangle1">
  <script type="text/javascript"><!--
google_ad_client = "ca-pub-3774269786525137";
/* レクタングル(大) */
google_ad_slot = "2702467271";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
  </div>
  
  <?php comments_template(); ?>
  
  <!-- X:S ZenBackWidget --><script type="text/javascript">document.write(unescape("%3Cscript")+" src='http://widget.zenback.jp/?base_uri=http%3A//succi.jp/blog/&nsid=103913574241442044%3A%3A103913595716275035&rand="+Math.ceil((new Date()*1)*Math.random())+"' type='text/javascript'"+unescape("%3E%3C/script%3E"));</script><!-- X:E ZenBackWidget -->

<?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>