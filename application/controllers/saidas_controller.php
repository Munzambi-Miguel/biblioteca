<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class Saidas_controller extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Saidas_model', 'saidas');
        $this->load->model('Utilizador_model', 'm');

    }

    public function Saidas()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['content'] = 'saidas';
            $data['read_funcionario'] = $this->m->read_data();
            $this->load->view('template', $data);
        } else {
            redirect('Welcome/index');
        }
    }

    public function read_ajax()
    {
        $result = $this->saidas->read_data();
        echo json_encode($result->result());
    }

    public function delet_ajax(){
        $result =  $this->saidas->delet();
        $msg['success'] = false;
        $msg['type'] = 'delect';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function created()
    {

        $result = $this->saidas->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);

    }


    public function lista_entadas(){

        $data1 = $this->input->post('dataInical');
        $data2 = $this->input->post('dataFinal');
        $id = $this->input->post('funcionario_id');

        $result = $this->saidas->get($data1,$data2,$id);
        // $result = $this->entradas->get();
        echo json_encode($result->result_array());
    }



}