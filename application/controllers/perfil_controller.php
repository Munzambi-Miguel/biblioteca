<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class perfil_controller extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Utilizador_model', 'ms');
        $this->load->model('City_model','city');

    }
    public function  perfil()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['password_session'] = $this->session->userdata('password');

            $data['nome_session'] = $this->session->userdata('name');
            $data['genero_session'] = $this->session->userdata('Genero');

            $data['cidadeID_session'] = $this->session->userdata('city_mode_id');


            $data['content'] = 'perfil_view.php';
            $data['read_data'] = $this->ms->read_data();
            $data['read_city'] = $this->city->read_data();
            $this->load->view('template', $data);
        }
    }

}