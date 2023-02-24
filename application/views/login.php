<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-products/logdy/main/login-12.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2019 08:10:49 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>Segurança</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/') ?>assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('public/') ?>assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('public/') ?>assets/fonts/flaticon/font/flaticon.css">
    <!-- Bootstrap Core CSS -->
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('public/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url("public/vendor/datatables-plugins/dataTables.bootstrap.css") ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('public/vendor/datatables-responsive/dataTables.responsive.css') ?>"
          rel="stylesheet">

    <link rel="icon" href="<?php echo base_url('public/')?>/academy-icon-13.jpg" type="image/x-icon">



    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/dist/css/sb-admin-2.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('public/vendor/morrisjs/morris.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"
          type="text/css">
    <link href="<?php echo base_url('public/dist/css/style_main.css') ?>" rel="stylesheet">

    <!-- Data Piker style -->
    <!--link rel="stylesheet" href="" -->
    <link rel="stylesheet"
          href="<?php echo base_url('public/vendor/bootstrap-datetimepicker/css/bootstrap-datepicker.min.css') ?>">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('public/vendor/select2/dist/css/select2.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('public/dist/css/swiper.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('public/dist/css/croppie.css') ?>">

    <!-- Favicon icon -->


    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/') ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet"
          href="<?php echo base_url('public/') ?>assets/css/skins/default.css">

</head>
<body id="top" style="zoom: 90%;">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<style>

    .login-12 {
        background-image: url("<?php echo base_url('public/') ?>img/back21.jpg");
        background-size: cover;
    }

</style>

<!-- Login 12 start -->
<div class="login-12">
    <div class="container">
        <div class="col-md-12 pad-0">
            <div class="row login-box-12">
                <div class="col-lg-7 col-sm-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">

                            <h3>Conta Login</h3>


                            <form id="form_login">
                                <div class="form-group">
                                    <input type="text" id="name" name="username" class="input-text text-center"
                                           placeholder="digite o seu endereço email">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="passw" name="password" class="input-text text-center"
                                           placeholder="digite a palavra passe">
                                </div>
                                <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Pretendo Lembrar
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="submit" class="btn-md btn-theme btn-block">Login</button>
                                </div>
                            </form>
                            <div id='err_msg' style='display: none'>
                                <div id='msg' style="color:red!important;"></div>
                            </div>
                            <p>clique nesse linque para ter mais <a href="register-12.html">informações </a></p>
                            <div class="alert alert-success alert-dismissable text-center"
                                 style="display: none; position: absolute">
                            </div>
                            <div class="alert alert-info alert-dismissable text-center"
                                 style="display: none;position: absolute ">
                            </div>
                            <div class="alert alert-warning alert-dismissable text-center"
                                 style="display: none;position: absolute">
                            </div>
                            <div class="alert alert-danger alert-dismissable text-center"
                                 style="display: none;position: absolute">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-pad-0 bg-img align-self-center none-992">
                    <a href="#">
                        <h1 style="color: #fff"><i class="fa fa-users fa-3x"></i></h1>
                    </a>
                    <p>Bem vindo ao sistema de Biblioteca, loga para acessar suas informações</p>
                    <a href="" class="btn-outline">Termos de Licença</a>
                    <ul class="social-list clearfix">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 12 end -->

<!-- External JS libraries -->
<script src="<?php echo base_url('public/') ?>assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url('public/') ?>assets/js/popper.min.js"></script>

<script src="<?php echo base_url('public/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap/js/bootstrap.min.js') ?>">"></script>
<script src="<?php echo base_url('public/vendor/metisMenu/metisMenu.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/datatables-responsive/dataTables.responsive.js') ?>"></script>


<script src="<?php echo base_url('public/input-mask/jquery.inputmask.js') ?>"></script>
<script src="<?php echo base_url('public/input-mask/jquery.inputmask.date.extensions.js') ?>"></script>
<script src="<?php echo base_url('public/input-mask/jquery.inputmask.extensions.js') ?>"></script>

<script src="<?php echo base_url('public/input-mask/inputmask.min.js') ?>"></script>
<script src="<?php echo base_url('public/input-mask/autoNumeric.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap-datetimepicker/js/bootstrap-datepicker.min.js') ?>"></script>

<script src="<?php echo base_url('public/dist/js/jquery.slicknav.min.js') ?>"></script>
<script src="<?php echo base_url('public/dist/js/swiper.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('public/vendor/select2/dist/js/select2.full.min.js') ?>"></script>

<script src="<?php echo base_url('public/dist/js/sb-admin-2.js') ?>"></script>

<script src="<?php echo base_url('public/dist/js/buttons.print.min.js') ?>"></script>

<script src="<?php echo base_url('public/dist/js/dataTables.buttons.min.js') ?>"></script>

<script type="text/javascript">


    $(document).ready(function(){
        $("#passw").keypress(function(e) {
            if(e.which == 13) {
                posts();
            }
        });

        $("#name").keypress(function(e) {
            if(e.which == 13) {
                posts();
            }
        });
    });


    $('#submit').click(function () {

        posts();
    });


    function posts() {
        var url = $('#form_login').attr('action');
        var data = $('#form_login').serialize();
        event.preventDefault();

        $.ajax({
            type: 'ajax',
            method: 'post',
            url: "<?php echo base_url('login_controller/check_login') ?>",
            data: data,
            async: false,
            dataType: 'json',
            success: function (data) {

                if (data.id > 0) {
                    $('#form_login')[0].reset();
                    window.location.replace("<?php echo base_url('') ?>");
                }

            },
            error: function (data) {
                $('.alert-danger').html('-- o Nome ou a senha invalida tenta novamente! --').fadeIn().delay(7000).fadeOut('slow');
            }
        });
    }
</script>


</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/logdy/main/login-12.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2019 08:11:03 GMT -->
</html>