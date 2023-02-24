<?php
/**
 * Created by PhpStorm.
 * User: hdglo
 * Date: 02/08/2019
 * Time: 08:40
 *
 * Está classe tem como objectivo retornar o ficherio a ser inserido na base de dados
 * A biblioteca foi desenvolvido pelo Munzambi Miguel
 * Com objectivo de ajudar os outros programadores a inserir com facilidade a imagem
 * na base de dados.
 *
 * O inviar a informação no ajex manda como image
 */


include('database_connection.php');
$result = NULL;
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
                 IFNULL(IF(`phone_number`.`number` = '',NULL,`phone_number`.`number`),'<span style=\"color: #aaaaaa\">Não foi inserido o nº de telefone</span>') AS `number`,
                 (SELECT `image_mode`.`id` FROM `image_mode` WHERE `image_mode`.`books_id` = `books_mode`.`id` ORDER BY `image_mode`.`id` DESC  LIMIT 1 ) AS `image_model`
             
            FROM
            `books_mode` LEFT JOIN `autor_mode` ON `autor_mode`.`id` = `books_mode`.`autor_mode_id`
            LEFT JOIN `category_mode` ON `category_mode`.`id` = `books_mode`.`category_mode_id`
            LEFT JOIN `edition_mode` ON `edition_mode`.`id` = `books_mode`.`edition_mode_id`
            LEFT JOIN `phone_number` ON `phone_number`.`edition_mode_id` = `edition_mode`.`id` 
            WHERE `books_mode`.`estado` = '0' ORDER BY id DESC
";
$statement = $connect->prepare($query);
if ($statement->execute()) {
    $result = $statement->fetchAll();
}





