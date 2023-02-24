<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 21/06/2019
 * Time: 03:04
 */

class Movimento_model extends CI_Model
{

    public function read_data()
    {

        $query = $this->db->query("SELECT * FROM `category_mode` ");
        return $query;
    }

    public function insert()
    {

        $data = array(
            'type_entity' => '1',
            'employer_mode_id' => $this->session->userdata('id_employer'),
            'employer_user_id' => $this->session->userdata('id_employer'),
            'descriction' => $this->input->post('mov_desciptio'),
            'value' => $this->tiraMoeda($this->input->post('mov_multas')),
            'quant' => $this->input->post('mov_qt'),
            'books_id' => $this->input->post('mov_books')
        );
        $this->db->insert('management_mode', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delet()
    {
        $id = $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('category_mode');

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
            FROM `category_mode` 
            WHERE `category_mode`.`id` = ?
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
        $dataCateg = array('description' => $this->input->post('category_name'));

        $this->db->where('id', $this->input->post('category_id'));
        $this->db->update('category_mode', $dataCateg);
        $this->db->trans_complete();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function insert_saida()
    {
        $this->db->trans_start();

        $data = array(
            'type_entity' => '2',
            'employer_mode_id' => $this->input->post('aluno'),
            'employer_user_id' => $this->session->userdata('id_employer'),
            'descriction' => $this->input->post('descricao'),
            'value' => $this->tiraMoeda($this->input->post('valores')),
            'data_time' => $this->input->post('datatime') . ' ' . date('H:i:s'),
        );
        $this->db->insert('management_mode', $data);
        $this->autor_id = $this->db->insert_id();
        $this->db->trans_complete();

        $tableData = json_decode(stripcslashes($_POST['item']), TRUE);

        foreach ($tableData as $row) {
            if ($row['id'] != NULL && $row['quant'] != NULL) {
                if ($row['quant'] != 0) {

                    $dataAras = array(
                        'books_mode_id' => $row['id'],
                        'management_mode_id' => $this->autor_id,
                        'quant' => $row['quant']
                    );

                    $this->db->insert('item_collection', $dataAras);
                }
            }
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function tiraMoeda($valor)
    {
        $pontos = array(",");
        $result = str_replace($pontos, "", $valor);
        return $result;
    }

}