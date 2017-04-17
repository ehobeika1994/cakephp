<?php
	$this->assign('title', 'Add Post');

?>

<?php
	echo "<script>tinymce.init({ selector:'textarea' });</script>";
?>

<h1>Add Post</h1>
<?php
	echo $this->Form->create('Post');
	echo $this->Form->select('user_id', array('value' => '1'));
	echo $this->Form->input('title');
	echo $this->Form->textarea('body');
	echo $this->Form->input('slug');
	echo $this->Form->end('Save Post');
?>