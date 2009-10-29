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
	<a class="social" href="#">Grab the news feed</a>.
	
	