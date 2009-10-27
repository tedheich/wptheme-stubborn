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
