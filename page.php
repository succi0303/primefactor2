<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="post">
   <h2><?php the_title(); ?></h2>
   <?php the_content(); ?>
  </div>
<?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>