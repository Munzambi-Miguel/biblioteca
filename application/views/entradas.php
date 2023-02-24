<div id="page-wrapper">

    <style>

        .select2 * {
            padding-top: 1px !important;
            padding-bottom: 30px !important;

        }

        .pagination {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
            font-size: 10px !important;
        }

        #data-modal_paginate * {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        #data-modal_length {
            display: none !important;
        }

        .textos:focus, input:focus, select:focus {
            box-shadow: none;
            border: none;
            outline: 0;

        }

        .textos {
            background-color: transparent !important;
            border: transparent !important;
            width: 100px !important;
            height: 20px !important;
        }

    </style>


    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissable text-left"
                 style="display: none; position: absolute; top: 0px; right: 0px">
            </div>
            <div class="alert alert-info alert-dismissable text-left"
                 style="display: none; position: absolute; top: 0px; right: 0px">
            </div>
            <div class="alert alert-warning alert-dismissable text-left"
                 style="display: none; position: absolute; top: 0px; right: 0px">
            </div>
            <div class="alert alert-danger alert-dismissable text-left"
                 style="display: none; position: absolute; top: 0px; right: 0px">
            </div>
        </div>
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Relatorio / <b>Entrada</b></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- /.col-lg-8 -->
    <div class="row">

        <div class="col-sm-12">
            <div class="panel-default">
                <div class="panel-heading">
                    <span style="margin-top: 5px!important;">Relatorio Detalhado de Entradas</span>
                </div>
                <!-- /.panel-heading -->
                <br>
                <table style="cursor: pointer;" width="100%" class="table table-striped table-bordered table-hover"
                       id="dataAluno">
                    <thead>
                    <tr>
                        <th style="min-width:220px !important ;">Funcionario</th>
                        <th style="min-width:120px !important ;">Genero</th>
                        <th style="min-width:140px !important ;">Função / Cargo</th>
                        <th style="min-width:120px !important ;">Data</th>
                        <th style="min-width:120px !important ;">Valor Akz</th>
                        <th style="min-width:220px !important ;">Titulo do Livro</th>
                        <th style="min-width:100px !important ;">Nº Copias</th>
                        <th style="min-width:120px !important ;">Nº Copias no Stock</th>
                        <th style="max-width:1000px !important ; width:1000px !important; min-width:1000px !important;">
                            Detalhes de Entrada
                        </th>
                        <th style="max-width:65px !important ; width:65px !important">ação</th>
                    </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
                <!-- /.table-responsive -->


            </div>
            <!-- /.panel-body -->
            <div class="panel-default">

                <div class="panel-footer">
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <span>Data inicial * .</span>
                                <input class="form-control text-left dataPiquer" name="data_inicial" type="text"
                                       id="data_inicial"
                                       placeholder="Selecione a data">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <span>Data final * .</span>
                                <input class="form-control text-left dataPiquer" name="data_final" type="text"
                                       id="data_final" placeholder="Selecione a data fianal">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <span>Selecione o Funcionario </span>
                            <div class="form-group  input-group">

                                <select class="select2 form-control" name="id_employ"
                                        style="width: 100%; height: 100px!important; " id="id_employ"
                                        tabindex="-1" aria-hidden="true">
                                    <option value="-1">-- Selecione o Funcionario --</option>
                                    <?php
                                    if ($read_funcionario->num_rows() > 0) {
                                        foreach ($read_funcionario->result() as $fincionario) {

                                            echo '<option value="' . $fincionario->id . '" >' . $fincionario->name . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <span class="btn btn-primary input-group-addon" id="print"><i class="fa fa-print"></i> Imprimir</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog"
         style="vertical-align: middle; margin-top: 10%">
        <div class="modal-dialog" role="document">
            <form id="form_delet" action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Confirm Delete</h4>
                    </div>
                    <div class="modal-body">
                        <br>
                        <h3 class="name-element text-center text-danger">
                            <i class="fa fa-trash-o fa-5x"></i>
                        </h3>
                        <h4 class="text-center">Pretendes eliminar ?</h4>
                        <div class="form-group" style="margin-top: 20px">
                            <h4>Informe o motivo * .</h4>
                            <textarea class="form-control" name="motivo" id="delect_decrition"
                                      placeholder="Digite aqui o motivo do Cancelemanto; é de carater obrigatorio"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <br>
    <br>

</div>
<!-- /.col-lg-4 -->


<script>

    $(function () {

        var cont = 0;
        var url;
        listar();


        // Listar utilizadores
        function listar() {
            if (cont == 0)
                url = '<?php echo base_url('Entradas_controller/read_ajax') ?>';

            $('#dataAluno').DataTable().clear().draw();

            $.ajax({
                type: 'ajax',
                url: url,
                async: false,
                dataType: 'json',
                success: function (data) {

                    lista(data);

                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });

        }

        /// delect funtion funcionário
        $('#dataAluno').on('click', '.item-deletar', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Eliminar este Movimento');
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo site_url('Entradas_controller/delet_ajax')?>");

            $('#btnDelete').unbind().click(function () {

                var url = $('#form_delet').attr('action');
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    async: false,
                    url: url,
                    data: {
                        id: id,
                        books_id: $('.books_id').val(),
                        item_qt: $('.item_qt').val(),
                        description: $('#delect_decrition').val()
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            listar();
                            $('.alert-success').html('A operação Efectuada com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        } else {
                            $('.alert-warning').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        }
                    },
                    error: function () {
                        $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                    }
                });
            });
        });

        $('#id_employ').on('change', function () {
            bucar()
        });

        $('#data_inicial').on('change', function () {
            bucar()
        });
        $('#data_final').on('change', function () {
            bucar()
        });

        //btn_buscar

        function bucar() {


            var url = $('#form_search').attr('action');
            var data = {
                dataInical: $('#data_inicial').val(),
                dataFinal: $('#data_final').val(),
                funcionario_id: $('#id_employ').val()
            };
            event.preventDefault();


            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url('Entradas_controller/lista_entadas') ?>',
                data: data,
                async: false,
                dataType: 'json',
                success: function (data) {

                    $('#dataAluno').DataTable().clear().draw();
                    lista(data);

                    $('.alert-success').html('A operação foi efetuada com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                },
                error: function () {
                    $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                }
            });

        }


        function lista(data) {
            var i;
            for (i = 0; i < data.length; i++) {
                var table = $(dataAluno).DataTable();
                var rowNode = table.row.add([
                    '<td>' + data[i].name + '<input value="' + data[i].books_id + '" class="books_id" type="hidden">' +
                    '<input value="' + data[i].quants + '" class="item_qt" type="hidden"></td>',
                    '<td>' + data[i].Genero + '</td>',
                    '<td>' + data[i].tipo_funcionario + '</td>',
                    '<td> <span style="float: right">' + data[i].data_time + '</span></td>',
                    '<td> <span style="float: right">' + data[i].value + ' Akz </span></td>',
                    '<td> <div style="overflow: hidden; text-overflow: ellipsis;' +
                    ' width:250px; border:1px; white-space:nowrap;">'+ data[i].title + '</div> </td>',
                    '<td> <span style="float: right">' + data[i].quant + '</span></td>',
                    '<td><span style="float: right">' + data[i].copy_books + '</span></td>',
                    '<td>' + data[i].detalhes + '</td>',
                    '<td>' +
                    '<button type="button" style=" float:right!important; margin-left: 10px;" data="' + data[i].id + '" class="btn btn-danger btn-xs item-deletar">' +
                    '<i class="fa fa-trash-o"></i> cancelar entrada' +
                    '</button>' +
                    '</td>'
                ]).draw().node();

            }
        }



        $('#print').click(function () {

            var url ='<?php echo base_url('Entradas_controller/lista_entadas') ?>';
            var data = {
                dataInical: $('#data_inicial').val(),
                dataFinal: $('#data_final').val(),
                funcionario_id: $('#id_employ').val()
            };

            var dataAjax = {
                dataInical: $('#data_inicial').val(),
                dataFinal: $('#data_final').val(),
                funcionario_id: $('#id_employ').val()
            };

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function (data) {

                   // $.redirect('', data);
                    window.location = "<?php echo site_url('pdf_controller/pdf?dataInicial=') ?>" + dataAjax.dataInical
                        +"&dataFinal="+dataAjax.dataFinal  +"&SN="+dataAjax.funcionario_id;
                },
                error: function () {
                    $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                }
            });

        });

    });


</script>


