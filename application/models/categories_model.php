<?php
class categories_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}


	public function set_categories()
	{
	    $data = array(
	        'catename' => $this->input->post('catename'),
	    );
	    return $this->db->insert('categories', $data);
	}

	public function get_categories($id)
	{
		if ($id === FALSE)
	    {
	    	$query = $this->db->get('categories');
	        return $query->result_array();
	        // return "全部";
	    }
	    $query = $this->db->get_where('categories', array('id' => $id));
	    return $query->row_array();
	    // return "not全部";
	}

	public function update_categories()
	{
	    $data = array(
	        'catename' => $this->input->post('catename'),
	    );
	    $this->db->where('id',$this->input->post('id'));
	    return $this->db->update('categories', $data);
	}

	public function delete_categories($categories_id)
	{
		$this->db->where('id',$categories_id);
		$query = $this->db->delete('categories');
		$this->db->where('category', $categories_id);
		return $this->db->delete('news');	
	}
}