<div id="page-wrapper">

    <?php

    require_once('form_modal/aluno_modal.php');
    require_once('form_modal/cidades_model.php');
    ?>

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
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Registro / <b>Cliente</b></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- /.col-lg-8 -->
    <div class="row">

        <div class="col-sm-12">
            <div class="panel-default">
                <div class="panel-heading">
                    <button type="button" class="btn btn-primary btn-circle" id="employer">
                        <i class="fa fa-plus"></i>
                    </button>
                    Lista de Estudantes registrados
                </div>
                <!-- /.panel-heading -->
                <br>
                <table style="cursor: pointer;" width="100%" class="table table-striped table-bordered table-hover"
                       id="dataAluno">
                    <thead>
                    <tr>
                        <th style="min-width:220px !important ;">Nome do Cliente</th>
                        <th style="min-width:120px !important ;">Genero</th>
                        <th style="min-width:220px !important ;">Nº Pass / BI</th>
                        <th style="min-width:180px !important ;">Telefone</th>
                        <th style="min-width:220px !important ;">Bairro</th>
                        <th style="max-width:1000px !important ; width:1000px !important; min-width:1000px !important;">
                            Destino
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
                        <h3 class="name-element text-center text-danger"><i class="fa fa-male fa-5x"></i> <i
                                    class="fa fa-hand-stop-o fa-5x"></i> <i class="fa fa-trash-o fa-5x"></i></h3>
                        <h4 class="text-center">Pretendes eliminar ?</h4>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
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
            $('#dataAluno').DataTable().clear().draw();
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('aluno_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {

                    var i;
                    for (i = 0; i < data.length; i++) {
                        var table = $(dataAluno).DataTable();
                        var rowNode = table.row.add([
                            '<td> <div style="overflow: hidden; text-overflow: ellipsis;' +
                            ' width:250px; border:1px; white-space:nowrap;">' + data[i].name + '</div> </td>',
                            '<td>' + data[i].Genero + '</td>',
                            '<td>' + data[i].num_bi + '</td>',
                            '<td>' + data[i].number + '</td>',
                            '<td>' + data[i].city_descriptio + '</td>',
                            '<td>' + data[i].description + '</td>',

                            '<td>' +
                            '<button type="button"  data="' + data[i].id + '" class="btn btn-success btn-xs item-editar">' +
                            '<i class="fa fa-edit"></i>' +
                            '</button>' +
                            '<button type="button" style="margin-left: 10px;" data="' + data[i].id + '" class="btn btn-danger btn-xs item-deletar">' +
                            '<i class="fa fa-trash-o"></i>' +
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

        /// alterar um utilizador
        $('#dataAluno').on('click', '.item-editar', function () {
            var id = $(this).attr('data');

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url('aluno_controller/get') ?>',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {


                    $('input[name=emp_bi]').val(data.num_bi);
                    $('input[name=emp_name]').val(data.name);
                    $('input[name=emp_numeber]').val(data.number);

                    // data.city_mode_id
                    //jQuery("#emp_selector").val(data.city_mode_id);
                    $('#emp_selector').select2('val',data.city_mode_id);


                    if (data.Genero == 'Feminino') {
                        jQuery("#radioMasculino").attr('checked', false);
                        jQuery("#radioFeminino").attr('checked', true);
                    } else {
                        jQuery("#radioFeminino").attr('checked', false);
                        jQuery("#radioMasculino").attr('checked', true);
                    }

                    $('input[name=emp_description]').val(data.description);

                    $('input[name=emp_username]').val(data.user_name);
                    $('input[name=emp_password]').val('');
                    $('input[name=emp_password2]').val('');
                    //jQuery("#empty_type").val(data.tipo);

                    $('input[name=emplory_id]').val(data.id);
                    $('input[name=city_id]').val(data.city_mode_id);
                    $('input[name=adress_id]').val(data.adress_id);
                    $('input[name=user_id]').val(data.id_section);

                    $('input[name=phone_id]').val(data.number_id);

                    $('#aluno_modal').modal('show');

                    $('#aluno_modal').find('.modal-title').text('Atualizar O Estudante');
                    $('#aluno_modal').find('#guardar').text('Atualizar');
                    $('#aluno_modal').find('#guardar').val('update');
                    $('#aluno_modal').find('#guardar').data(data);
                    $('#aluno_forma').attr('action', '<?php echo site_url('aluno_controller/update') ?>');

                },
                error: function () {
                    $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                }
            });
        });

        /// delect funtion funcionário
        $('#dataAluno').on('click', '.item-deletar', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Eliminar Estudante');
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo site_url('aluno_controller/delet_ajax')?>");

            $('#btnDelete').unbind().click(function () {

                var url = $('#form_delet').attr('action');
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    async: false,
                    url: url,
                    data: {id: id},
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('A operação feito com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                            listar();
                        } else {
                            alert('Error');
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

