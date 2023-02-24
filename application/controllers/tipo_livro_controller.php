<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 27/06/2019
 * Time: 09:37
 */

class tipo_livro_controller extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Category_model', 'categ');
    }


    public function read_ajax()
    {
        $result = $this->categ->read_data();
        echo json_encode($result->result());
    }

    public function create_tipo()
    {
        $result =  $this->categ->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function delet_ajax(){
        $result = $this->categ->delet();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function get(){
        $result = $this->categ->get();
        echo json_encode($result);
    }

    public function update(){

        $result = $this->categ->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}