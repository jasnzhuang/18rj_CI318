<!-- <?php print_r($users) ?> -->
<?php if($this->session->userdata('logged_in')) : ?>
<p>
        <a href="<?php echo base_url('users/create'); ?>">添加用户</a>
</p>
<ul>

<?php foreach ($users as $u_item): ?>
<li>
	<span><?php echo $u_item['name']; ?></span>/<span>(<?php echo $u_item['username']; ?>)</span>
    <span>
    	<a href="<?php echo base_url('user/edit/'.$u_item['id']); ?>">点击编辑</a>
    	<a href="<?php echo base_url('user/delete/'.$u_item['id']); ?>">点击删除</a>
    </span>
</li>    

<?php endforeach; ?>
</ul>
<?php else: ?>
	<a href="<?php echo base_url('users/login'); ?>">尚未登录，请点我登录</a>
<?php endif; ?>