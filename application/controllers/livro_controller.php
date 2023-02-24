<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class livro_controller extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Livro_mode', 'livro');
        $this->load->model('Autor_model', 'autor');
        $this->load->model('Category_model', 'category');
        $this->load->model('Editora_model', 'editora');
    }
    public function livro()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['content'] = 'livro_view';
            $data['read_data'] = $this->livro->read_data();
            $data['read_category'] = $this->category->read_data();
            $data['read_autor'] = $this->autor->read_data();
            $data['read_editora'] = $this->editora->read_data();
            $this->load->view('template', $data);
        }else{
            redirect('Welcome/index');
        }
    }

    public function read_ajax()
    {
        $result = $this->livro->read_data2();
        echo json_encode($result->result());
    }

    public function read_ajax2()
    {
        $result = $this->livro->read_data2();
        echo json_encode($result->result());
    }

    public function read_ajax3()
    {
        $result = $this->livro->read_data();
        echo json_encode($result->result());
    }


    public function created()
    {

        $result = $this->livro->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';

        if($result > 0){
            $msg['success'] = true;
            $msg['books_id'] = $result;
        }
        echo json_encode($msg);

    }

    public function get(){
        $result = $this->livro->get();
        echo json_encode($result);
    }


    public function update(){

        $result = $this->livro->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if($result > 0){
            $msg['success'] = true;
            $msg['books_id'] = $result;
        }
        echo json_encode($msg);
    }

    public function delet_ajax(){
        $result =  $this->livro->delet();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
}