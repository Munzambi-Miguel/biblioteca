



<div id="page-wrapper">

    <?php

    require_once('form_modal/livro_modal.php');
    require_once('form_modal/escritor_modal.php');
    require_once('form_modal/editora_modal.php');
    require_once('form_modal/categoria_modal.php');
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
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Entrada |<b> Livros</b></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.col-lg-8 -->
    <div class="row">


        <div class="col-sm-12">
            <div class="panel-default">
                <div class="panel-heading">

                    Formulario de entrada de Livros no sistema
                </div>
                <!-- /.panel-heading -->
                <br>

                <!-- Modal content-->
                <div class="">

                    <div class="modal-body">
                        <div class="row">
                            <form class="form_entrada" id="form_entrada"
                                  action="<?php echo site_url('movimento_controller/created') ?>"
                                  method="post">
                                <div class="col-sm-4" style="border-right: 2px solid #ccc;">
                                    <div class="row">
                                        <div class="col-sm-12">

                                        </div>
                                    </div>


                                    <h3><span class="text-primary">Entrada do Livro</span></h3>
                                    <br>
                                    <div style="padding-right: 20px!important;">
                                        <div class="form-group">
                                            <span>Selecione o Livro. * </span>
                                            <br>
                                            <div style="margin-top: 10px" class="form-group input-group">
                                                <select class="select2 form-control form-group" name="mov_books"
                                                        style="width: 100%;" id="select-books">
                                                </select>
                                                <span class="btn btn-primary input-group-addon" id="novos_livros"><i
                                                            class="fa fa-plus"></i></span>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <span>Quantidade. * </span>
                                            <input class="form-control text-right" value="1" min="1" name="mov_qt"
                                                   type="number"
                                                   placeholder="Quantidade">
                                        </div>
                                        <div class="form-group">
                                            <span>Dispesa </span>
                                            <input class="form-control text-right autonumber" name="mov_multas"
                                                   data-a-sign=" Akz"
                                                   data-p-sign="s" data-v-min="0"
                                                   placeholder="Valor a Pago">
                                        </div>
                                        <div class="form-group">
                                            <span>Descrição </span>
                                            <textarea style="height: 200px" class="form-control" name="mov_desciptio"
                                                      placeholder="Selecione a data"></textarea>

                                        </div>
                                    </div>
                                    <div style="border: none" class="modal-footer">

                                        <button type="button" class="btn btn-primary" id="SalvarEntrada" data="" value="add">
                                            Novo
                                        </button>
                                    </div>
                                </div>
                            </form>


                            <div class="col-sm-8">


                                <div id="screenshots" class="col-lg-12 screenshot_section">
                                    <div class="screen_wrap">
                                        <div class="swiper-container screen_carousel">
                                            <div class="swiper-wrapper">

                                                <?php
                                                if ($read_livros->num_rows() > 0) {

                                                    foreach ($read_livros->result() as $row) {

                                                        ?>

                                                        <div class="swiper-slide">
                                                            <div class="row">

                                                                <div class="col-lg-12">


                                                                    <div class="panel panel-default">

                                                                        <div class="panel-body">

                                                                            <div class="row"  style="height: 360px" >
                                                                                <div class="col-lg-12">

                                                                                    <?php if($row->image == NULL){?>
                                                                                        <h1 style="margin-right: 10px; height: 225px" class="text-primary text-center"><i
                                                                                                    class="fa fa-book fa-5x"></i></h1>
                                                                                    <?php } else{?>
                                                                                        <div style="width: 100%">
                                                                                            <img width="100%" src="<?php echo "data:image/png;base64,".base64_encode($row->image) ?>" >
                                                                                        </div>
                                                                                    <?php }?>
                                                                                </div>

                                                                                <div class="col-lg-12" style="max-height: 164px!important;
                                                          text-overflow: ellipsis;
                                                          overflow: hidden;
                                                        ">
                                                                                    <div>

                                                                                        <p>
                                                                                        <h3><div style="overflow: hidden; text-overflow: ellipsis;
                                                                    width:200px; border:1px; white-space:nowrap;"><?php echo $row->title ?>
                                                                                            </div> </h3>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <?php
                                                    }
                                                }

                                                ?>

                                            </div>
                                            <div class="screen-pagination"></div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <h4 class="page-header"><i class="fa fa-comments fa-fw"></i> <b>Notificação</b>
                                    </h4>

                                    <div class="alert alert-info alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                            &times;
                                        </button>
                                        Seja bem vindo neste menu. Nestá area do Sistemas poderar dar entrada de livros
                                        no armazem.
                                        <br>
                                        <a href="#" class="alert-link">
                                            Saiba mais
                                        </a>.
                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>


                </div>


                <!-- /.panel-body -->
            </div>

        </div>
        <!-- /.col-lg-4 -->


    </div>


    <!-- /.row -->
</div>


<script>

    $(function () {

        listarCategoria();
        listarEditora();
        listarAutor();

        listarLivros();
        function listarLivros() {

            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('livro_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var i;
                    $('#select-books').empty().append($("<option></option>").attr("value", "").text(""));
                    $('#select-books').append('<option value="-1" selected>-- Selecione o Tipo de Livro --</option>');
                    for (i = 0; i < data.length; i++) {
                        $('#select-books').append('<option value="' + data[i].id + '">'+ data[i].copy_books + ' - '+data[i].title + '</option>');
                    }

                },
                error: function () {
                    alert('Could not get Data from Database++');
                }
            });
        }


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

        /// -----

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

        /// ---

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

        //// ---

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

        /// Fim dos metodos


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

                        $('#livros_forma')[0].reset();
                        $('#livro_modal').modal('hide');
                        insertImage(data.books_id);

                        listarLivros();
                        if (data == 'add')
                            $('.alert-success').html('A operação Efectuada com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        else {
                            $('.alert-success').html('A operação de atualização, Efectuada com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        }
                    },
                    error: function () {
                        $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                        listar();
                    }
                });
            }

        });

        // select-autor;
        // criar um novo utilizador
        $('#novos_livros').click(function () {
           $('#livro_modal').modal('show');
            $('#livro_modal').find('.modal-title').text('Nova Lovro a Inserir');
            $('#livros_forma').attr('action',);
            $('#livros_forma').attr('action', "<?php echo site_url('livro_controller/created') ?>");
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
        function listarAutor() {


            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('autores_controller/read_ajax') ?>',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var i;
                    $('#autor_selector').empty().append($("<option></option>").attr("value", "").text(""));
                    $('#autor_selector').append('<option value="-1" selected>-- Selecione a Editora --</option>');
                    for (i = 0; i < data.length; i++) {
                        $('#autor_selector').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                    }
                },
                error: function () {
                    alert('Could not get Data from Database ++');
                }
            });

        }

        $('#SalvarEntrada').click(function () {

            var result = true;

            //emp_numeber
            if (jQuery("#select-books").val() == -1) {
                jQuery("#select-books").parent().parent().addClass('has-error');
                result = false;
            } else {
                result = true;
            }

            if (result) {

                var url = $('#form_entrada').attr('action');
                var data = $('#form_entrada').serialize();
                event.preventDefault();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        $('#form_entrada')[0].reset();
                        $('#select-books').select2("val", '-1');
                        $('.alert-success').html('Movimentação de livro feito com sucesso! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                    },
                    error: function () {
                        $('.alert-danger').html('Operação invalida erro ao tentar inserir! Obrigado').fadeIn().delay(7000).fadeOut('slow');
                    }
                });
            }

        });


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




    });
</script>


