<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Saidas_model extends CI_Model
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
                 DATE(`management_mode`.`data_time`) AS `data_time`,
                 DATE(`management_mode`.`data_registada`) AS `data_registada`,
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
            WHERE `management_mode`.`type_entity` = '2' AND `item_collection`.`estado` = '0' ORDER BY id DESC LIMIT 100;
        ");

        /// id_employer
        return $query;

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

    public function get($data1, $data2, $id)
    {

        if ($id != -1) {
            $query = $this->db->query("
                SELECT 
                     `management_mode`.`id`,
                     `management_mode`.`type_entity`,
                     `management_mode`.`employer_mode_id`,
                     `management_mode`.`employer_user_id`,
                     DATE(`management_mode`.`data_time`) AS `data_time`,
                     DATE(`management_mode`.`data_registada`) AS `data_registada`,
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
                WHERE `management_mode`.`type_entity` = '2' AND `management_mode`.`estado` = '0' AND `management_mode`.`data_time` > CURRENT_TIMESTAMP 
                AND `management_mode`.`data_time` BETWEEN  '" . $data1 . "' AND  '" . $data2 . "'  AND  (`management_mode`.`employer_user_id` = '" . $id . "')
                ORDER BY id DESC
            ");
        } else if ($data1 != '' & $data2 != '') {
            $query = $this->db->query("
                SELECT 
                     `management_mode`.`id`,
                     `management_mode`.`type_entity`,
                     `management_mode`.`employer_mode_id`,
                     `management_mode`.`employer_user_id`,
                     DATE(`management_mode`.`data_time`) AS `data_time`,
                     DATE(`management_mode`.`data_registada`) AS `data_registada`,
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
                WHERE `management_mode`.`type_entity` = '2' AND `management_mode`.`estado` = '0' AND `management_mode`.`data_time` > CURRENT_TIMESTAMP 
                AND `management_mode`.`data_time` BETWEEN  '" . $data1 . "' AND  '" . $data2 . "' 
                ORDER BY id DESC
            ");
        } else {
            $query = $this->db->query("
                SELECT 
                     `management_mode`.`id`,
                     `management_mode`.`type_entity`,
                     `management_mode`.`employer_mode_id`,
                     `management_mode`.`employer_user_id`,
                     DATE(`management_mode`.`data_time`) AS `data_time`,
                     DATE(`management_mode`.`data_registada`) AS `data_registada`,
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
                WHERE `management_mode`.`type_entity` = '2' AND `management_mode`.`estado` = '0' ORDER BY id DESC LIMIT 20;
            ");
        }

        return $query;

    }

}
