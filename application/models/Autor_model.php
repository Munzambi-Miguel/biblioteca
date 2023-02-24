<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 19/06/2019
 * Time: 23:21
 */

class Autor_model extends CI_Model
{

    public function read_data()
    {
        $query = $this->db->query("
            SELECT 
           `autor_mode`.`id`,
           `autor_mode`.`name`,
            IFNULL(`autor_mode`.`description`,'<span style=\"color: #aaaaaa\">Sem Conteudo</span>') AS `description`,
           `autor_mode`.`genero`,
           `phone_number`.`id` AS num_id,
            IFNULL(`phone_number`.`number`,'<span style=\"color: #aaaaaa\">Sem Conteudo</span>') AS `number`     
            FROM `autor_mode` 
            LEFT JOIN `phone_number` 
            ON `phone_number`.`autor_mode_id` = `autor_mode`.`id` 
            WHERE 1 ORDER BY `autor_mode`.`id` DESC            
            "
        );
        return $query;
    }

    public function insert()
    {

        $data = array(
            'name' => $this->input->post('autor_name'),
            'description' => $this->input->post('autor_description'),
            'genero' => $this->input->post('autor_generos')

        );
        $this->db->trans_start();
        $this->db->insert('autor_mode', $data);
        $this->autor_id = $this->db->insert_id();
        $this->db->trans_complete();

        if ($this->input->post('autor_number') != "") {
            $dataTelefone = array(
                'number' => $this->input->post('autor_number'),
                'autor_mode_id' => $this->autor_id
            );

            $this->db->insert('phone_number', $dataTelefone);
        }

        $this->db->where('number','');
        $this->db->delete('phone_number');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delet()
    {
        $id = $this->input->post('id');

        $this->db->where('autor_mode_id', $id);
        $this->db->delete('phone_number');

        $this->db->where('id', $id);
        $this->db->delete('autor_mode');

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
           `autor_mode`.`id`,
           `autor_mode`.`name`,
           `autor_mode`.`description`,
           `autor_mode`.`genero`,
           `phone_number`.`id` AS num_id,
           `phone_number`.`number`     
            FROM `autor_mode` 
            LEFT JOIN `phone_number` 
            ON `phone_number`.`autor_mode_id` = `autor_mode`.`id` 
            WHERE `autor_mode`.`id` = ?
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
        $updateData = array(
            'name' => $this->input->post('autor_name'),
            'description' => $this->input->post('autor_description'),
            'genero' => $this->input->post('autor_generos')

        );

        $this->db->where('id', $this->input->post('autor_id'));
        $this->db->update('autor_mode', $updateData);
        $this->db->trans_complete();

        if ($this->input->post('phone_id') > 0 && ($this->input->post('autor_number') != '')) {

            $this->db->trans_start();
            $dataPhone = array(
                'number' => $this->input->post('autor_number')
            );
            $this->db->where('id', $this->input->post('phone_id'));
            $this->db->update('phone_number', $dataPhone);
            $this->db->trans_complete();
        } else if ($this->input->post('autor_number') != '') {

            $this->db->trans_start();
            $dataTelefone = array(
                'number' => $this->input->post('autor_number'),
                'autor_mode_id' => $this->input->post('autor_id')
            );
            $this->db->insert('phone_number', $dataTelefone);
            $this->db->trans_complete();
        } else {
            $this->db->where('autor_mode_id', $this->input->post('autor_id'));
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