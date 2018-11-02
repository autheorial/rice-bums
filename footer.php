<div id="pagebottom">

<span class="archive"><a href="/archives">archives</a></span>
<br />

<?php next_posts_link('<span class="pleft">&laquo; back page</span>') ?>
<?php previous_posts_link('<span class="pright">next page &raquo;</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="pleft">&laquo; previous</span>', 'no'); ?>   
<?php next_post('%', '<span class="pright">next &raquo;', 'no'); ?><?php }?>

</div>


<div id="footer">

&copy; Alice Zhu, 2013
<br /><a href="http://love.ricetard.nu" target="_blank"><small>PART OF THE LOVE.RICETARD.NU NETWORK</small></a>
<br /><a href="http://ricetard.nu/rss" target="_blank">Subscribe?</a> &middot; <a id="scroll-to-top" href="#">&uarr;</a>
</div>

</body>

<?php wp_footer(); ?>

</html>