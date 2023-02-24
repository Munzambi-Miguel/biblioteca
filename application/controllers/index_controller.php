<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class index_controller extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Livro_mode', 'livro');
    }


    public function index()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['read_livros'] = $this->livro->read_data();
            $data['content'] = 'index';



            $this->load->view('template', $data);
        }else{
            redirect('Welcome/index');
        }
    }

}