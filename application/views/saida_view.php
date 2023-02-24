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
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Saida | <b> Livros</b></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <?php
    require_once('form_modal/aluno_modal.php');
    require_once('form_modal/cidades_model.php');
    ?>

    <!-- /.col-lg-8 -->
    <div class="row">


        <div class="col-sm-12">
            <div class="panel-default">
                <div class="panel-heading">

                    Movimento de Saida de Livros
                </div>
                <!-- /.panel-heading -->

                <br>
                <!-- /.table-responsive -->
                <div class="">
                    <!-- Modal content-->
                    <div class="">

                        <form class="saida" id="saida_forma" action=""
                              method="post">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3><i class="fa fa-shopping-cart"></i> Selecioner</h3>

                                        <div class="panel-default">
                                            <div class="">

                                                <div class="panel">
                                                    <span>Selecione o livro </span>
                                                    <div class="row">
                                                        <div class="col-sm-8"
                                                             style="margin-bottom:5px; min-width: 220px">


                                                            <select class="select2 form-control" id="seltor_content"
                                                                    style="width: 100%!important; height: 100px!important; "
                                                                    tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option value="-1">-- Selecione o titulo do Livro --
                                                                </option>
                                                                <?php
                                                                if ($read_livros->num_rows() > 0) {
                                                                    foreach ($read_livros->result() as $listLivros) {

                                                                        echo '<option value="' . $listLivros->id . '" >'
                                                                            .$listLivros->copy_books.' - '. $listLivros->title . '</option>';
                                                                    }
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4"
                                                             style="margin-bottom:5px; min-width: 180px">
                                                            <div class="form-group input-group">
                                                                <input class="form-control text-right" name="" min="1"
                                                                       value="1"
                                                                       type="number" id="quant">
                                                                <span class="btn btn-primary input-group-addon"
                                                                      id="adivionar"><i
                                                                            class="fa fa-plus"></i></span>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <span>Itens Selecionados </span>
                                            <!-- /.panel-heading -->
                                            <div class="" style="overflow: auto">

                                                <table style="cursor: pointer;" width="100%"
                                                       class="table table-striped table-bordered table-hover"
                                                       id="data_modal">
                                                    <thead>
                                                    <tr>
                                                        <th style="min-width:220px !important ;">Titulo Livro</th>
                                                        <th style="min-width:100px !important ;max-width:100px !important ;">
                                                            Qt
                                                        </th>
                                                        <th style="min-width:50px !important ; width:80px!important; max-width:50px !important ;">
                                                            ação
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                                <!-- /.table-responsive -->

                                            </div>

                                            <!-- /.panel-body -->
                                        </div>


                                    </div>
                                    <div class="col-sm-6" style="border-left: 1px solid #ccc">
                                        <div class="row">
                                            <div class="col-sm-12">

                                            </div>
                                        </div>


                                        <h3>
                                            <span class="text-primary"><i class="fa fa-shopping-bag"></i> Saida do Livro</span>
                                        </h3>

                                        <div class="form-group" style="margin-bottom: 35px">
                                            <span>Taixa a Pagar </span>
                                            <input class="form-control text-right autonumber" name="valor"
                                                   id="valor_apagar" data-a-sign=" Akz"
                                                   data-p-sign="s" data-v-min="0"
                                                   placeholder="Valor a Pagar">
                                        </div>

                                        <div class="form-group">
                                            <span>Data a Devolver * .</span>
                                            <input class="form-control text-right dataPiquer" name="data_devolucao"
                                                   type="text"
                                                   id="d_auto"
                                                   placeholder="Selecione a data">
                                        </div>

                                        <div class="form-group">
                                            <span style="margin-bottom: 10px !important;">Selecione o aluno * .</span>
                                            <div style="margin-top: 10px" class="form-group input-group">
                                                <select class="select2 form-control" name="aluno_model"
                                                        style="width: 100%; height: 100px!important; " id="aluno_mode"
                                                        tabindex="-1" aria-hidden="true">


                                                </select>
                                                <span class="btn btn-primary input-group-addon" id="employer"><i
                                                            class="fa fa-plus"></i></span>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <span>Descrição </span>
                                            <textarea class="form-control" name="descricao" id="descricao"
                                                      style="height: 250px; margin-top: 10px !important;"
                                                      placeholder="Selecione a data"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">

                                <button type="button"
                                        class="btn btn-primary " id="btnSave"><i
                                            class="fa fa-send-o"></i>
                                    Enviar
                                </button>


                            </div>
                        </form>

                    </div>
                </div>

                <!-- /.panel-body -->
            </div>

        </div>


    </div>

    <script>


        $(function () {

            list = new Array();
            var quantidade = parseInt(0);

            $('#adivionar').click(function () {

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: '<?php echo site_url('livro_controller/get') ?>',
                    data: {id: $('#seltor_content').val()},
                    async: false,
                    dataType: 'json',
                    success: function (data) {

                        if (list[data.id] != undefined) {

                            quantidade = list[data.id].quant;
                            quantidade = parseInt(quantidade) + parseInt($('#quant').val());
                            if ((parseInt(data.copy_books) - parseInt(quantidade)) >= 0) {
                                list[data.id] = {
                                    'id': data.id,
                                    'title': data.title,
                                    'quant': quantidade
                                };
                            } else {
                                $('.alert-danger').html('atingiu o limite do stock verifique no cadastro dos livros')
                                    .fadeIn().delay(7000).fadeOut('slow');
                            }

                        } else if (list[data.id] == undefined) {
                            quantidade = parseInt($('#quant').val());
                            if ((parseInt(data.copy_books) - parseInt(quantidade)) >= 0) {
                                list[data.id] = {
                                    'id': data.id,
                                    'title': data.title,
                                    'quant': quantidade
                                };
                            } else {
                                $('.alert-danger').html('atingiu o limite do stock verifique no cadastro dos livros')
                                    .fadeIn().delay(7000).fadeOut('slow');
                            }
                        }


                        listItem();
                    },
                    error: function () {
                        $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado')
                            .fadeIn().delay(7000).fadeOut('slow');
                    }
                });


            });

            function listItem() {
                $('#data_modal').DataTable().clear().draw();
                var table = $(data_modal).DataTable();

                list.forEach(function (iten) {


                    if (iten.id != null && iten.title != null) {
                        var btn = '<button type="button" data="' + iten.id + '" style="float: right;" ' +
                            'value="' + iten.id + '"  class="btn btn-danger btn-xs item-delet">' +
                            '<i class="fa fa-trash-o"></i>' + ' anular </button>';
                        table.row.add([
                            '<td> ' + iten.title + '</td>',
                            ' <td> <span style="float: right">' + iten.quant + '</span></td>',
                            '<td>' + btn + '</td>',

                        ]).draw().node();
                    }

                })
            }

            $('#btnSave').click(function () {

                var TableData = JSON.stringify(list);


                var result = true;

                //emp_numeber
                if (jQuery("#aluno_mode").val() == -1 || $('#d_auto').val() == '' || list.length == 0) {
                    jQuery("#aluno_mode").parent().parent().addClass('has-error');
                    $("#d_auto").parent().parent().addClass('has-error');
                    console.log(list.length);
                    result = false;
                } else {
                    result = true;
                }

                if (result) {

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?php echo site_url('movimento_controller/saida_view') ?>',
                        data: {
                            item: TableData,
                            valores: $('#valor_apagar').val(),
                            data_devolver: $('#d_auto').val(),
                            aluno: $('#aluno_mode').val(),
                            descricao: $('#descricao').val(),
                            datatime: $('#d_auto').val()
                        },
                        async: false,
                        dataType: 'json',
                        success: function (data) {
                            $('.alert-success').html('Movimentação de livro feito com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');

                            $('#saida_forma')[0].reset();
                            $("#seltor_content").select2("val", '-1');
                            delete list;
                            $('#data_modal').DataTable().clear().draw();
                        },
                        error: function () {
                            $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        }
                    });

                }


            });

            $('#data_modal').on('click', '.item-delet', function () {
                var id = $(this).attr('data');

                list[id] = {
                    'id': id,
                    'title': null,
                    'quant': 0
                };
                //alert(id);
                //list.pop(list[id]);
                //list.pop(list[id]);
                // delete list[id];
                listItem();

            });

            listar();
            listy_city();
            $('#nova_cidade').click(function () {
                $('#cidades_modal').modal('show');
                $('#cidades_modal').find('.modal-title').text('Nova Cidade');
                $('#city_form')[0].reset();
                $('#city_form').attr('action',);
                $('#city_form').attr('action', "<?php echo site_url('city_controller/create_city') ?>");
            });
            $('#guardarCidade').click(function () {

                var result = true;

                //emp_numeber
                if ($("#city_name").val() == '') {
                    $("#city_name").parent().parent().addClass('has-error');
                    result = false;
                } else {
                    result = true;
                }

                if (result) {

                    var url = $('#city_form').attr('action');
                    var data = $('#city_form').serialize();


                    event.preventDefault();
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: url,
                        data: data,
                        async: false,
                        dataType: 'json',
                        success: function (data) {

                            $('#city_form')[0].reset();
                            $('#cidades_modal').modal('hide');

                            listy_city();
                            if (data == 'add')
                                $('.alert-success').html('A operação de inserção, feito com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                            else {
                                $('.alert-success').html('A operação de atualização, feito com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                            }
                        },
                        error: function () {
                            $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        }
                    });
                }

            });

            function listy_city() {


                $.ajax({
                    type: 'ajax',
                    url: "<?php echo site_url('city_controller/read_ajax') ?>",
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        var i;
                        $('#emp_selector').empty().append($("<option></option>").attr("value", "").text(""));
                        $('#emp_selector').append('<option value="-1" selected>-- Selecione a Cidade --</option>');
                        for (i = 0; i < data.length; i++) {
                            $('#emp_selector').append('<option value="' + data[i].id + '">' + data[i].description + '</option>');
                        }

                    },
                    error: function () {
                        alert('não funciona');
                    }
                });

            }

            // Listar Professores
            function listar() {

                /// nova_cidade
                /// Listar as cidades

                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url('aluno_controller/read_ajax') ?>',
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        var i;
                        $('#aluno_mode').empty().append($("<option></option>").attr("value", "").text(""));
                        $('#aluno_mode').append('<option value="-1" selected>-- Selecione o estudante --</option>');
                        for (i = 0; i < data.length; i++) {
                            $('#aluno_mode').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                        }

                    },
                    error: function () {
                        $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                    }
                });

            }

            $('#employer').click(function () {
                $('#aluno_modal').modal('show');
                $('#aluno_modal').find('.modal-title').text('Nova Estudante');
                $('#aluno_forma')[0].reset();
                $('#aluno_forma').attr('action',);
                $('#aluno_forma').attr('action', "<?php echo site_url('aluno_controller/created') ?>");
            });
            $('#guardar').click(function () {

                var result = true;

                if ($('input[name=emp_password2]').val() != $('input[name=emp_password]').val()) {
                    result = false;
                    $('#alerta_pass').html('Senhas diferentes Tenta novamente').fadeIn().delay(5000).fadeOut('slow');
                    $('input[name=emp_password2]').parent().addClass('has-error');
                    $('input[name=emp_password]').parent().addClass('has-error');
                }

                //emp_numeber
                if ($('input[name=emp_name]').val() == '') {
                    $('input[name=emp_name]').parent().addClass('has-error');
                    result = false;
                } else if ($('input[name=emp_numeber]').val() == '') {
                    $('input[name=emp_numeber]').parent().addClass('has-error');
                    result = false;
                } else {
                    result = true;
                }

                if (result) {

                    var url = $('#aluno_forma').attr('action');
                    var data = $('#aluno_forma').serialize();
                    event.preventDefault();

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: url,
                        data: data,
                        async: false,
                        dataType: 'json',
                        success: function (data) {

                            $('#aluno_forma')[0].reset();
                            $('#aluno_modal').modal('hide');
                            listar();
                            if (data == 'add')
                                $('.alert-success').html('A operação de inserção, feito com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                            else {
                                $('.alert-success').html('A operação de atualização, feito com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                            }
                        },
                        error: function () {
                            $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                            listar();
                        }
                    });
                }
            });



        });

    </script>

</div>
