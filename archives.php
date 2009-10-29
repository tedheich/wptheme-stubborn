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