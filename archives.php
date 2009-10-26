<?php include(TEMPLATEPATH . '/htmlhead.php');?>
<body>
<div id="wrap">
	
	<div id="header">
		<?php get_header();?>
	</div>
	
	<div id="content">
		
	<h2>All the archives in a single list</h2>

	<?php query_posts('showposts=300'); ?>	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		 
		<ul class="archivelist">
		    <li>
		    	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> 
		    	<span class="dateinfo"><?php the_time('F j, Y')?></span>
	    	</li>
		</ul>
		
		</div>
		
		<?php endwhile; else: ?>
		
		<p>
			<?php _e('Sorry, no post like that.'); ?>	
		</p>
	<?php endif; ?>
	<br/><br/>		
		
		
		
		
	</div>
	
	<div id="footer">
		<?php get_footer();?>
	</div>
		
</div>
</body>
</html>