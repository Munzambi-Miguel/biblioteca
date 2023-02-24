<?php


class Livro_mode extends CI_Model
{


    public function read_data()
    {

        $query = $this->db->query("
            SELECT 
            `books_mode`.`id`,
            `books_mode`.`barcode`,
            `books_mode`.`title`,
            `books_mode`.`edition_mode_id`,
            `books_mode`.`descriptiom`,
            `books_mode`.`autor_mode_id`,
            `books_mode`.`category_mode_id`,
            `books_mode`.`copy_books`,
            `autor_mode`.`name` as name_actor,
            `autor_mode`.`description` as actor_description,
            `category_mode`.`description`as category_description,
            `edition_mode`.`name` as name_editora,
            `edition_mode`.`description` as editora_description,
             IFNULL(IF(`phone_number`.`number` = '',NULL,`phone_number`.`number`),
             '<span style=\"color: #aaaaaa\">Não foi inserido o nº de telefone</span>') AS `number`,
             (SELECT `image_mode`.`image` FROM `image_mode` WHERE `image_mode`.`books_id` = `books_mode`
             .`id` ORDER BY `image_mode`.`id` DESC  LIMIT 1 ) AS `image`
             
            FROM
            `books_mode` LEFT JOIN `autor_mode` ON `autor_mode`.`id` = `books_mode`.`autor_mode_id`
            LEFT JOIN `category_mode` ON `category_mode`.`id` = `books_mode`.`category_mode_id`
            LEFT JOIN `edition_mode` ON `edition_mode`.`id` = `books_mode`.`edition_mode_id`
            LEFT JOIN `phone_number` ON `phone_number`.`edition_mode_id` = `edition_mode`.`id` 
            WHERE `books_mode`.`estado` = '0' ORDER BY id DESC LIMIT 17
        ");

        return $query;

    }

    public function read_data2()
    {

        $query = $this->db->query("
            SELECT 
            `books_mode`.`id`,
            `books_mode`.`barcode`,
            `books_mode`.`title`,
            `books_mode`.`edition_mode_id`,
            `books_mode`.`descriptiom`,
            `books_mode`.`autor_mode_id`,
            `books_mode`.`category_mode_id`,
            `books_mode`.`copy_books`,
            `autor_mode`.`name` as name_actor,
            `autor_mode`.`description` as actor_description,
            `category_mode`.`description`as category_description,
            `edition_mode`.`name` as name_editora,
            `edition_mode`.`description` as editora_description,
             IFNULL(IF(`phone_number`.`number` = '',NULL,`phone_number`.`number`),
             '<span style=\"color: #aaaaaa\">Não foi inserido o nº de telefone</span>') AS `number`,
             (SELECT `image_mode`.`id` FROM `image_mode` WHERE `image_mode`
             .`books_id` = `books_mode`.`id` ORDER BY `image_mode`.`id` DESC  LIMIT 1 ) AS `image`
             
            
            FROM
            `books_mode` LEFT JOIN `autor_mode` ON `autor_mode`.`id` = `books_mode`.`autor_mode_id`
            LEFT JOIN `category_mode` ON `category_mode`.`id` = `books_mode`.`category_mode_id`
            LEFT JOIN `edition_mode` ON `edition_mode`.`id` = `books_mode`.`edition_mode_id`
            LEFT JOIN `phone_number` ON `phone_number`.`edition_mode_id` = `edition_mode`.`id` 
            WHERE `books_mode`.`estado` = '0' ORDER BY id DESC
        ");

        return $query;

    }


    public function insert()
    {

        $data = array(
            'barcode' => $this->input->post('books_barcode'),
            'title' => $this->input->post('books_title'),
            'edition_mode_id' => $this->input->post('books_editora'),
            'descriptiom' => $this->input->post('books_description'),
            'autor_mode_id' => $this->input->post('books_autor'),
            'category_mode_id' => $this->input->post('books_category'),
            'copy_books' => $this->input->post('books_numCopy')
        );

        $this->db->insert('books_mode', $data);

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }


    public function get()
    {
        $id = $this->input->post('id');
        $query = "
            SELECT 
                `books_mode`.`id`,
                `books_mode`.`barcode`,
                `books_mode`.`title`,
                `books_mode`.`edition_mode_id`,
                `books_mode`.`descriptiom`,
                `books_mode`.`autor_mode_id`,
                `books_mode`.`category_mode_id`,
                `books_mode`.`copy_books`,
                `autor_mode`.`name` as name_actor,
                `autor_mode`.`description` as actor_description,
                `category_mode`.`description`as category_description,
                `edition_mode`.`name` as name_editora,
                `edition_mode`.`description` as editora_description,
                `phone_number`.`number`
            FROM `books_mode` LEFT JOIN `autor_mode` ON `autor_mode`.`id` = `books_mode`.`autor_mode_id`
            LEFT JOIN `category_mode` ON `category_mode`.`id` = `books_mode`.`category_mode_id`
            LEFT JOIN `edition_mode` ON `edition_mode`.`id` = `books_mode`.`edition_mode_id`
            LEFT JOIN `phone_number` ON `phone_number`.`edition_mode_id` = `edition_mode`.`id`           
            WHERE `books_mode`.`id` = ?
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
        $data = array(
            'barcode' => $this->input->post('books_barcode'),
            'title' => $this->input->post('books_title'),
            'edition_mode_id' => $this->input->post('books_editora'),
            'descriptiom' => $this->input->post('books_description'),
            'autor_mode_id' => $this->input->post('books_autor'),
            'category_mode_id' => $this->input->post('books_category'),
            'copy_books' => $this->input->post('books_numCopy'),

        );

        $this->db->where('id', $this->input->post('books_id'));
        $this->db->update('books_mode', $data);
        $this->db->trans_complete();


        return $this->input->post('books_id');

    }

    public function delet()
    {
        $this->db->trans_start();
        $id = $this->input->post('id');


        $data = array(
            'estado' => '-1'
        );
        $this->db->where('id', $id);
        $this->db->update('books_mode', $data);
        $this->db->trans_complete();
        return true;
    }

}
