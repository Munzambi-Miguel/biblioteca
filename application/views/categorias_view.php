<div id="page-wrapper">


    <?php
    require_once('form_modal/escritor_modal.php');
    require_once('form_modal/editora_modal.php');
    require_once('form_modal/categoria_modal.php');
    require_once('form_modal/cidades_model.php');

    ?>

    <style>
        #cidades_length,
        #categorias_length,
        #editora_length,
        #autores_length {
            display: none !important;
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
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Registro / <b>Categorias</b></h3>
        </div>
        <br>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.col-lg-8 -->
    <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <!-- Lista de autores -->
                <div class="col-lg-6">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <button type="button" id="escritores_modal_show" class="btn btn-primary btn-circle">
                                <i class="fa fa-plus"></i>
                            </button>
                            Lista de Escritores
                        </div>
                        <br>
                        <!-- /.panel-heading -->
                        <table style="cursor: pointer;" width="100%"
                               class="table table-striped table-bordered table-hover"
                               id="autores">
                            <thead>
                            <tr>

                                <th style="min-width:200px !important ; max-width:200px !important ; width:200px !important">
                                    Nome
                                </th>
                                <th>
                                    Genero
                                </th>
                                <th>
                                    <i class="fa  fa-phone-square"></i> Telefone
                                </th>

                                <th style="min-width:1000px !important ; max-width:1000px !important ; width:1000px !important">
                                    Descrição
                                </th>
                                <th style="min-width:70px !important ; max-width:70px !important ; width:70px !important">
                                    ação
                                </th>


                            </tr>
                            </thead>
                            <tbody id="my_autor">


                            </tbody>
                        </table>
                        <!-- /.table-responsive --
                    <!-- /.panel-body -->
                    </div>

                </div>
                <!-- fim Lista de autores -->

                <!-- Lista de editoras -->
                <div class="col-lg-6">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <button type="button" id="editora_show_modal" class="btn btn-primary btn-circle">
                                <i class="fa fa-plus"></i>
                            </button>
                            Lista das Editoras
                        </div>
                        <br>
                        <table style="cursor: pointer;" width="100%"
                               class="table table-striped table-bordered table-hover"
                               id="editora">
                            <thead>
                            <tr>

                                <th style="min-width:200px !important ; max-width:200px !important ; width:200px !important">
                                    Nome da editora
                                </th>

                                <th style="min-width:200px !important ; max-width:200px !important ; width:200px !important">
                                    <i class="fa  fa-phone-square"></i> Telefone
                                </th>

                                <th style="min-width:400px !important ; max-width:200px !important ; width:400px !important">
                                    Descrição
                                </th>
                                <th style="min-width:70px !important ; max-width:70px !important ; width:70px !important">
                                    ação
                                </th>
                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                        <!-- /.table-responsive -->


                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- fim Lista de editoras -->

            </div>
            <br>
            <br>
        </div>

        <div class="col-lg-12">
            <div class="row">

                <!-- Lista de tipos de livros -->
                <div class="col-lg-6">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-primary btn-circle" id="category_show_modal">
                                <i class="fa fa-plus"></i>
                            </button>
                            Lista de Categotias
                        </div>
                        <!-- /.panel-heading -->
                        <br>
                        <table style="cursor: pointer;" width="100%"
                               class="table table-striped table-bordered table-hover"
                               id="categorias">
                            <thead>
                            <tr>

                                <th style="min-width:200px !important ; max-width:200px !important ; width:200px !important">
                                    Tipo de Livros
                                </th>
                                <th style="min-width:1000px !important ; max-width:1000px !important ; width:1000px !important">
                                    ação
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->


                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- fim Lista de autores -->

                <!-- Lista de cidades -->
                <div class="col-lg-6">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <button id="city_modales" type="button" class="btn btn-primary btn-circle">
                                <i class="fa fa-plus"></i>
                            </button>
                            Lista de Cidades ou Bairros
                        </div>
                        <!-- /.panel-heading -->
                        <br>
                        <table style="cursor: pointer;" width="100%"
                               class="table table-striped table-bordered table-hover"
                               id="cidades">
                            <thead>
                            <tr>

                                <th style="min-width:200px !important ; max-width:200px !important ; width:200px !important">
                                    Nome de Cidade / Bairro
                                </th>
                                <th style="min-width:1000px !important ; max-width:1000px !important ; width:1000px !important">
                                    ação
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        <!-- /.table-responsive -->


                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- fim Lista de autores -->

            </div>
        </div>

    </div>


    <!-- /.row -->
