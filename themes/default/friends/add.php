<a href="#" class="friend" onclick="friend_add(<?php echo $_SESSION['user']['id']; ?>, <?php echo $page['user']['id']; ?>); return false;">
<?php if ($app->config->friends['asymmetric'] == TRUE) {
	echo 'Follow';
} else {
	echo 'Add friend';
} ?>
</a>