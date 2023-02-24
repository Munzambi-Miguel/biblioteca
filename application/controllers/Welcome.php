<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     *
     *  Index Page for this controller.
     *
     *  Maps to the following URL
     *    http://example.com/index.php/welcome
     *    - or -
     *    http://example.com/index.php/welcome/index
     *    - or -
     *  Since this controller is set as the default controller in
     *  config/routes.php, it's displayed at http://example.com/
     *
     *  So any other public methods not prefixed with an underscore will
     *  map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     *
     *
     */

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Livro_mode', 'livro');
        $this->load->model('login_model', 'section');
        $this->load->model('Utilizador_model', 'user');
    }

    public function index()
    {
        /**
         * CONTRATO DE PRESTAÇÃO DE SERVIÇOS E LICENCIAMENTO DE DIREITO DE USO DO SOFTWARE GESTÃO DE SALÃO DE BELEZA
         *
         * CONTRATANTE: _____________________, empresa de NIF:  ___________________,
         * com sede  _______________________________________, na cidade de __________________________,
         * neste ato representada pelo Sr. ________________________, angolano, casado, portador do BI nº ____________ .
         *
         * CONTRATADO: LIKIENDA, LDA, de NIF 5417074020, com sede no bº Futungo, Rua das casa Brancas, na
         * cidade de Luanda, neste ato representada pelo Sr. Gualter dos Santos Sebastião, angolano, solteiro,
         * portador do BI nº 000978662LA033, tem entre os mesmos, de maneira justa e acordada, o presente CONTRATO DE LICENÇA DE USO DE SOFTWARE E
         * PRESTAÇÃO DE SERVIÇOS POR PRAZO INDETERMINADO, ficando desde já aceito, pelas cláusulas abaixo descritas.
         *
         * CLÁUSULA 1ª – DO OBJETO
         */

        if ($this->section->isSection()) {
            $this->user->insertDefault();
            $this->load->view('login');
        } else if ($this->session->userdata('user_name') != '') {
            if ('2024-09-26' > date('Y-m-d')) {
                $data['user_name_session'] = $this->session->userdata('user_name');
                $data['read_livros'] = $this->livro->read_data();
                $data['content'] = 'index';
                $this->load->view('template', $data);
            } else {
                    $this->load->view('login');
            }


            /** O presente instrumento tem como objeto o direito de uso por prazo indeterminado, oneroso,
             * intransferível e não exclusivo de 01 (um) SOFTWARE SISTEMA DE GESTÃO DE SALÃO DE BELEZA de propriedade
             * do CONTRATADO para desempenho das atividades empresariais do CONTRATANTE, bem como a prestação de serviços.
             *
             * PARÁGRAFO PRIMEIRO: O objeto do presente instrumento com sua respectiva versão, será entregue o software
             * com todos os programas executáveis (códigos objetos).
             *
             * PARÁGRAFO SEGUNDO: Todas as características estruturais e funcionais com as especificações quanto à versão e
             *
             * potencialidades do software contratado, bem como as configurações mínimas de hardware necessárias ao apropriado
             * do software, estarão devidamente especificadas no “ANEXO A” que por sua vez faz parte integrante do presente contrato, estando a ele devidamente agrupado.
             *
             * PARÁGRAFO TERCEIRO: A partir da versão ora contratada, poderá o software vir a ter novas versões, resultantes de
             * modificações em suas atuais características, por razões técnicas de compatibilização com a evolução de seus recursos e
             * plataformas de geração e operação, e principalmente, objetivando a sua própria evolução tecnológica.
             *
             * PARÁGRAFO QUARTO: Fica estabelecido que as futuras versões, caso sejam de interesse do CONTRATANTE, serão objeto
             * de orçamento para sua prévia e expressa aprovação, caso o mesmo não possuir com o CONTRATADO o contrato de
             * personalização e/ou customização, caso possua, a atualização se dará sem ônus, mediante ao agendamento prévio efetuado.
             *
             * PARÁGRAFO QUINTO: Considerar-se-á como aceite de todos os termos deste contrato, o pagamento da fatura
             *
             * pelo CONTRATANTE, obrigando-se desde então as partes contratadas. O uso dos serviços ofertados
             * configurará a aceitação tácita dos termos contratuais estabelecidos neste instrumento.
             *
             * CLÁUSULA 2ª – DO PREÇO, FORMA DE PAGAMENTO
             *
             * O CONTRATANTE pagará ao CONTRATADO pela instalação e aquisição do sistema os valores descritos na *FATURA*.
             */
        } else {
            //redirect('');
            if ('2024-10-20' > date('Y-m-d'))
                $this->load->view('login');
        }
        /**
         * PARÁGRAFO PRIMEIRO: Obriga-se ainda o CONTRATANTE a pagar mensal, trimestral, semestral ou anualmente
         * ao CONTRATADO, referente taxa de manutenção mensal, equivalente a 4% do valor total do software.
         *
         * PARÁGRAFO SEGUNDO: O pagamento descrito no parágrafo anterior será realizado até o vencimento escolhido
         * de cada mês vincendo, com antecedência
         */


    }
}
