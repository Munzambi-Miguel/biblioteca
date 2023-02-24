<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 19/06/2019
 * Time: 23:19
 */

class Category_model extends CI_Model
{

    public function read_data()
    {

        $query = $this->db->query("SELECT * FROM `category_mode` ");
        return $query;
    }

    public function insert()
    {

        $data = array ('description' => $this->input->post('category_name'));
        $this->db->insert('category_mode', $data);

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delet()
    {
        $id = $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('category_mode');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get()
    {
        $id = $this->input->post('id');
        $query = "
            SELECT *    
            FROM `category_mode` 
            WHERE `category_mode`.`id` = ?
        ";

        $result = $this->db->query($query, $id);

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function update()
    {

        $this->db->trans_start();
        $dataCateg = array ('description' => $this->input->post('category_name'));

        $this->db->where('id', $this->input->post('category_id'));
        $this->db->update('category_mode', $dataCateg);
        $this->db->trans_complete();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }


}