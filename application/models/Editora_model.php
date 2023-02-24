<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 19/06/2019
 * Time: 23:23
 */

class Editora_model extends CI_Model
{

    public function read_data()
    {
        $query = $this->db->query("
            SELECT 
            `edition_mode`.`id`,
            `edition_mode`.`name`,
            IFNULL(`edition_mode`.`description`,'<span style=\"color: #aaaaaa\">Sem Conteudo</span>') AS `description`,
            `phone_number`.`id` as num_id,
            IFNULL(`phone_number`.`number`,'<span style=\"color: #aaaaaa\">Sem Conteudo</span>') as `number`
            FROM `edition_mode` 
            LEFT JOIN `phone_number` 
            ON `phone_number`.`edition_mode_id` = `edition_mode`.`id` 
            WHERE 1 ORDER BY `edition_mode`.`id` DESC
        ");
        return $query;
    }

    public function insert()
    {

        $data = array (
            'name' => $this->input->post('editora_name'),
            'description' => $this->input->post('editora_descricao')

        );
        $this->db->trans_start();
        $this->db->insert('edition_mode', $data);
        $this->editora_id = $this->db->insert_id();
        $this->db->trans_complete();

        $dataTelefone = array(
            'number' => $this->input->post('number_phone'),
            'edition_mode_id' => $this->editora_id
        );

        $this->db->insert('phone_number', $dataTelefone);


        $this->db->where('number','');
        $this->db->delete('phone_number');

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delet()
    {
        $id = $this->input->post('id');

        $this->db->where('edition_mode_id', $id);
        $this->db->delete('phone_number');

        $this->db->where('id', $id);
        $this->db->delete('edition_mode');

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
            SELECT 
            `edition_mode`.`id`,
            `edition_mode`.`name`,
            `edition_mode`.`description` AS `description`,
            `phone_number`.`id` as num_id,
            `phone_number`.`number` AS `number`
            FROM `edition_mode` 
            LEFT JOIN `phone_number` 
            ON `phone_number`.`edition_mode_id` = `edition_mode`.`id` 
            WHERE `edition_mode`.`id` = ?
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
        $dataUpdate = array (
            'name' => $this->input->post('editora_name'),
            'description' => $this->input->post('editora_descricao')

        );

        $this->db->where('id', $this->input->post('editora_id'));
        $this->db->update('edition_mode', $dataUpdate);
        $this->db->trans_complete();

        if ($this->input->post('phone_id') > 0 && ($this->input->post('number_phone') != '')) {

            $this->db->trans_start();
            $dataPhone = array(
                'number' => $this->input->post('number_phone')
            );

            $this->db->where('id', $this->input->post('phone_id'));
            $this->db->update('phone_number', $dataPhone);
            $this->db->trans_complete();

        } else if ($this->input->post('number_phone') != '') {

            $this->db->trans_start();
            $dataTelefone = array(
                'number' => $this->input->post('number_phone'),
                'edition_mode_id' => $this->input->post('editora_id')
            );

            $this->db->insert('phone_number', $dataTelefone);
            $this->db->trans_complete();

        } else {
            $this->db->where('edition_mode_id', $this->input->post('editora_id'));
            $this->db->delete('phone_number');
        }

        $this->db->where('number','');
        $this->db->delete('phone_number');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

}