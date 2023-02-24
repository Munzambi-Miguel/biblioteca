<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 11/07/2019
 * Time: 14:15
 */

class pdf_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Entradas_model', 'entradas');
        $this->load->model('Saidas_model', 'saidas');
    }

    public function pdf()
    {
        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');
        $id = $this->input->get('SN');
        $data['titlePage'] = 'RELATÓRIO DETALHADO DE ENTRADA DE LIVROS';
        $data['entradas'] = $this->entradas->get($dataInicial, $dataFinal, $id);
        $this->load->view('print_pdf.php', $data);

    }

    public function saida_livros()
    {
        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');
        $id = $this->input->get('SN');
        $data['titlePage'] = 'RELATÓRIO DETALHADO DE SAIDAS DE LIVROS';
        $data['entradas'] = $this->saidas->get($dataInicial, $dataFinal, $id);
        $this->load->view('printSaidas_pdf.php', $data);

    }

    public function saida_retatorios()
    {


    }

    // http://www.muhammad.com/index.php?id=<?php echo $Result->ad_id();(fim php)

}

