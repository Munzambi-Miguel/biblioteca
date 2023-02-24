<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 27/06/2019
 * Time: 10:02
 */

class editora_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Editora_model', 'editora');
    }

    public function read_ajax()
    {
        $result = $this->editora->read_data();
        echo json_encode($result->result());
    }

    public function create_editora()
    {
        $result = $this->editora->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function delet_ajax(){
        $result = $this->editora->delet();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function get(){
        $result = $this->editora->get();
        echo json_encode($result);
    }

    public function update(){

        $result = $this->editora->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}