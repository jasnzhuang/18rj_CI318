<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($id = FALSE)
	{
	    if ($id === FALSE)
	    {
	    	$this->db->select('news.id, news.title, news.content, categories.catename');
			$this->db->from('news');
			$this->db->join('categories', 'news.category = categories.id');
			$query = $this->db->get();
			// SELECT * FROM news JOIN categorys ON news.category = categorys.id

	        // $query = $this->db->get('news');
    		// $query = mysqli_query($conn, "SELECT * FROM news");
	        return $query->result_array();
	        // return mysqli_fetch_array($query, MYSQLI_ASSOC)
	    }

	    $query = $this->db->get_where('news', array('id' => $id));
	    // $query = mysqli_query($conn, "SELECT * FROM news where slug=$slug");
	    return $query->row_array();
	    // return mysqli_fetch_array($query, MYSQLI_ASSOC)
	}

	public function get_category_news($cid)
	{
		$this->db->select('news.id, news.title, news.content, categories.catename');
		$this->db->from('news');
		$this->db->where('categories.id', $cid);
		$this->db->join('categories', 'news.category = categories.id');
		$query = $this->db->get();

	    return $query->result_array();
	}

	public function get_news_id($id = FALSE)
	{
	    if ($id === FALSE)
	    {
	        $query = $this->db->get('news');
    		// $query = mysqli_query($conn, "SELECT * FROM news");
	        return $query->result_array();
	        // return mysqli_fetch_array($query, MYSQLI_ASSOC)
	    }

	    $query = $this->db->get_where('news', array('id' => $id));
	    // $query = mysqli_query($conn, "SELECT * FROM news where slug=$slug");
	    return $query->row_array();
	    // return mysqli_fetch_array($query, MYSQLI_ASSOC)
	}

	public function set_news()
	{
	    $this->load->helper('url');

	    $data = array(
	        'title' => $this->input->post('title'),
	        'category' => $this->input->post('category'),
	        'content' => $this->input->post('content')
	    );

	    return $this->db->insert('news', $data);
	}

	public function update_news()
	{
	    $this->load->helper('url');
    
	    $data = array(
	        'title' => $this->input->post('title'),
	        'text' => $this->input->post('text')
	    );
	    $this->db->where('id',$this->input->post('id'));
	    //select * from news where slug= $slug
	    return $this->db->update('news', $data);
	}

	public function delete_news($news_id)
	{
		$this->db->where('id',$news_id);
		return $this->db->delete('news');
	}
}