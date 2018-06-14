<?php

/**
 * @Author: Jason Zhuang
 * @Date:   2018-05-31 08:17:31
 * @Last Modified by:   Jason Zhuang
 * @Last Modified time: 2018-05-31 09:17:27
 */
class ruanjian extends CI_controller
{
	
	public function Index($year='')
	{
		if ($year==17) {
			echo $year."快滚犊子了~";
		}elseif ($year==18) {
			echo $year."一年之后才滚犊子呢~不急~不急~";
		}else{
			echo "小傻瓜们~欢迎来到CI";
		}
	}

	public function Teacher($name='')
	{
		// $returnValue = ($name=='lmj') ? '统领软件、营销两个专业' : '不好意思，不认识' ;
		// echo $returnValue;
		// if($name=='lmj'){
		// 	$this->load->view('ruanjian/tongchi');
		// }else{
		// 	$this->load->view('ruanjian/tongchi');
		// }
		$data['zhenbang'] = ($name=='lmj') ? '统领软件、营销两个专业' : '不好意思，不认识' ;
		$this->load->view('ruanjian/tongchi',$data);
	}

	public function Student($name='')
	{
		$studentArray=array("dzy"=>"男17","zy"=>"男17","sy"=>"男17","jbl"=>"女18","jyz"=>"男17","dyj"=>"男17");
		echo $studentArray["$name"];
	}
}