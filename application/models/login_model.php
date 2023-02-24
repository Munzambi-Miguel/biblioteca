<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 03/07/2019
 * Time: 11:53
 */

class login_model extends CI_Model
{

    public function get()
    {
        $id =
        $query = "
            SELECT  
                `id`, 
                `user_name`,
                `password`, 
                `employer_mode_id`
            FROM `section_mode`
            WHERE `user_name` = ? AND `password` = ?
        ";

        $result = $this->db->query($query, $this->input->post('username'), $this->input->post('password'));

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function isSection()
    {

        $this->db->from('section_mode');
        $this->db->join('employer_mode', 'section_mode.employer_mode_id = employer_mode.id');
        $this->db->where('employer_mode.tipo !=', -1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function isUsername()
    {

        $this->db->from('section_mode');
        $this->db->join('employer_mode', 'section_mode.employer_mode_id = employer_mode.id');
        $this->db->where('section_mode.user_name', $this->input->post('username'));
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    public function islogin()
    {

        $query = "
           SELECT 
            	`section_mode`.`id`,
                `section_mode`.`user_name`,
                `section_mode`.`password` AS `password`,
                 `employer_mode`.`id` AS `id_employer`,
                  `employer_mode`.`name`,
                  `employer_mode`.`Genero`,
                  `employer_mode`.`tipo`, 
                  `employer_mode`.`adress_mode_id`,
                  `employer_mode`.`num_bi` AS `num_bi`, 
                  `adress_mode`.`description` AS `description`,
                  `adress_mode`.`city_mode_id`,
                  `adress_mode`.`id` AS `adress_id`,
                  `city_mode`.`description`  as `city_descriptio`,
                  `phone_number`.`number` AS `number`,
                  `phone_number`.`id` AS `number_id`
                  
           FROM   `employer_mode`          
           LEFT JOIN `adress_mode` ON `adress_mode`.`id` = `employer_mode`.`adress_mode_id` 
           LEFT JOIN `city_mode` ON `city_mode`.`id` = `adress_mode`.`city_mode_id` 
           LEFT JOIN `phone_number` ON `phone_number`.`employer_mode_id` = `employer_mode`.`id`
           LEFT JOIN `section_mode` ON `section_mode`.`employer_mode_id` = `employer_mode`.`id`
           WHERE `section_mode`.`user_name` = ? AND `employer_mode`.`tipo` != -1
        ";

        $result = $this->db->query($query,$this->input->post('username'));

        // , $this->input->post('password')
        if($result->num_rows() > 0 ){

            $rest = $result->row_array();
            if($this->encryption->decrypt($rest['password']) == $this->input->post('password')){
                return $result;
            }

        }
        return false;

    }
/*
    public function islogin()
    {

        $this->db->select('section_mode.id');
        $this->db->select('section_mode.user_name');
        $this->db->select('section_mode.password');
        $this->db->select('employer_mode.id AS id_employer');
        $this->db->select('employer_mode.name');
        $this->db->select('employer_mode.Genero');
        $this->db->select('employer_mode.tipo');
        $this->db->select('employer_mode.adress_mode_id');
        $this->db->select('employer_mode.num_bi AS num_bi');
        $this->db->select('adress_mode.description AS description');
        $this->db->select('adress_mode.city_mode_id');
        $this->db->select('city_mode.description  as city_descriptio');
        $this->db->select('phone_number.number AS number');
        $this->db->select('phone_number.id AS number_id');
        $this->db->from('employer_mode');
        $this->db->join('adress_mode', 'employer_mode.adress_mode_id = adress_mode.id', 'left');
        $this->db->join('city_mode', 'adress_mode.city_mode_id = city_mode.id', 'left');
        $this->db->join('phone_number', 'phone_number.employer_mode_id = employer_mode.id', 'left');
        $this->db->join('section_mode', 'section_mode.employer_mode_id = section_mode.id', 'left');

        $this->db->where('section_mode.user_name', $this->input->post('username'));
        //$this->db->where('tipo !=', -1);
        $query = $this->db->get();

        if($query->num_rows() > 0 ){
            $rest = $query->row_array();
            if($this->encryption->decrypt($rest['password']) == $this->input->post('password')){
                return $query;
            }
        }
        return $query;
    }
*/
}