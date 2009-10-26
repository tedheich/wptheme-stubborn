<div id="searcharea">
<?php $search_text = "  Type to search, then hit enter"; ?> 
<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/"> 
		<input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '') {this.value = '<?php echo $search_text; ?>';}"  onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" /> 
<input class="btn" type="hidden" id="searchsubmit" value="GO"/> 
</form>
</div>

<strong><?php bloginfo('name');?></strong> is made possible by WordPress, TextMate and lots of coffee. I write all the contents here--not as often as I'd like, because I still have a day job as software development manager. In case you're wondering what the name of this theme is--well I don't really have a name for it yet, but I think I'll call it the Stubborn theme.  I also write at <a href="http://fornoobs.info">ForNoobs.info</a> and if there's more time left, I twitter a little too--if you would like to follow, it's <a href="http://www.twitter.com/tedheich">@tedheich</a>. You can <a href="/contact" class="smcf-link">drop me a note here.</a>

<?php wp_footer();?>