<?php
class girls_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_girls()
	{

	    $query = $this->db->get('girls');
	    return $query->result_array();

	}
}