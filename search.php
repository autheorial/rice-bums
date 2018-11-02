<?php get_header(); ?>


<h1>Search results</h1>

<blockquote><p>There are <b><?php 
$search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?></b> total search results. They include both posts and pages. I hope you found what you were looking for!</blockquote>

<hr />

<?php $posts=query_posts($query_string .
'&posts_per_page=4'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

<?php else : ?>
<h1>Not found</h1>
<div id="entry">
<p>No search results have been found.</p>
<p>You may <a href="http://dumb.ricetard.nu" target="_blank">contact me</a> if you are looking for something, or think that this is an error. <a href="http://love.ricetard.nu/" target="_blank">My network</a> also branches out to my various subdomains, which are separated into web/content, fanlistings, and portfolio.</p>
</div>


<?php endif; ?>
</div>
<?php get_footer(); ?>