</div>

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" style="vertical-align: middle; margin-top: 10%">
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
                    <h3 class="name-element text-center text-danger"><i class="fa fa-trash-o fa-5x"></i></h3>
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

<script>


    $(function () {





        listarCity();
        $('#city_modales').click(function () {
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

                        listarCity();
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

        // categoria Ajax
        listarCategoria();
        $('#category_show_modal').click(function () {
            $('#categorias_modal').modal('show');
            $('#categorias_modal').find('.modal-title').text('Adicionar Nova Categoria');
            $('#form_category')[0].reset();
            $('#form_category').attr('action',);
            $('#form_category').attr('action', "<?php echo site_url('tipo_livro_controller/create_tipo') ?>");
        });
        $('#guardarCategory').click(function () {

            var result = true;

            //emp_numeber
            if ($("#category_name").val() == '') {
                $("#category_name").parent().parent().addClass('has-error');
                result = false;
            } else {
                result = true;
            }

            if (result) {

                var url = $('#form_category').attr('action');
                var data = $('#form_category').serialize();

                event.preventDefault();
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        $('#form_category')[0].reset();
                        $('#categorias_modal').modal('hide');

                        listarCategoria();
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
        function listarCategoria() {

            $('#categorias').DataTable().clear().draw();

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('tipo_livro_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {

                    var i;
                    for (i = 0; i < data.length; i++) {
                        var table = $(categorias).DataTable();
                        var rowNode = table.row.add([
                            '<td>' + data[i].description + '</td>',
                            '<td>' +
                            '<button type="button"  data="' + data[i].id + '" class="btn btn-success btn-xs item-editCategoria">' +
                            '<i class="fa fa-edit"></i>' +
                            '</button>' +
                            '<button type="button" style="margin-left: 10px;" data="' + data[i].id + '" class="btn btn-danger btn-xs item-deletCategoria">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</button>' +
                            '</td>'
                        ]).draw().node();

                    }

                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });
        }


        // editora
        listarEditora();
        $('#editora_show_modal').click(function () {
            $('#editora_modal').modal('show');
            $('#editora_modal').find('.modal-title').text('Adicionar Nova Editora');
            $('#form_editora')[0].reset();
            $('#form_editora').attr('action',);
            $('#form_editora').attr('action', "<?php echo site_url('editora_controller/create_editora') ?>");
        });
        $('#guardarEditora').click(function () {

            var result = true;

            //emp_numeber
            if ($('input[name=editora_name]').val() == '') {
                $('input[name=editora_name]').parent().parent().addClass('has-error');
                result = false;
            } else {
                result = true;
            }

            if (result) {

                var url = $('#form_editora').attr('action');
                var data = $('#form_editora').serialize();

                event.preventDefault();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        $('#form_editora')[0].reset();
                        $('#editora_modal').modal('hide');

                        listarEditora();
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
        function listarEditora() {

            $('#editora').DataTable().clear().draw();

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('editora_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {

                    var i;
                    for (i = 0; i < data.length; i++) {
                        var table = $(editora).DataTable();
                        var rowNode = table.row.add([
                            '<td> <div style="overflow: hidden; text-overflow: ellipsis;' +
                            ' width:200px; border:1px; white-space:nowrap;">' + data[i].name + '</div> </td>',
                            '<td>' + data[i].number + '</td>',
                            '<td>' + data[i].description + '</td>',
                            '<td>' +
                            '<button type="button"  data="' + data[i].id + '" class="btn btn-success btn-xs item-editEditora">' +
                            '<i class="fa fa-edit"></i>' +
                            '</button>' +
                            '<button type="button" style="margin-left: 10px;" data="' + data[i].id + '" class="btn btn-danger btn-xs item-deletEditora">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</button>' +
                            '</td>'
                        ]).draw().node();

                    }

                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });
        }

        // escritores
        listar();
        $('#escritores_modal_show').click(function () {
            $('#escritores_modal').modal('show');
            $('#escritores_modal').find('.modal-title').text('Adicionar Nova Autor');
            $('#form_escritores')[0].reset();
            $('#form_escritores').attr('action',);
            $('#form_escritores').attr('action', "<?php echo site_url('autores_controller/create_autores') ?>");
        });
        $('#guardar_escrito').click(function () {

            var result = true;

            //emp_numeber
            if ($("#autor_name").val() == '') {
                $("#autor_name").parent().parent().addClass('has-error');
                result = false;
            } else {
                result = true;
            }

            if (result) {

                var url = $('#form_escritores').attr('action');
                var data = $('#form_escritores').serialize();

                event.preventDefault();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (data) {

                        $('#form_escritores')[0].reset();
                        $('#escritores_modal').modal('hide');

                        listar();
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
        function listar() {

            $('#autores').DataTable().clear().draw();

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('autores_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {

                    var i;
                    for (i = 0; i < data.length; i++) {
                        var table = $(autores).DataTable();
                        var rowNode = table.row.add([
                            '<td> <div style="overflow: hidden; text-overflow: ellipsis;' +
                            ' width:200px; border:1px; white-space:nowrap;">' + data[i].name + '</div> </td>',
                            '<td>' + data[i].genero + '</td>',
                            '<td>' + data[i].number + '</td>',
                            '<td>' + data[i].description + '</td>',
                            '<td>' +
                            '<button type="button"  data="' + data[i].id + '" class="btn btn-success btn-xs item-editAutor">' +
                            '<i class="fa fa-edit"></i>' +
                            '</button>' +
                            '<button type="button" style="margin-left: 10px;" data="' + data[i].id + '" class="btn btn-danger btn-xs item-delet">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</button>' +
                            '</td>'
                        ]).draw().node();

                    }

                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });

        }


        // Cidades Ajax
        function listarCity() {

            $('#cidades').DataTable().clear().draw();

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('city_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {

                    var i;

                    for (i = 0; i < data.length; i++) {
                        var table = $(cidades).DataTable();
                        var rowNode = table.row.add([

                            '<td>' + data[i].description + '</td>',
                            '<td>' +
                            '<button type="button"  data="' + data[i].id + '" class="btn btn-success btn-xs item-editCidade">' +
                            '<i class="fa fa-edit"></i>' +
                            '</button>' +
                            '<button type="button" style="margin-left: 10px;" data="' + data[i].id + '" class="btn btn-danger btn-xs item-deletCity">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</button>' +
                            '</td>'

                        ]).draw().node();

                    }

                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });
        }


        /// delect funtion autores
        $('#autores').on('click', '.item-delet', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Eliminar Autore');
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo base_url('autores_controller/delet_ajax')?>");

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

        /// delect editoras
        $('#editora').on('click', '.item-deletEditora', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Eliminar Editora ' + id);
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo base_url('editora_controller/delet_ajax')?>");

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
                            listarEditora();
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


        /// delect category
        $('#categorias').on('click', '.item-deletCategoria', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Eliminar Categoria ');
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo base_url('tipo_livro_controller/delet_ajax')?>");

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
                            listarCategoria();
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

        /// delect category
        $('#cidades').on('click', '.item-deletCity', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Eliminar Cidades ');
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo base_url('city_controller/delet_ajax')?>");

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
                            listarCity();
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


        //Caregar o autor
        $('#autores').on('click', '.item-editAutor', function () {
            var id = $(this).attr('data');


            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url('autores_controller/get') ?>',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    $('input[name=autor_name]').val(data.name);
                    $('input[name=autor_number]').val(data.number);

                    $('input[name=autor_genero]').val(data.genero);

                    if (data.genero == 'Feminino') {

                        jQuery("#radioMasculino").attr('checked', false);
                        jQuery("#radioFeminino").attr('checked', true);
                    } else {

                        jQuery("#radioFeminino").attr('checked', false);
                        jQuery("#radioMasculino").attr('checked', true);
                    }

                    $('textarea[name=autor_description]').val(data.description);

                    $('input[name=autor_id]').val(data.id);
                    $('input[name=phone_id]').val(data.num_id);

                    $('#escritores_modal').modal('show');
                    $('#escritores_modal').find('.modal-title').text('Atualizar O Autor');
                    $('#escritores_modal').find('#guardar').text('Atualizar');
                    $('#escritores_modal').find('#guardar').val('update');
                    $('#escritores_modal').find('#guardar').data(data);
                    $('#form_escritores').attr('action', '<?php echo site_url('autores_controller/update') ?>');
                },
                error: function () {
                    alert('Could not Edit Data');
                }
            });
        });

        // Caregar editora
        $('#editora').on('click', '.item-editEditora', function () {
            var id = $(this).attr('data');

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url('editora_controller/get') ?>',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    $('input[name=editora_name]').val(data.name);
                    $('input[name=number_phone]').val(data.number);


                    $('textarea[name=editora_descricao]').val(data.description);

                    $('input[name=editora_id]').val(data.id);
                    $('input[name=phone_id]').val(data.num_id);

                    $('#editora_modal').modal('show');
                    $('#editora_modal').find('.modal-title').text('Atualizar a Editora');
                    $('#editora_modal').find('#guardar').text('Atualizar');
                    $('#editora_modal').find('#guardar').val('update');
                    $('#editora_modal').find('#guardar').data(data);
                    $('#form_editora').attr('action', '<?php echo site_url('editora_controller/update') ?>');
                },
                error: function () {
                    alert('Could not Edit Data');
                }
            });
        });


        /// Caregar categoria
        $('#categorias').on('click', '.item-editCategoria', function () {
            var id = $(this).attr('data');

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url('tipo_livro_controller/get') ?>',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    $('input[name=category_name]').val(data.description);
                    $('input[name=category_id]').val(data.id);

                    $('#categorias_modal').modal('show');
                    $('#categorias_modal').find('.modal-title').text('Atualizar a Categoria');
                    $('#categorias_modal').find('#guardarCategory').text('Atualizar');
                    $('#categorias_modal').find('#guardarCategory').val('update');
                    $('#form_category').attr('action', '<?php echo site_url('tipo_livro_controller/update') ?>');
                },
                error: function () {
                    alert('Could not Edit Data');
                }
            });
        });

        /// Caregar cidades
        $('#cidades').on('click', '.item-editCidade', function () {
            var id = $(this).attr('data');

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url('city_controller/get') ?>',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    $('input[name=city_name]').val(data.description);
                    $('input[name=city_id]').val(data.id);

                    $('#cidades_modal').modal('show');
                    $('#cidades_modal').find('.modal-title').text('Atualizar a cidade ou bairro');
                    $('#cidades_modal').find('#guardarCidade').text('Atualizar');
                    $('#cidades_modal').find('#guardarCidade').val('update');
                    $('#city_form').attr('action', '<?php echo site_url('city_controller/update') ?>');
                },
                error: function () {
                    alert('Could not Edit Data');
                }
            });
        });


    });


</script>

