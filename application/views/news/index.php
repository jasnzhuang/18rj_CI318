<!-- <?php print_r($news) ?> -->
<!-- <?php print_r($categories) ?> -->
<div>
    <h1>
        <?php if(isset($cid)) : ?>
        <?php echo $cid; ?>
        <?php endif;?>
    </h1>
    <a href="<?php echo base_url(); ?>">首页</a>
	<?php foreach ($categories as $c_item): ?>
	<a href="<?php echo base_url('category/'.$c_item['id']); ?>"><?php echo $c_item['catename']; ?></a>
	<?php endforeach; ?>
</div>
<p>
    <?php if($this->session->userdata('logged_in')) : ?>
        <?php if(isset($cid)) : ?>
        <a href="<?php echo base_url('news/create/'.$cid); ?>">添加新闻</a>
        <?php else: ?>
        <a href="<?php echo base_url('news/create'); ?>">添加新闻</a>
        <?php endif;?>
    <?php endif; ?>
</p>
<ul>

<?php foreach ($news as $news_item): ?>
<li>
	<span>(<?php echo $news_item['catename']; ?>)</span>
    <span style="font-weight: 600;"><?php echo $news_item['title']; ?></span>
    <span><?php echo $news_item['content']; ?></span>
    <span>
        
    	<a href="<?php echo base_url('news/'.$news_item['id']); ?>">点击查看</a>
        <?php if($this->session->userdata('logged_in')) : ?>
    	<a href="<?php echo base_url('news/edit/'.$news_item['id']); ?>">点击编辑</a>
    	<a href="<?php echo base_url('news/delete/'.$news_item['id']); ?>">点击删除</a>
    <?php endif; ?>
    </span>
</li>    

<?php endforeach; ?>
</ul>