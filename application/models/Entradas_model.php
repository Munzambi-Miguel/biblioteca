<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Entradas_model extends CI_Model
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
             (`books_mode`.`copy_books` - `management_mode`.`quant`) AS `quants`,
            `management_mode`.`books_id`,
            `management_mode`.`quant`,
            `books_mode`.`barcode`, 
            `books_mode`.`title`,
            `books_mode`.`copy_books`,
            `books_mode`.`date_record`,
            `employer_mode`.`name`,
            `employer_mode`.`Genero`, 
            `employer_mode`.`tipo`,
            IF(`employer_mode`.`tipo` = '1','Funcionário','Administrador') as `tipo_funcionario`
            FROM `management_mode` 
            JOIN `books_mode` ON `books_mode`.`id` = `management_mode`.`books_id` 
            JOIN `employer_mode` ON `employer_mode`.`id` = `management_mode`.`employer_mode_id`
            WHERE `management_mode`.`type_entity` = '1' AND `management_mode`.`estado` = '0'  ORDER BY id DESC

        ");
        return $query;

    }

    public function get($data1, $data2 , $id)
    {


        if ($id != -1) {
            $query = $this->db->query("
                SELECT 
                `management_mode`.`id`,
                `management_mode`.`type_entity`,
                `management_mode`.`employer_mode_id`,
                `management_mode`.`employer_user_id`,
                `management_mode`.`data_time`,
                IFNULL(IF(`management_mode`.`value` = '',NULL,`management_mode`.`value`),'<span style=\"color: #aaaaaa\">0,000.00</span>') AS `value`, 
                IFNULL(IF(`management_mode`.`descriction` = '',NULL,`management_mode`.`descriction`),'<span style=\"color: #aaaaaa\">Não foi inserido os motivos de entrada</span>') AS `detalhes`,
                 (`books_mode`.`copy_books` - `management_mode`.`quant`) AS `quants`,
                `management_mode`.`books_id`,
                `management_mode`.`quant`,
                `books_mode`.`barcode`, 
                `books_mode`.`title`,
                `books_mode`.`copy_books`,
                `books_mode`.`date_record`,
                `employer_mode`.`name`,
                `employer_mode`.`Genero`, 
                `employer_mode`.`tipo`,
                IF(`employer_mode`.`tipo` = '1','Funcionário','Administrador') as `tipo_funcionario`
                FROM `management_mode` 
                JOIN `books_mode` ON `books_mode`.`id` = `management_mode`.`books_id` 
                JOIN `employer_mode` ON `employer_mode`.`id` = `management_mode`.`employer_mode_id`
                WHERE `management_mode`.`type_entity` = '1' AND `management_mode`.`estado` = '0'             
                AND DATE(`management_mode`.`data_time`) BETWEEN  DATE('" . $data1 . "') AND DATE('" . $data2 . "')  AND  (`management_mode`.`employer_user_id` = '" . $id . "')
                ORDER BY id DESC
    
            ");

        } else if($data1 != '' & $data2 != ''){

            $query = $this->db->query("
                SELECT 
                `management_mode`.`id`,
                `management_mode`.`type_entity`,
                `management_mode`.`employer_mode_id`,
                `management_mode`.`employer_user_id`,
                `management_mode`.`data_time`,
                IFNULL(IF(`management_mode`.`value` = '',NULL,`management_mode`.`value`),'<span style=\"color: #aaaaaa\">0,000.00</span>') AS `value`, 
                IFNULL(IF(`management_mode`.`descriction` = '',NULL,`management_mode`.`descriction`),'<span style=\"color: #aaaaaa\">Não foi inserido os motivos de entrada</span>') AS `detalhes`,
                 (`books_mode`.`copy_books` - `management_mode`.`quant`) AS `quants`,
                `management_mode`.`books_id`,
                `management_mode`.`quant`,
                `books_mode`.`barcode`, 
                `books_mode`.`title`,
                `books_mode`.`copy_books`,
                `books_mode`.`date_record`,
                `employer_mode`.`name`,
                `employer_mode`.`Genero`, 
                `employer_mode`.`tipo`,
                IF(`employer_mode`.`tipo` = '1','Funcionário','Administrador') as `tipo_funcionario`
                FROM `management_mode` 
                JOIN `books_mode` ON `books_mode`.`id` = `management_mode`.`books_id` 
                JOIN `employer_mode` ON `employer_mode`.`id` = `management_mode`.`employer_mode_id`
                WHERE `management_mode`.`type_entity` = '1' AND `management_mode`.`estado` = '0'             
                AND `management_mode`.`data_time` BETWEEN  '" . $data1 . "' AND  '" . $data2 . "' 
                ORDER BY id DESC
    
            ");
        }else{
            $query = $this->db->query("
                SELECT 
                `management_mode`.`id`,
                `management_mode`.`type_entity`,
                `management_mode`.`employer_mode_id`,
                `management_mode`.`employer_user_id`,
                `management_mode`.`data_time`,
                IFNULL(IF(`management_mode`.`value` = '',NULL,`management_mode`.`value`),'<span style=\"color: #aaaaaa\">0,000.00</span>') AS `value`, 
                IFNULL(IF(`management_mode`.`descriction` = '',NULL,`management_mode`.`descriction`),'<span style=\"color: #aaaaaa\">Não foi inserido os motivos de entrada</span>') AS `detalhes`,
                 (`books_mode`.`copy_books` - `management_mode`.`quant`) AS `quants`,
                `management_mode`.`books_id`,
                `management_mode`.`quant`,
                `books_mode`.`barcode`, 
                `books_mode`.`title`,
                `books_mode`.`copy_books`,
                `books_mode`.`date_record`,
                `employer_mode`.`name`,
                `employer_mode`.`Genero`, 
                `employer_mode`.`tipo`,
                IF(`employer_mode`.`tipo` = '1','Funcionário','Administrador') as `tipo_funcionario`
                FROM `management_mode` 
                JOIN `books_mode` ON `books_mode`.`id` = `management_mode`.`books_id` 
                JOIN `employer_mode` ON `employer_mode`.`id` = `management_mode`.`employer_mode_id`
                WHERE `management_mode`.`type_entity` = '1' AND `management_mode`.`estado` = '0' 
                ORDER BY id DESC LIMIT 20;
    
            ");
        }

        // $result = $this->db->query($query);

        return $query;
    }

    public function delet()
    {
        $id = $this->input->post('id');
        $this->value = '3';

        $data = array(
            'type_entity' => $this->value,
            'delete_descricao' => $this->input->post('description')
        );
        $this->db->trans_start();
        $this->db->where('id', $id);
        $this->db->update('management_mode', $data);
        $this->db->trans_complete();

        $this->db->trans_start();
        $idB = $this->input->post('books_id');
        $dataBooks = array(
            'copy_books' => $this->input->post('item_qt')
        );

        $this->db->where('id', $idB);
        $this->db->update('books_mode', $dataBooks);
        $this->db->trans_complete();

        return true;

    }

}
