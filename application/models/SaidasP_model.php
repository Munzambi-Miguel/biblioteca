<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class SaidasP_model extends CI_Model
{

    public function read_data()
    {
        /*
            Operação segura do codeIgniter
            ----------------------------------------------------------------------------------------------------

            $this->db->select('*');
            $this->db->from('management_mode');
            $this->db->join('books_mode', 'books_mode.id = management_mode.books_id', 'left');
            $this->db->join('employer_mode', 'employer_mode.id = management_mode.employer_mode_id');
            $this->db->where('type_entity', '1');
            $query = $this->db->get();
            ----------------------------------------------------------------------------------------------------
        */

        $query = $this->db->query("
            SELECT 
             `management_mode`.`id`,
             `management_mode`.`type_entity`,
             `management_mode`.`employer_mode_id`,
             `management_mode`.`employer_user_id`,
             `management_mode`.`data_time`,
             IFNULL(IF(`management_mode`.`value` = '',NULL,`management_mode`.`value`),'<span style=\"color: #aaaaaa\">0,000.00</span>') AS `value`, 
             IFNULL(IF(`management_mode`.`descriction` = '',NULL,`management_mode`.`descriction`),'<span style=\"color: #aaaaaa\">Não foi inserido os motivos de entrada</span>') AS `detalhes`,
             `management_mode`.`books_id`,
             `item_collection`.`quant`,
             `item_collection`.`id` AS `id_temCop`,
             `item_collection`.`books_mode_id` AS `books_mode_id`,
             `books_mode`.`barcode`, 
             `books_mode`.`title`,
             `books_mode`.`copy_books`,
             (`item_collection`.`quant` + `books_mode`.`copy_books`) AS `quantidadesTotal`,
             `books_mode`.`date_record`,
             `employer_mode`.`name`,
             `USER`.`name` AS `Funcionario`,
             `employer_mode`.`Genero`, 
             `employer_mode`.`tipo`,
             IF(`USER`.`tipo` = '1','Funcionário','Administrador') as `tipo_funcionario`
            FROM `management_mode` LEFT JOIN  `item_collection` ON `item_collection`.`management_mode_id` = `management_mode`.`id` 
            JOIN  `books_mode` ON `books_mode`.`id` = `item_collection`.`books_mode_id` 
            JOIN `employer_mode` ON `employer_mode`.`id` = `management_mode`.`employer_mode_id` 
            JOIN `employer_mode` `USER` ON `USER`.`id` =  `management_mode`.`employer_user_id`
            WHERE `management_mode`.`type_entity` = '2' AND  `item_collection`.`estado` = '0' 
            AND  CURRENT_TIMESTAMP >  `management_mode`.`data_time`
            ORDER BY id DESC
        ");
        return $query;

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
            'estado' => $this->value,
            'delete_descricao' => $this->input->post('description')
        );
        $this->db->trans_start();
        $this->db->where('id', $id);
        $this->db->update('item_collection', $data);
        $this->db->trans_complete();

        $this->db->trans_start();
        $idB = $this->input->post('item_id');

        $dataBooks = array(
            'copy_books' => $this->input->post('item_qt')
        );

        $this->db->where('id', $idB);
        $this->db->update('books_mode', $dataBooks);
        $this->db->trans_complete();

        return true;

    }



}
