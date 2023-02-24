<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 10/03/2019
 * Time: 21:17
 */
class SaidasPrazo_controller extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('SaidasP_model', 'saidasp');

    }

    public function SaidasP()
    {
        if ($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');
            $data['content'] = 'saidas_ultrapacados';
            $this->load->view('template', $data);
        } else {
            redirect('Welcome/index');
        }
    }

    public function read_ajax()
    {
        $result = $this->saidasp->read_data();
        echo json_encode($result->result());
    }


    public function delet_ajax(){
        $result =  $this->saidasp->delet();
        $msg['success'] = false;
        $msg['type'] = 'delect';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function created()
    {

        $result = $this->saidasp->insert();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);

    }

    public function get()
    {
        $result = $this->saidasp->get();
        echo json_encode($result);
    }


}