<div class="post">

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div id="postinfo">
<p><?php echo get_the_date(); ?> |
<?php the_category('カテゴリ: ',', '); ?> | 
<?php if(has_tag()): ?>
<?php the_tags('タグ: ',', '); ?> |
<?php endif; ?>
</p>
</div>

<?php the_content(); ?>

</div>