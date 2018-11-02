<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="single">

<?php next_posts_link('<span class="pleft">&laquo; back page</span>') ?>
<?php previous_posts_link('<span class="pright">next page &raquo;</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="pleft">&laquo; previous</span>', 'no'); ?>   
<?php next_post('%', '<span class="pright">next &raquo;', 'no'); ?><?php }?>

</div>

<div id="entry">
<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>

<div class="dog"><?php edit_post_link('EDIT', '', ' - '); ?> Posted on <?php the_time('F jS, Y') ?> at <?php the_time('h:iA') ?></a> with <?php comments_popup_link('no comments', '1 comment', '% comments');?>. Would you like to <a href="<?php the_permalink() ?>/#respond">leave one</a>?
<br />Filed under: <?php the_category(', ') ?> <?php the_tags('(#',' #', ')'); ?>
</div> 
</span>


<div id="post">
<?php the_content( ); ?> 
</div>

</div>

<?php comments_template(''); ?>

<?php endwhile; ?>

<?php endif; ?>


<?php get_footer() ?>