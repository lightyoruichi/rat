<a href="#" class="friend" onclick="friend_remove(<?php echo $_SESSION['user']['id']; ?>, <?php echo $app->page->user['id']; ?>); return false;">
<?php if ($app->config->friends['asymmetric'] == TRUE) {
	echo 'Unfollow';
} else {
	echo 'Remove friend';
} ?>
</a>