<?php
class comment_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_comments($news_id, $parent_id = false)
	{
		if ($parent_id==false) {
			//select * from comments where news_id=$news_id
	    	$query = $this->db->get_where('comments', array('news_id' => $news_id));
		}else{
			//select * from comments where news_id=$news_id and parent_id=$parent_id
			$query = $this->db->select('*')->from('comments')
			->group_start()
			->where('news_id', $news_id)
			->where('parent_id', $parent_id)
			->group_end()
			->get();
		}
		
	    return $query->result_array();
	}
}