<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 21/06/2019
 * Time: 03:06
 */

class movimento_controller extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Livro_mode', 'livro');
        $this->load->model('Aluno_model', 'estudante');
        $this->load->model('Movimento_model', 'mv');
    }

    public function entrada()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['read_livros'] = $this->livro->read_data();
            $data['content'] = 'entrada_view';
            $this->load->view('template', $data);
        } else {
            redirect('Welcome/index');
        }
    }

    public function saida()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['read_livros'] = $this->livro->read_data();
            $data['read_aluno'] = $this->estudante->read_data();
            $data['content'] = 'saida_view';
            $this->load->view('template', $data);
        } else {
            redirect('Welcome/index');
        }
    }


    public function created()
    {
        $result = $this->mv->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }


    public function saida_view()
    {

        $result = $this->mv->insert_saida();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }


}