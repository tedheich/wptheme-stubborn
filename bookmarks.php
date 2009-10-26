

<a class="social" href="http://delicio.us/post?url=<?php the_permalink()?>">Bookmark in del.icio.us</a> |
<a class="social" href="http://www.stumbleupon.com/submit?url=<?php the_permalink()?>">Stumble it</a> |
<a class="social" href="http://digg.com/submit?phase=2&URL=<?php the_permalink()?>">Digg it</a> |

<?php if ( pings_open() ) : ?>
	<a class="social" href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Universal Resource Locator">URL</abbr> for this post'); ?></a> |
<?php endif; ?>

	<!-- Begin TwitThis (http://twitthis.com/) -->
	<script type="text/javascript" src="http://s3.chuug.com/chuug.twitthis.scripts/twitthis.js"></script>
	<script type="text/javascript">
	<!--
	document.write('<a class=social href="javascript:;" onclick="TwitThis.pop();">Twit it</a> | ');
	//-->
	</script>
	<!-- /End -->
	<a class="social" href="http://feeds2.feedburner.com/fornoobs/kwdt">Grab the news feed</a>.
	
	