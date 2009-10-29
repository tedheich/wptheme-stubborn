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
<?php if (post_password_required()) : ?>
	<p><?php _e('You need to enter a password to comment.');?></p>
<?php return; endif;?>


<h2><?php comments_number(__('{0 Comments ..'), __('{1 Comment below ..'), __('{% Comments below ..')); ?>
<?php if ( comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e("Leave a comment"); ?>">you can add one</a> }<br/><br/>
<?php endif; ?>
</h2>


<?php if ($comments) : ?>
	<?php foreach($comments as $comment) :?>
		
		<span <?php comment_class(); ?> id="comment-<?php comment_ID() ?>"</span><br/>
		<?php echo get_avatar($comment,32);?>
		
		<strong><span class="author"><?php comment_author_link()?></span></strong>
		<span class="commentdatetime"><?php comment_date('n.j.Y')?>at <?php comment_time('H:i')?></span>
		<div class="commenttext">
			<?php comment_text();?>
			<?php if ($comment->comment_approved =='0') :?>
				<p><strong>Your comment is waiting to be moderated</strong></p>
			<?php endif;?>
		</div>	
				
	<?php endforeach;?>
<?php else:?>
			
<?php endif;?>


<!-- TROUBLE IS HERE -->

<div class="commentform">

<?php if ( comments_open() ) : ?>
<h2 id="postcomment"><?php _e('Leave a comment'); ?></h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>

<?php else : ?>

<p><input class="inputform" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input class="inputform" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input class="inputform" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->

<p><textarea class="inputform" name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

<p><input class="btn" name="submit" type="submit" id="submit" tabindex="5" value="<?php echo attribute_escape(__('Go on ahead!')); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>


</div>