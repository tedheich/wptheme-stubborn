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
			<h3>Alright, don't panic</h3>
			If you got here by accident, you can
			<ol>
				<li>Use the search box, just right at the bottom of this page. or;</li>
				<li>You can go back to the <a href=<?php bloginfo('home');?>>Home page</a></li>
			</ol>
	</div>
	
	<div id="footer">
		<?php get_footer();?>
	</div>
		
</div>
</body>
</html>