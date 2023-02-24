<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24/02/2019
 * Time: 15:55
 */

?>

<style>

    @media (max-width: 992px) {
        .screen_wrap {
            width: 650px !important;
        }

    }

    @media all and (max-width: 767px) {
        .screen_wrap {
            width: 100% !important;
            height: 500px !important;
        }

    }

    .screenshot_section {
    }

    .screen_wrap {
        width: 900px;
        margin: 0 auto;
    }

    .screen_wrap .swiper-container {
        padding-bottom: 60px;
    }

    .testi_bullet.swiper-pagination-bullets,
    .screen_wrap .swiper-pagination-bullets {
        width: 100%;
        display: block;
        text-align: center;
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .screen_wrap .swiper-pagination-bullets .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background-color: #fd5656;
        opacity: 1;
        transition: all 0.2s ease-in-out;
    }

    .screen_wrap .swiper-pagination-bullets .swiper-pagination-bullet-active {
        background-color: #fc8b56;
        width: 15px;
        border-radius: 30px;
        transition: all 0.2s ease-in-out;
    }

    /* ==========================================================================
      Responsive Screenshot Section
       ========================================================================== */

</style>


<div id="page-wrapper">


    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-home fa-fw"></i> <b>Início</b></h3>

        </div>
        <!-- /.col-lg-12 -->

        <div id="screenshots" class="col-lg-12 screenshot_section">
            <div class="screen_wrap" style="" id="loadding">
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

                                                    <div class="row" style="height: 380px">
                                                        <div class="col-lg-12">

                                                            <?php if ($row->image == NULL) { ?>
                                                                <h1 style="margin-right: 10px; height: 225px"
                                                                    class="text-primary text-center"><i
                                                                            class="fa fa-book fa-5x"></i></h1>
                                                            <?php } else { ?>
                                                                <div id="image-load" style="width:100%!important;">
                                                                    <img width="100%"
                                                                         src="<?php echo "data:image/png;base64,"
                                                                             . base64_encode($row->image) ?>">
                                                                </div>
                                                            <?php } ?>

                                                            <div style="text-overflow: ellipsis;
                                                                    overflow: hidden;">
                                                                <div>
                                                                    <p>
                                                                    <h3>
                                                                        <div style="overflow: hidden; text-overflow: ellipsis;
                                                                    width:250px; border:1px; white-space:nowrap;"><?php echo $row->title ?>
                                                                        </div>
                                                                    </h3>
                                                                    </p>
                                                                </div>
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
            <h4 class="page-header"><i class="fa fa-comments fa-fw"></i> <b>Notificação</b></h4>
            <div class="alert alert-info alert-dismissable"
                 style="height: 180px; position: relative!important; width: 100%!important; display: inline-block!important;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span><b>Mostrando 20 livros registrado recentemente... . </b><a
                            href="<?php echo base_url('livro_controller/livro') ?>">
                        <i class="fa fa-edit"></i> ver mais + </a> </span><br>
                Bem Vindo ao Sistema de Biblioteca. Neste sistema temos os mehores seviços para tornar
                suas atividade estaveis e segurás. Soft - Kalends é um conjunto de Sistemas integrados
                ilimitados e com varias areas de desenvolvimento bem como:
                <br>
                Gestão de Farmácias, Systemas de Stock e Venda, Gestão de hospital, Gestão de recursos
                humanos, Gestão escolar, Systemas de Contabilidade, Gestão de Parimonos, Aplicativos de
                Taxi mobile, Gestão escolar e mais ...
                <br>
                <br>
                Para mais informação Contacta <a href="#" class="alert-link"><b>Movicel.: </b>+244 993 416 970 / <b>Unitel.: </b>
                    +244 944 265 130</a>
                <br>
                <br>
                Nome do utilizador logado.:
                <a href="#" class="alert-link">
                    <?php echo $user_name_session ?>
                </a>.
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

    $('.gridCities-CheckBox').each(function() {
        if ($(this)[0].checked) {
            $(this).closest('tr').addClass('highlighted selected');
        } else {
            $(this).closest('tr').removeClass('highlighted selected');
        }
    });
</script>
