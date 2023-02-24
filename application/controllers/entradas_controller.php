<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class Entradas_controller extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Entradas_model', 'entradas');
        $this->load->model('Utilizador_model', 'm');


    }

    public function Entradas()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['read_funcionario'] = $this->m->read_data();

            $data['content'] = 'entradas';
            $this->load->view('template', $data);
        }else{
            redirect('Welcome/index');
        }
    }

    public function read_ajax()
    {
        $result = $this->entradas->read_data();
        echo json_encode($result->result());
    }

    public function created()
    {

        $result = $this->entradas->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);

    }

    public function get(){

        $data1 = $this->input->post('dataInical');
        $data2 = $this->input->post('dataFinal');
        $id = $this->input->post('funcionario_id');

        $result = $this->entradas->get($data1,$data2,$id);
        echo json_encode($result->result_array());
    }

    public function delet_ajax(){
        $result =  $this->entradas->delet();
        $msg['success'] = false;
        $msg['type'] = 'delect';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function lista_entadas(){

            $data1 = $this->input->post('dataInical');
        $data2 = $this->input->post('dataFinal');
        $id = $this->input->post('funcionario_id');

        $result = $this->entradas->get($data1,$data2,$id);
       // $result = $this->entradas->get();
        echo json_encode($result->result_array());
    }


}