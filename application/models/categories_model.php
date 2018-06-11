<?php

class categories_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_categories($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('categories');
            return $query->result_array();
        }

        $query = $this->db->get_where('categories', array('id' => $id));
        return $query->row_array();
    }

    public function set_categories()
    {
        $data = array(
            'name' => $this->input->post('name')
        );

        return $this->db->insert('categories', $data);
    }

    public function delete_categories($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('categories');
        return true;
    }

    public function update_categories(){
        $data = array(
            'name' => $this->input->post('name')
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('categorys', $data);
    }
}