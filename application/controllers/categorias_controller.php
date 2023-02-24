
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 24/06/2019
 * Time: 08:53
 */

class categorias_controller extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Autor_model', 'autores');
        $this->load->model('Editora_model', 'editora');
        $this->load->model('Category_model', 'category');
        $this->load->model('City_model', 'city');
    }



    public  function categorias(){

        if($this->session->userdata('user_name') != '') {
            $data['user_name_session'] = $this->session->userdata('user_name');

            $data['read_autores'] = $this->autores->read_data();
            $data['read_editora'] = $this->editora->read_data();
            $data['read_category'] = $this->category->read_data();
            $data['read_city'] = $this->city->read_data();
            $data['content'] = 'categorias_view.php';
            $this->load->view('template', $data);
        }else{
            redirect('Welcome/index');
        }

    }


}
