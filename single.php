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
				<div class="contentmeta">
					By: <?php the_author();?>, on <?php the_time('n.j.Y');?>, filed under 
					<?php the_category(', ')?> and tagged as <?php the_tags('',' | ','')?> . 
				</div>
				<?php the_content();?>
				
				<?php wp_link_pages();?>
				
				<div id="relatedpost">

				<?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
				</div>
				
				<div id="postnavigation">
					<div class="marker">Post navigation</div>
					<?php next_post_link('&larr; %link (previous post)');?><br/>
					<?php previous_post_link('&rarr; %link (next post)');?>
				</div>
				
				<div id="bookmarkarea">
					<?php include(TEMPLATEPATH . '/bookmarks.php');?>
				</div>
				
				<div id="commentarea">
					<?php comments_template();?>
				</div>	
				
				
			<?php endwhile;?>
		<?php else :?>
			There are no posts yet.
		<?php endif;?>			
	</div>
	
	<div id="footer">
		<?php get_footer();?>
	</div>
		
</div>
</body>
</html>