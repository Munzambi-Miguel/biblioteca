<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class aluno_controller extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Aluno_model', 'aluno');
        $this->load->model('City_model','city');

    }

    public function aluno()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['content'] = 'aluno';
            $data['read_city'] = $this->city->read_data();
            $this->load->view('template', $data);
        }else{
            redirect('Welcome/index');
        }
    }

    public function read_ajax()
    {
        $result = $this->aluno->read_data();
        echo json_encode($result->result());
    }

    public function created()
    {

        $result = $this->aluno->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);

    }

    public function get(){
        $result = $this->aluno->get();
        echo json_encode($result);
    }

    public function update(){

        $result = $this->aluno->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function delet_ajax(){
        $result =  $this->aluno->delet();
        $msg['success'] = false;
        $msg['type'] = 'delect';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }


}