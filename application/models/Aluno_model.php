<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Aluno_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    public function read_data()
    {

        $query = $this->db->query("
              SELECT `employer_mode`.`id`,
                `employer_mode`.`name`,
                `employer_mode`.`Genero`,
                `employer_mode`.`tipo`, 
                `employer_mode`.`adress_mode_id`,
                 IFNULL(IF(`employer_mode`.`num_bi` = '',NULL,`employer_mode`.`num_bi`),'<span style=\"color: #aaaaaa\">Não foi inserido o nº BI / Nº Estudante</span>') AS `num_bi`, 
                 IFNULL(IF(`adress_mode`.`description` = '',NULL,`adress_mode`.`description`),'<span style=\"color: #aaaaaa\">Não foi inserido o endereço</span>') AS `description`,
                `adress_mode`.`city_mode_id`,
                 IFNULL(IF(`city_mode`.`description` = '',NULL,`city_mode`.`description`),'<span style=\"color: #aaaaaa\">Não foi inserido o nome do Bairro</span>')  as `city_descriptio`,
                 IFNULL(IF(`phone_number`.`number` = '',NULL,`phone_number`.`number`),'<span style=\"color: #aaaaaa\">Não foi inserido o nº de telefone</span>') AS `number`
              FROM `employer_mode` 
              LEFT JOIN `adress_mode` ON `adress_mode`.`id` = `employer_mode`.`adress_mode_id` 
              LEFT JOIN `city_mode` ON `city_mode`.`id` = `adress_mode`.`city_mode_id` 
              LEFT JOIN `phone_number` ON `phone_number`.`employer_mode_id` = `employer_mode`.`id`
              WHERE `employer_mode`.`tipo` = '0' ORDER BY id DESC
        ");

        return $query;

    }

    public function insert()
    {
        if ($this->input->post('emp_city') != -1) {
            $dataAdress = array(
                'description' => $this->input->post('emp_description'),
                'city_mode_id' => $this->input->post('emp_city')
            );
            $this->db->trans_start();
            $this->db->insert('adress_mode', $dataAdress);
            $this->adress_id = $this->db->insert_id();
            $this->db->trans_complete();
        }
        // As
        $this->db->trans_start();

        if ($this->input->post('emp_bi') != '') {
            $data = array(
                'name' => $this->input->post('emp_name'),
                'Genero' => $this->input->post('emp_genero'),
                'tipo' => '0',
                'adress_mode_id' => $this->adress_id,
                'num_bi' => $this->input->post('emp_bi')
            );
        } else if ($this->input->post('emp_city') != -1) {
            $data = array(
                'name' => $this->input->post('emp_name'),
                'Genero' => $this->input->post('emp_genero'),
                'tipo' => $this->input->post('emp_tipe'),
                'adress_mode_id' => $this->adress_id
            );
        } else {
            $data = array(
                'name' => $this->input->post('emp_name'),
                'Genero' => $this->input->post('emp_genero'),
                'tipo' => $this->input->post('emp_tipe')
            );
        }

        $this->db->insert('employer_mode', $data);
        $this->employer_id = $this->db->insert_id();
        $this->db->trans_complete();

        if ($this->input->post('emp_numeber') != '') {
            $dataTelefone = array(
                'number' => $this->input->post('emp_numeber'),
                'employer_mode_id' => $this->employer_id
            );
            $this->db->insert('phone_number', $dataTelefone);
        }

        if ($this->input->post('emp_username') != '' &&
            $this->input->post('emp_password') != '') {

            $dataconta = array(
                'user_name' => $this->input->post('emp_username'),
                'password' => $this->encryption->encrypt($this->input->post('emp_password')),
                'employer_mode_id' => $this->employer_id
            );
            $this->db->insert('section_mode', $dataconta);

        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }


    public function update()
    {
        //
        $this->db->trans_start();
        $dataAdress = array(
            'description' => $this->input->post('emp_description'),
            'city_mode_id' => $this->input->post('emp_city')
        );
        if ($this->input->post('adress_id') != '') {
            $this->db->where('id', $this->input->post('adress_id'));
            $this->db->update('adress_mode', $dataAdress);
            $this->adress_id = $this->input->post('adress_id');
            $this->db->trans_complete();
        } else {

            $this->db->insert('adress_mode', $dataAdress);
            $this->adress_id = $this->db->insert_id();
            $this->db->trans_complete();
        }

        //
        $this->db->trans_start();
        if ($this->input->post('emp_bi') != '') {
            $data = array(
                'name' => $this->input->post('emp_name'),
                'Genero' => $this->input->post('emp_genero'),
                'tipo' => '0',
                'adress_mode_id' => $this->adress_id,
                'num_bi' => $this->input->post('emp_bi')
            );
        } else {
            $data = array(
                'name' => $this->input->post('emp_name'),
                'Genero' => $this->input->post('emp_genero'),
                'tipo' => '0',
                'adress_mode_id' => $this->adress_id,
                'num_bi' => 'NULL'
            );
        }

        $this->db->where('id', $this->input->post('emplory_id'));
        $this->db->update('employer_mode', $data);
        $this->db->trans_complete();

        //


        //
        $dataconta = array(
            'user_name' => $this->input->post('emp_username'),
            'password' => $this->encryption->encrypt($this->input->post('emp_password')),
            'employer_mode_id' => $this->input->post('emplory_id')
        );
        if ($this->input->post('user_id') != '') {
            $this->db->where('id', $this->input->post('user_id'));
            $this->db->update('section_mode', $dataconta);
        } else if ($this->input->post('emp_username') != '' && $this->input->post('emp_password') != '') {
            $this->db->insert('section_mode', $dataconta);
        }


        if ($this->input->post('phone_id') > 0 && ($this->input->post('emp_numeber') != '')) {

            $this->db->trans_start();
            $dataPhone = array(
                'number' => $this->input->post('emp_numeber')
            );
            $this->db->where('id', $this->input->post('phone_id'));
            $this->db->update('phone_number', $dataPhone);
            $this->db->trans_complete();

        } else if ($this->input->post('emp_numeber') != '') {

            $this->db->trans_start();
            $dataTelefone = array(
                'number' => $this->input->post('emp_numeber'),
                'employer_mode_id' => $this->input->post('emplory_id')
            );
            $this->db->insert('phone_number', $dataTelefone);
            $this->db->trans_complete();
        } else {
            $this->db->where('employer_mode_id', $this->input->post('emplory_id'));
            $this->db->delete('phone_number');
        }

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
           SELECT `employer_mode`.`id`,
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
                  `phone_number`.`id` AS `number_id`, 
                  `section_mode`.`id` AS `id_section`,
                  `section_mode`.`user_name`,
                  `section_mode`.`password` 
           FROM   `employer_mode` 
           LEFT JOIN `adress_mode` ON `adress_mode`.`id` = `employer_mode`.`adress_mode_id` 
           LEFT JOIN `city_mode` ON `city_mode`.`id` = `adress_mode`.`city_mode_id` 
           LEFT JOIN `phone_number` ON `phone_number`.`employer_mode_id` = `employer_mode`.`id`
           LEFT JOIN `section_mode` ON `section_mode`.`employer_mode_id` = `employer_mode`.`id`
           WHERE `employer_mode`.`tipo` = '0' AND `employer_mode`.`id` = ?
        ";

        $result = $this->db->query($query, $id);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function delet()
    {
        $id = $this->input->post('id');
        $this->value = '-1';

        $data = array(
            'tipo' => $this->value
        );
        $this->db->trans_start();
        $this->db->where('id', $id);
        $this->db->update('employer_mode', $data);
        $this->db->trans_complete();
        return true;
    }

}
