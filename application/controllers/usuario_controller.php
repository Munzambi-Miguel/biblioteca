<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class usuario_controller extends CI_Controller
{


    function __construct()
    {
        parent:: __construct();
        $this->load->model('Utilizador_model', 'ms');
        $this->load->model('City_model','city');

    }

    public function usuario()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['content'] = 'usuario_view';
            // $data['read_data'] = $this->ms->read_data();
            $data['read_city'] = $this->city->read_data();
            $this->load->view('template', $data);
        }else{
            redirect('');
        }
    }

    public function read_ajax()
    {
        $result = $this->ms->read_data();
        echo json_encode($result->result());
    }

    public function created()
    {

        $result = $this->ms->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);

    }

    public function get(){
        $result = $this->ms->get();
        echo json_encode($result);
    }

    public function update(){

        $result = $this->ms->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function delet_ajax(){
        $result =  $this->ms->delet();
        $msg['success'] = false;
        $msg['type'] = 'delect';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}