<?php get_header(); ?>

<?php if (have_posts()); ?>

<blockquote><p align="center"><font size="4">You are viewing all posts filed under: <b><?php single_cat_title(); ?></b></font></p></blockquote>

<hr />

<?php $posts=query_posts($query_string .
'&posts_per_page=4'); ?>

<?php while (have_posts()) : the_post(); ?>
<div id="entry">

<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>

<div class="dog"><?php edit_post_link('EDIT', '', ' - '); ?> Posted on <?php the_time('F jS, Y') ?> at <?php the_time('h:iA') ?></a> with <?php comments_popup_link('no comments', '1 comment', '% comments');?>. Would you like to <a href="<?php the_permalink() ?>/#respond">leave one</a>?
<br />Filed under: <?php the_category(', ') ?> <?php the_tags('(#',' #', ')'); ?>
</div> 
</span>


<div id="post">

<?php the_excerpt(); ?>

</div>

</div>
<div style="clear:both"></div>


<?php endwhile; ?>

<?php get_footer(); ?>