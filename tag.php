<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url">
<span itemprop="title">トップ</span>
</a> &rsaquo;
</div>

<div>
<?php single_cat_title(); ?>
</div>
</div>

<!-- コンテンツ -->
<div id="content">

<?php get_template_part('pagenation'); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>