<?php
	$this->assign('title', $post['Post']['title']);
?>

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created_at']; ?></small></p>

<p><?php echo html_entity_decode($post['Post']['body']); ?></p>