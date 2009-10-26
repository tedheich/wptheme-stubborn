<?php include(TEMPLATEPATH . '/htmlhead.php');?>
<body>
<div id="wrap">
	
	<div id="header">
		<?php get_header();?>
	</div>
	
	<div id="content">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>

						<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>

				</div>
			  <?php endwhile; endif; ?>
		
	</div>
	
	<div id="footer">
		<?php get_footer();?>
	</div>
		
</div>
</body>
</html>