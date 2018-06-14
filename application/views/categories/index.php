<!-- <?php print_r($news) ?>
<?php print_r($categories) ?> -->
<?php if($this->session->userdata('logged_in')) : ?>
<p>
        <a href="<?php echo base_url('categories/create'); ?>">添加类别</a>
</p>
<ul>

<?php foreach ($categories as $cate_item): ?>
<li>
	<span>(<?php echo $cate_item['catename']; ?>)</span>
    <span>
    	<a href="<?php echo base_url('categories/edit/'.$cate_item['id']); ?>">点击编辑</a>
    	<a href="<?php echo base_url('categories/delete/'.$cate_item['id']); ?>">点击删除</a>
    </span>
</li>    

<?php endforeach; ?>
</ul>
<?php else: ?>
	<a href="<?php echo base_url('users/login'); ?>">尚未登录，请点我登录</a>
<?php endif; ?>