<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 20/06/2019
 * Time: 05:33
 */
class login_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');//you can autoload this functions by configuring autoload.php in config directory
        $this->load->library('session');
        $this->load->library('encryption');
        $this->load->model('login_model', 'login');

    }

    public function index()
    {
        $this->load->view('login');
    }

    public function check_login()
    {

        $res = $this->login->islogin();

        if ($res->num_rows() > 0) {
            $rest = $res->row_array();
            $session_data = array(
                'id_section' => $rest['id'],
                'user_name' => $rest['user_name'],
                'password' => $rest['password'],
                'id_employer' => $rest['id_employer'],
                'name' => $rest['name'],
                'Genero' => $rest['Genero'],
                'tipo' => $rest['tipo'],
                'adress_mode_id' => $rest['adress_mode_id'],
                'num_bi' => $rest['num_bi'],
                'description' => $rest['description'],
                'city_mode_id' => $rest['city_mode_id'],
                'adress_id' => $rest['adress_id'],
                'city_descriptio' => $rest['city_descriptio'],
                'number' => $rest['number'],
                'number_id' => $rest['number_id']
            );

            $this->session->set_userdata($session_data);
            echo json_encode($res->row_array());
        } else {
            return false;
        }


    }

    public function veryfiUser()
    {
        $res = $this->login->isUsername();
        echo json_encode($res);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');

    }
}