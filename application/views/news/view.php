<div>
	<p><?php echo $news_item['title'] ?></p>
	<p><?php echo $news_item['content'] ?></p>
</div>
<div>
	<ul>
		<?php foreach ($comments as $co_items): ?>
		<li><?php echo $co_items['content']; ?></li>
		<?php endforeach; ?>
	</ul>
</div>
