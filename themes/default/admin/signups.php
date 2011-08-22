
<p>Beta signups: <strong><?php echo count($app->page->users); ?></strong></p>

<?php

if (is_array($app->page->users)) {

echo '<table>';

foreach ($app->page->users as $user) {
	
	if ($user['days_waiting'] == 0) {
		$waiting = 'Today!';
	} elseif ($user['days_waiting']) {
		$waiting = $user['days_waiting'].' days ago';
	} else {
		$waiting = '<span class="bad_news">Error</span>';
	}
	
	if ($user['invites'] > 0) {
		$invite = 'Invited x'.$user['invites'].' &middot;';
	}
	
	echo '<tr><td>'.$user['email'].'</td><td>'.$waiting.' &middot; '.$invite.' <a href="admin.php?page=invite&email='.urlencode($user['email']).'">Invite</a></td></tr>';

	unset($invite);

}

echo '</table>';

}

?>