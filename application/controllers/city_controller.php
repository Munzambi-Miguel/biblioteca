<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 24/06/2019
 * Time: 22:33
 */

class city_controller extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('City_model', 'city');
    }


    public function read_ajax()
    {
        $result = $this->city->read_data();
        echo json_encode($result->result());
    }

    public function create_city()
    {
        $result =  $this->city->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function delet_ajax(){
        $result = $this->city->delet();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function get(){
        $result = $this->city->get();
        echo json_encode($result);
    }

    public function update(){

        $result = $this->city->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }


}