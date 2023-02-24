<div id="page-wrapper">

    <?php
    require_once('form_modal/livro_modal.php');
    require_once('form_modal/categoria_modal.php');
    require_once('form_modal/editora_modal.php');
    require_once('form_modal/escritor_modal.php');
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
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Registro / <b>Livros</b></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.col-lg-8 -->
    <div class="row">


        <div class="col-sm-12">
            <div class="panel-default">
                <div class="panel-heading">
                    <button type="button" class="btn btn-primary btn-circle" id="new_books">
                        <i class="fa fa-plus"></i>
                    </button>
                    Lista de Livros registrados
                </div>
                <!-- /.panel-heading -->
                <br>
                <table style="cursor: pointer;" width="100%" class="table table-striped table-bordered table-hover"
                       id="dataLivros">
                    <thead>
                    <tr>
                        <th style="min-width:220px !important ;">Titulo</th>
                        <th style="min-width:200px !important ;">Categoria</th>
                        <th style="min-width:220px !important ;">Editora</th>
                        <th style="min-width:180px !important ;">Telefone</th>
                        <th style="min-width:220px !important ;">Autor</th>
                        <th style="max-width:60px !important ;">Quant</th>
                        <th style="max-width:65px !important ; width:65px !important;  min-width:65px !important">ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th style="min-width:220px !important ;"><i class="fa fa-image"></i> Livros com image</th>
                        <th style="background: #ddd" ></th>
                        <th style="background: #ddd" ></th>
                        <th style="background: #ddd" ></th>
                        <th style="background: #ddd" ></th>
                        <th style="background: #ddd" ></th>
                        <th style="background: #ddd" ></th>
                    </tr>
                    </tfoot>
                </table>
                <!-- /.table-responsive -->


                <!-- /.panel-body -->
            </div>

        </div>
        <!-- /.col-lg-4 -->


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
                        <h3 class="name-element text-center text-danger"><i class="fa fa-hand-stop-o fa-5x"></i></h3>
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


    <!-- /.row -->
</div>

