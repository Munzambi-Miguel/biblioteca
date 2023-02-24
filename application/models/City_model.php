<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 19/06/2019
 * Time: 05:29
 */

class City_model extends CI_Model
{

    public function read_data()
    {

        $query = $this->db->query("SELECT * FROM `city_mode`");
        return $query;
    }

    public function read_ajax()
    {
        $query = $this->db->query("SELECT * FROM `city_mode`");
        echo json_encode($query->result());
    }
    public function insert()
    {

        $data = array ('description' => $this->input->post('city_name'));
        $this->db->insert('city_mode', $data);

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
        $this->db->delete('city_mode');

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
            FROM `city_mode` 
            WHERE `city_mode`.`id` = ?
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
        $dataCidade =array ('description' => $this->input->post('city_name'));

        $this->db->where('id', $this->input->post('city_id'));
        $this->db->update('city_mode', $dataCidade);
        $this->db->trans_complete();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }


}