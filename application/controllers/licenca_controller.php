<?php
/**
 * Created by PhpStorm.
 * User: hdglo
 * Date: 16/07/2019
 * Time: 03:08
 */

class licenca_controller extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();


    }

    public function licenca()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['content'] = 'licenca';
            $this->load->view('template', $data);
        }else{
            redirect('');
        }

    }


}