<script>

    $(function () {

        listarCategoria();
        listar();
        // Listar utilizadores
        function listar() {

            $('#dataLivros').DataTable().clear().draw();


            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('livro_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {



                    var i;
                    for (i = 0; i < data.length; i++) {
                        var photo = '';

                        //var url = window.URL || window.webkitURL;
                        //var src = url.createObjectURL(data);

                        if(data[i].image > 0 ){
                             photo = '<i class="text-primary fa fa-image"></i> ';
                        }else{
                            photo = '<i class="text-primary fa fa-question-circle"></i> ';
                        }

                        var table = $(dataLivros).DataTable();

                        var rowNode = table.row.add([
                            '<td> <div style="overflow: hidden; text-overflow: ellipsis;' +
                            ' width:250px; border:1px; white-space:nowrap;">' +photo+ data[i].title + '</div> </td>',
                            '<td>' + data[i].category_description + '</td>',
                            '<td>' + data[i].name_editora + '</td>',
                            '<td>' + data[i].number + '</td>',
                            '<td> <div style="overflow: hidden; text-overflow: ellipsis;' +
                            ' width:250px; border:1px; white-space:nowrap;">' + data[i].name_actor + '</div> </td>',
                            '<td> <span style="float: right">' + data[i].copy_books + '</span></td>',

                            '<td> <span style="float: right">' +
                            '<button type="button"  data="' + data[i].id + '" class="btn btn-success btn-xs item-edit">' +
                            '<i class="fa fa-edit"></i>' +
                            '</button>' +
                            '<button type="button" style="margin-left: 10px;" data="' + data[i].id + '" class="btn btn-danger btn-xs item-delet">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</button>' +
                            '</span></td>'
                        ]).draw().node();

                    }



                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });


        }

        // criar um novo utilizador
        $('#new_books').click(function () {
            $('#livros_forma')[0].reset();
            $('#store_image').html('' +
                '<br> <br> <br>\n' +
                '<h1 class="text-primary text-left"><i\n' +
                'class="fa fa-book fa-5x"></i></h1>');
            $('#livro_modal').modal('show');
            $('#livro_modal').find('.modal-title').text('Nova Lovro a Inserir');
            $('#livros_forma').attr('action',);
            $('#livros_forma').attr('action', "<?php echo site_url('livro_controller/created') ?>");
        });

        $('#guardar').click(function () {

            var result = true;

            if ($('input[name=books_title]').val() == '' || jQuery("#seleti-tipo").val() == ''
                || jQuery("#books-editora").val() == '' || jQuery("#select-autor").val() == ''
            ) {
                $('input[name=books_title]').parent().parent().addClass('has-error');
                jQuery("#seleti-tipo").parent().parent().addClass('has-error');
                jQuery("#books-editora").parent().parent().addClass('has-error');
                jQuery("#select-autor").parent().parent().addClass('has-error');


                result = false;
            } else {
                result = true;
            }

            if (result) {

                var url = $('#livros_forma').attr('action');
                var data = $('#livros_forma').serialize();
                event.preventDefault();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (data) {

                        console.log(data.books_id);
                        insertImage(data.books_id);
                        $('#livros_forma')[0].reset();
                        $('#livro_modal').modal('hide');


                        if (data == 'add')
                            $('.alert-success').html('A operação Efectuada com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        else {
                            $('.alert-success').html('A operação de atualização, Efectuada com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        }
                        listar();
                        listar();

                    },
                    error: function () {
                        $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        listar();
                    }
                });
            }

        });



        function insertImage(books_id) {
            sti = $('.img-thumbnail').prop('src');
            //changeImage
            //inseri_image
            $.ajax({
                url: '<?php echo site_url('fetch_images/inseri_image') ?>',
                type: 'POST',
                data: {books:books_id, image: sti},
                success: function (data) {

                }
            });
        }


        /// alterar um utilizador
        $('#dataLivros').on('click', '.item-edit', function () {
            var id = $(this).attr('data');


            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url('livro_controller/get') ?>',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {

                    $('input[name=books_barcode]').val(data.barcode);
                    $('input[name=books_title]').val(data.title);
                    $('input[name=books_numCopy]').val(data.copy_books);
                    $('textarea[name=books_description]').val(data.descriptiom);


                    //jQuery("#categori_selector").val(data.category_mode_id);
                   // jQuery("#books_selector").val(data.edition_mode_id);
                    //jQuery("#autor_selector").val(data.autor_mode_id);
                    $("#autor_selector").select2("val", data.autor_mode_id);
                    $("#categori_selector").select2("val", data.category_mode_id);
                    $("#books_selector").select2("val", data.edition_mode_id);

                    $('input[name=books_id]').val(data.id);

                    $('#livro_modal').modal('show');

                    $('#livro_modal').find('.modal-title').text('Atualizar O Utilizador');
                    $('#livro_modal').find('#guardar').text('Atualizar');
                    $('#livro_modal').find('#guardar').val('update');
                    $('#livro_modal').find('#guardar').data(data);
                    $('#livros_forma').attr('action', '<?php echo site_url('livro_controller/update') ?>');

                    // catear a imagem
                    load_images(data.id);

                },
                error: function () {
                    alert('Could not Edit Data');
                }
            });

        });

        // Carregar novamente a image
        function load_images(id) {
            $.ajax({
                url: '<?php echo site_url('fetch_images/viewImage') ?>',
                type: 'POST',
                data: {id: id},
                success: function (data) {

                    $('#store_image').html(data);
                   // $('.img-thumbnail').prop('src');
                    if($('.img-thumbnail').prop('src') == undefined)
                        $('#store_image').html('' +
                            '<br> <br> <br>\n' +
                            '<h1 class="text-primary text-left"><i\n' +
                            'class="fa fa-book fa-5x"></i></h1>');

                }
            })
        }


        /// delect funtion funcionário
        $('#dataLivros').on('click', '.item-delet', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.modal-title').text('Eliminar Livros');
            $('#form_delet').attr('action',);
            $('#form_delet').attr('action', "<?php echo site_url('livro_controller/delet_ajax')?>");

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
                        alert('Error deleting');
                    }
                });
            });
        });


        // categoria Ajax
        $('#cal_category').click(function () {
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

            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('tipo_livro_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var i;
                    $('#categori_selector').empty().append($("<option></option>").attr("value", "").text(""));
                    $('#categori_selector').append('<option value="-1" selected>-- Selecione o Tipo de Livro --</option>');
                    for (i = 0; i < data.length; i++) {
                        $('#categori_selector').append('<option value="' + data[i].id + '">' + data[i].description + '</option>');
                    }
                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });
        }


        /// Editora View
        listarEditora();
        $('#cal_editora').click(function () {
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
                $('input[name=editora_name]').parent().addClass('has-error');
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

            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('editora_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var i;
                    $('#books_selector').empty().append($("<option></option>").attr("value", "").text(""));
                    $('#books_selector').append('<option value="-1" selected>-- Selecione a Editora --</option>');
                    for (i = 0; i < data.length; i++) {
                        $('#books_selector').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                    }
                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });
        }

        /// autor selector and adding
        listarAutor();
        $('#cal_autor').click(function () {
            $('#escritores_modal').modal('show');
            $('#escritores_modal').find('.modal-title').text('Adicionar Nova Autor');
            $('#form_escritores')[0].reset();
            $('#form_escritores').attr('action',);
            $('#form_escritores').attr('action', "<?php echo site_url('autores_controller/create_autores') ?>");
        });
        $('#guardar_escrito').click(function () {
            var result = true;
            if ($("#autor_name").val() == '') {
                $("#autor_name").parent().addClass('has-error');
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

                        listarAutor();
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

        function listarAutor() {

            $('#autores').DataTable().clear().draw();

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('autores_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var i;
                    $('#autor_selector').empty().append($("<option></option>").attr("value", "").text(""));
                    $('#autor_selector').append('<option value="-1" selected>-- Selecione o Autor --</option>');
                    for (i = 0; i < data.length; i++) {
                        $('#autor_selector').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                    }
                },
                error: function () {
                    alert('Could not get Data from Database');
                }
            });

        }
    });

    $(document).ready(function () {

        var imageInstance;

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 250,
                height: 250,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#insert_image').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function () {
                    /// console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#insertimageModal').modal('show');
            $('#livro_modal').modal('hide');
        });

        $('#close-modal').click(function () {
            $('#insertimageModal').modal('hide');
            $('#livro_modal').modal('show');
        });

        $('.crop_image').click(function (event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (response) {

                //console.log(response);
                //changeImage
                //inseri_image
                $.ajax({
                    url: '<?php echo site_url('fetch_images/changeImage') ?>',
                    type: 'POST',
                    data: {"image": response},
                    success: function (data) {
                        $('#insertimageModal').modal('hide');
                        // console.log(data);
                        $('#store_image').html(data);
                        $('#livro_modal').modal('show');
                        // load_images();

                    }
                })
            });
        });

        $('#store_image').click(function () {
            var fileSelector = $('#insert_image');
            fileSelector.click();
        });

        var takePicture = document.querySelector("#insert_image");
        takePicture.onchange = function (event) {
            // Obtenha uma referencia para a imagem capturada ou escolha um arquivo
            var files = event.target.files,
                file;
            if (files && files.length > 0) {
                file = files[0];
            }
        };



    });


</script>
