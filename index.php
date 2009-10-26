<?php include(TEMPLATEPATH . '/htmlhead.php');?>

<body>
<div id="wrap">
	
	<div id="header">
		<?php get_header();?>
	</div>
	
	<div id="content">
		<?php if(have_posts()) : ?>
			
			<?php while (have_posts()) : the_post();?>
			
				<h1>
					<a href=<?php the_permalink();?> title=<?php the_title();?>>
						<?php the_title();?>
					</a>
				</h1>
				<?php the_excerpt();?>
				
				<div class="contentmeta">
					Written by <strong><?php the_author();?></strong>, on <?php the_time('n.j.Y');?>, 
					filed under <?php the_category(', ')?> and tagged <?php the_tags('',' | ','')?> . 
					<a href=<?php the_permalink();?>>Continue reading <?php the_title(); ?> &rarr;</a>
				</div>
							
			<?php endwhile;?>
			
			
			<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
			
		<?php else :?>
			You shouldn't see this page, it means I haven't written anything yet.
		<?php endif;?>			
	</div>
	
	<div id="footer">
		<?php get_footer();?>
	</div>
		
</div>
</body>
</html>