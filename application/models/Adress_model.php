<?php


class Adress_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function insert()
    {
        $data = array (
            'description' => $this->input->post('emp_description'),
            'city_mode_id' => $this->input->post('emp_city')
        );
        $this->db->insert('adress_mode', $data);
        $id=$this->db->query("SELECT MAX(id) FROM `adress_mode`");
        return $id;
    }
}