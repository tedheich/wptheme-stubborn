<!--
This file is part of the WordPress Stubborn Theme.

   Stubborn theme is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   The Stubborn theme is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with the Stubborn theme.  If not, see <http://www.gnu.org/licenses/>.

	Author: Ted H.
	
-->

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
				<?php the_excerpt();?>
				
				<div class="contentmeta">
					<a href=<?php the_permalink();?>>Read more &rarr;</a>
				</div>
							
			<?php endwhile;?>
			
			
			<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
			
		<?php else :?>
			I didn't find anything of the sort, would like to look at the <a href='archives'>INDEX</a> instead?
		<?php endif;?>			
	</div>
	
	<div id="footer">
		<?php get_footer();?>
	</div>
		
</div>
</body>
</html>