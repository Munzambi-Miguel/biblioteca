<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 24/06/2019
 * Time: 23:02
 */

class autores_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Autor_model', 'autor');
    }




    public function read_ajax()
    {
        $result = $this->autor->read_data();
        echo json_encode($result->result());
    }

    public function create_autores(){
        $result =  $this->autor->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function delet_ajax(){
        $result =  $this->autor->delet();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function get(){
        $result = $this->autor->get();
        echo json_encode($result);
    }

    public function update(){

        $result = $this->autor->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}