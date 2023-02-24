<?php
/**
 * Created by PhpStorm.
 * User: Glory Miguel
 * Date: 11/07/2019
 * Time: 14:07
 */

$this->load->library('m_pdf');
$html0 = "
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>

    <style>
    
        .max-espaco{             
             width: 250px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; direction: ltr;
        }
     
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        *:before, *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', 'Helvetica', 'Roboto', 'Arial', sans-serif;
            color: #314049;
        }

        a {
            color: #337aa8;
        }
        a:hover, a:focus {
            color: #4b8ab2;
        }

        .container {
            margin: 5% 3%;
        }
        @media (min-width: 48em) {
            .container {
                margin: 2%;
            }
        }
        @media (min-width: 75em) {
            .container {
                margin: 2em auto;
                max-width: 75em;
            }
        }

        .responsive-table {
            width: 100%;
            margin-bottom: 1.5em;
            border-spacing: 0;
        }

        @media (min-width: 48em) {
            .responsive-table {
                font-size: 0.9em;
            }
        }

        @media (min-width: 62em) {
            .responsive-table {
                font-size: 1em;
            }
        }

        .responsive-table thead {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            /* IE6, IE7 */
            padding: 0;
            border: 0;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        @media (min-width: 48em) {
            .responsive-table thead {
                position: relative;
                clip: auto;
                height: auto;
                width: auto;
                overflow: auto;
            }
        }
        .responsive-table thead th {
            background-color: #1d96b2;
            border: 1px solid #1d96b2;
            font-weight: normal;
            text-align: center;
            color: white;
        }
        .responsive-table thead th:first-of-type {
            text-align: left;
        }
        .responsive-table tbody,
        .responsive-table tr,
        .responsive-table th,
        .responsive-table td {
            display: block;
            padding: 0;
            text-align: left;
            white-space: normal;
        }
        @media (min-width: 48em) {
            .responsive-table tr {
                display: table-row;
            }
        }
        .responsive-table th,
        .responsive-table td {
            padding: 0.5em;
            vertical-align: middle;
        }
        @media (min-width: 30em) {
            .responsive-table th,
            .responsive-table td {
                padding: 0.75em 0.5em;
            }
        }
        @media (min-width: 48em) {
            .responsive-table th,
            .responsive-table td {
                display: table-cell;
                padding: 0.5em;
            }
        }
        @media (min-width: 62em) {
            .responsive-table th,
            .responsive-table td {
                padding: 0.75em 0.5em;
            }
        }
        @media (min-width: 75em) {
            .responsive-table th,
            .responsive-table td {
                padding: 0.75em;
            }
        }
        .responsive-table caption {
            margin-bottom: 1em;
            font-size: 1em;
            font-weight: bold;
            text-align: center;
        }
        @media (min-width: 48em) {
            .responsive-table caption {
                font-size: 1.5em;
            }
        }
        .responsive-table tfoot {
            font-size: 0.8em;
            font-style: italic;
        }
        @media (min-width: 62em) {
            .responsive-table tfoot {
                font-size: 0.9em;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody {
                display: table-row-group;
            }
        }
        .responsive-table tbody tr {
             margin-bottom: 1em;
        }
        @media (min-width: 48em) {
            .responsive-table tbody tr {
                display: table-row;
                border-width: 1px;
            }
        }
        .responsive-table tbody tr:last-of-type {
             margin-bottom: 0;
        }
        @media (min-width: 48em) {
            .responsive-table tbody tr:nth-of-type(even) {
                background-color: rgba(94, 93, 82, 0.1);
            }
        }
        .responsive-table tbody th[scope='row'] {
            background-color: #1d96b2;
            color: white;
        }
        @media (min-width: 30em) {
            .responsive-table tbody th[scope='row'] {
                border-left: 1px solid #1d96b2;
                border-bottom: 1px solid #1d96b2;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody th[scope='row'] {
                background-color: transparent;
                color: #5e5d52;
                text-align: left;
            }
        }
        .responsive-table tbody td {
            text-align: right;
        }
        @media (min-width: 48em) {
            .responsive-table tbody td {
                border-left: 1px solid #1d96b2;
                border-bottom: 1px solid #1d96b2;
                text-align: center;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody td:last-of-type {
                border-right: 1px solid #1d96b2;
            }
        }
        .responsive-table tbody td[data-type='currency'] {
            text-align: right;
        }
        .responsive-table tbody td[data-title]:before {
            content: attr(data-title);
            float: left;
            font-size: 0.8em;
            color: rgba(94, 93, 82, 0.75);
        }
        @media (min-width: 30em) {
            .responsive-table tbody td[data-title]:before {
                font-size: 0.9em;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody td[data-title]:before {
                content: none;
            }
        }    
        .row{
            padding: 10px;
            border-bottom: 1px solid rgba(28,136,234,0.08);  
            border-right: 1px solid rgba(238,238,238,0.13);
           /* border-top: 1px solid rgba(28,136,234,0.08); */
            border-spacing: 0px; 
        }
        
    </style>
</head>
</head>
<body>

<span style='font-size: 14px;'>Biblioteca Simões <br><b>" . $titlePage . "</b></span><br>    

";
$hr = '<hr>';
$hr2 = '<hr class="footer-element">';

foreach ($entradas->result_array() as $row) {

    ++$cont;
    $valor += $row['value'];
    $lista .= '<tr>' .
        '<td  style="text-align: right; padding: 10px; border-left: 1px solid rgba(238,238,238,0.13); "  class="row">' . $cont . '</td>' .
        '<td style="text-align: left; max-width: 100px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; direction: 1tr;"  class="row">' . $row['name'] . '</td>' .
        '<td style="text-align: right;"  class="row" >' . $row['quant'] . '</td>' .
        '<td  style="text-align: left; "  class="row">' . $row['data_registada'] . '</td>' .
        '<td  style="text-align: left; "  class="row">' . $row['data_time'] . '</td>' .
        '<td style="text-align: right; width: 150px" class="row">' . $row['value'] . ' Akz</td>' .
        '<td style="text-align: left; min-width: 200px;"  class="row"><div style="overflow: hidden;">' . $row['title'] . '</div></td>' ;
};
$html = "
   
    <table style='border-spacing: 0px; margin-top: 10px; margin-bottom: 10px'  width='1060' align='left' >
       
       <tr style='background-color: rgba(28,136,234,0.42); color: #000 '>
       
       <th style='width: 50px; text-align: left'>#</th>
            <th style=' padding: 10px;  text-align: left'>Estudante</th>
            <th style=' padding: 10px; width: 100px;  text-align: left'>Quant</th>
            <th style=' padding: 10px; width: 110px;  text-align: left'>1ª Data</th>
            <th style=' padding: 10px; width: 110px;  text-align: left'>2ª Data</th>
            <th  style=' padding: 10px;  text-align: left'>Valor</th>
            <th  style=' padding: 10px;  text-align: left' >Titulo do Livro</th>     
       </tr>
      
      <!---Carregar os dados da tabela---->
       " . $lista . "

      </table>
      ";

$html2 = "
<div style='position: absolute; bottom: 30px; left: 0px; margin-left: 60px;  margin-right: 60px '>
<hr>
<span style='font-size: 9px; '>Total.: " . $valor . ".00 Akz </span><br>
<span style='font-size: 9px; '>Data.: " . date('d-m-Y H:i:s') . " Pelo Sr. ".$this->session->userdata('name')."</span>
</div>

</body>
</html>
";

$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$css = file_get_contents("css/estilo.css");
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML(
    $html0 .
    $html .

    $html2
);
$mpdf->Output();