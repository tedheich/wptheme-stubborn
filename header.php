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

<div id="searcharea">
<?php $search_text = "  Type anything to search, then hit enter "; ?> 
<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/"> 
		<input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '') {this.value = '<?php echo $search_text; ?>';}"  onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" /> 
<input class="btn" type="hidden" id="searchsubmit" value="GO"/> 
</form>
</div>

<br/>
<a href=<?php bloginfo('home')?>>HOME</a> | <a href='archives'>INDEX</a> <br/>
<!--
<strong><a href=<?php bloginfo('home')?>><?php bloginfo('name')?></a></strong> is written by Ted Heich. <br/>
-->	
