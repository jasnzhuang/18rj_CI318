<?php

/**
 * @Author: Jason Zhuang
 * @Date:   2018-05-31 10:20:32
 * @Last Modified by:   Jason Zhuang
 * @Last Modified time: 2018-05-31 11:18:27
 */
class Classes extends CI_controller
{
	public function Index($major='')
	{
		if ($major=='') {
			echo "熊得！你忘记给出专业参数了吧？学点好的！别总跟徐辉辉似的。。。";
		}elseif ($major=='software') {
			echo "大兄弟！~前途无量啊~";
		}else{
			echo "这年头啊，学啥都行，不学软件也没啥，无非就是有点傻";
		}
	}

	public function Leader($name='')
	{
		$bgs=array("lss"=>"班长", "wjq"=>"团支书","qz"=>"流民");
		$data["sbsb"]=$bgs["$name"];
		$this->load->view("Classes/Leader",$data);
	}
}