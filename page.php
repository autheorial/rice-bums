<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<h1><?php the_title(); ?> </h1>

<span class="right"><?php edit_post_link('edit this page', ' '); ?></span>

<div id="entry">

<?php the_content(); ?>

</div>

<?php comments_template(''); ?>
<?php endwhile; ?>

<?php endif; ?>


<?php get_footer() ?>