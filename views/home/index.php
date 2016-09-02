

<div class="container">
<div class="row">

	<?php foreach ($this->posts as $post) : ?>

	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		<div class="post-preview">
		<h1><a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?= htmlentities($post['title']); ?></a></h1>
		<p>
			<i>Posted on</i>
			<?= htmlentities($post['date']); ?>
			<i>by</i>
			<?= htmlentities($post['full_name']); ?>
		</p>
		<p><?= $post['content']; ?></p>
		</div>
	</div>
	<?php endforeach; ?>

</div>
</div>