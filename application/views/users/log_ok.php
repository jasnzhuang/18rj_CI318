<!-- <?php print_r($this->session->userdata()) ?>
 -->
 <h2>登录成功</h2>
<H2>欢迎回来，<?php echo $this->session->userdata('username') ?>!</H2>
<h5><a href="<?php echo base_url('home') ?>">点我返回首页</a></h5>