<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Ne pas t&eacute;l&eacute;charger cette page directement, merci !');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Prot&eacute;g&eacute; par mot de passe'); ?></h2>
<p><?php _e('Entrer le mot de passe pour voir les commentaires'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<div class="comments_block">
<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?> pour &#8220;<?php the_title(); ?>&#8221;</h3>

<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>

	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

<div class="commentmetadata">
<strong><?php comment_author_link() ?></strong>, <?php _e('le'); ?> <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('j F, Y') ?> <?php _e('&agrave;');?> <?php comment_time() ?></a> <?php _e('Said&#58;'); ?> <?php edit_comment_link('Edit Comment','',''); ?>
 		<?php if ($comment->comment_approved == '0') : ?>
		<em><?php _e('Votre commentaire est en cours de mod&eacute;ration'); ?></em>
 		<?php endif; ?>
</div>

<?php comment_text() ?>
	</li>

<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>
	</ol>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Les commentaires sont ferm&eacute;s !</p>

	<?php endif; ?>
<?php endif; ?>
</div>

<?php if ('open' == $post->comment_status) : ?>

		<h3 id="respond">Let a comment</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">connect&eacute;</a> pour laisser un commentaire.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="D&eacute;connect&eacute; de ce compte">D&eacute;connection &raquo;</a></p>

<?php else : ?>

<div class="form-group">
    <p class="description">Name <?php if ($req) echo "(*)"; ?></p>
    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
</div>

<div class="form-group">
    <p class="description">Email <?php if ($req) echo "(*)"; ?></p>
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
</div>

<div class="form-group">
    <p class="description">Website</p>
    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
</div>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php _e('Vous pouvez utiliser ces tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->

<div class="form-group">
    <p class="description">Message(*)</p>
    <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea>
    <p class="description info" style="margin: 0">Fields with (*) are mandatories.</p>
</div>

<button name="submit" style="margin-top:0" class="btn-style" type="submit" id="submit" tabindex="5">Send</button>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>