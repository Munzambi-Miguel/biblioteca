<div id="page-wrapper">



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
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Relatorio / <b>Emprestimo</b></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- /.col-lg-8 -->
    <div class="row">

        <div class="col-sm-12">
            <div class="panel-default">
                <div class="panel-heading">
                    Relatorio Detalhado de Emprestimo
                </div>
                <!-- /.panel-heading -->
                <br>
                <table style="cursor: pointer;" width="100%" class="table table-striped table-bordered table-hover"
                       id="dataAluno">
                    <thead>
                    <tr>
                        <th style="min-width:220px !important ;">Estudante</th>
                        <th style="min-width:120px !important ;">Genero</th>
                        <th style="min-width:140px !important ;">Função / Cargo</th>
                        <th style="min-width:120px !important ;">Entrega</th>
                        <th style="min-width:120px !important ;">Valor Akz</th>
                        <th style="min-width:220px !important ;">Titulo do Livro</th>
                        <th style="min-width:100px !important ;">Nº Copias</th>
                        <th style="min-width:120px !important ;">Nº Copias no Stock</th>
                        <th style="min-width:220px !important ;">Atendido Pelo Sr. / (a)</th>
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
                       <h4>Biblioteca Simões</h4>
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
                        <h3 class="name-element text-center text-primary"> <i class="fa fa-edit fa-5x"></i></h3>
                        <h4 class="text-center">O estudante Pretende Devolver ?</h4>
                        <div class="form-group" style="margin-top: 20px">
                            <h4>Informe o motivo * .</h4>
                            <textarea class="form-control" name="motivo" id="informacao"
                                      placeholder="Digite aqui o motivo do Cancelemanto; é de carater obrigatorio"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="btnDelete" class="btn btn-primary">Relatar</button>
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


</div>
<!-- /.col-lg-4 -->


<script>

    $(function () {

        listar();


        // Listar utilizadores
        function listar() {

            $('#dataAluno').DataTable().clear().draw();

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('SaidasPrazo_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {

                    var i;
                    for (i = 0; i < data.length; i++) {
                        var table = $(dataAluno).DataTable();
                        var rowNode = table.row.add([
                            '<td> <span style="color: red">' + data[i].name + '</span><input type="hidden" class="item_value" value="'+data[i].books_mode_id+'"</td>',
                            '<td>' + data[i].Genero + '<input type="hidden" class="item_Qt" value="'+data[i].quantidadesTotal +'"</td>',
                            '<td>' + data[i].tipo_funcionario + '</td>',
                            '<td><span style="color: red; float: right">' + data[i].data_time + '</span></td>',
                            '<td> <span style="float: right">' + data[i].value + ' Akz </span></td>',
                            '<td>' + data[i].title + '</td>',
                            '<td> <span style="float: right">' + data[i].quant + '</span></td>',
                            '<td> <span style="float: right">' + data[i].copy_books + '</span></td>',
                            '<td>' + data[i].Funcionario + '</td>',
                            '<td>' + data[i].detalhes + '</td>',
                            '<td>' +
                            '<button type="button" style=" float:right!important; margin-left: 10px;" data="' + data[i].id_temCop + '" class="btn btn-primary btn-xs item-deletar">' +
                            '<i class="fa fa-edit"></i> devolver' +
                            '</button>' +
                            '</td>'
                        ]).draw().node();

                    }

                },
                error: function () {
                    $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                }
            });

        }

        /// delect funtion funcionário
        $('#dataAluno').on('click', '.item-deletar', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Devolução do Manual');
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo site_url('SaidasPrazo_controller/delet_ajax')?>");

            $('#btnDelete').unbind().click(function () {

                var url = $('#form_delet').attr('action');
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    async: false,
                    url: url,
                    data: {id: id,description:$('#informacao').val(),item_id:$('.item_value').val(),item_qt:$('.item_Qt').val()},
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('A operação Efectuada com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                            listar();
                        } else {
                            $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        }
                    },
                    error: function () {
                        $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                    }
                });
            });
        });


    });
</script>

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

