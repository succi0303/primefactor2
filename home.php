<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

<?php get_template_part('pagenation'); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php get_template_part('content', 'excerpt'); ?>
<?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>