<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24/02/2019
 * Time: 15:55
 */

?>
<style>


    nav {
        display: none;
    }

    @media (min-height: 936px) {
        #formLogin {

            margin-top: 15%!important;
        }
    }

    @media (min-width: 768px) {



        #formLogin {

            margin-left: 10%;
        }

    }

    @media (max-width: 768px) {

        #formLogin {
            min-width: 100% !important;
            height: 100% !important;
            margin-top: 30px!important;
            top: -60px;
        }

    }


</style>
<div class="container">

    <div class="row">

        <div id="formLogin" class="col-md-4 col-md-offset-4" style="
        max-width: 380px!important;
        padding-left: 40px;  padding-right: 40px;  padding-bottom: 10px;  padding-top: 10px;
                    border-radius: 10px 10px 10px 10px">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-home fa-fw"></i> <b>Login</b></h3>
                    <h1 class="text-primary text-center"><i
                                class="fa fa-user fa-4x"></i></h1>
                </div>
            </div>


            <div class="">
                <div class="form-group">
                    <span>Utilizador. * </span>
                    <input class="form-control text-center" placeholder="Digite o nome da conta do Funcionario">
                </div>
                <div class="form-group">
                    <span>Senha. * </span>
                    <input class="form-control text-center" type="password" name="emp_password"
                           placeholder="Digite o senha do Funcionario">
                </div>

                <a type="button" href="<?php echo base_url('') ?>" class="btn btn-block btn-primary ">ENTRAR</a>
                <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">CANCELAR</button>
                <br>
                <h5 class="text-center">
                    <small style="margin-top: 10px" class="text-primary">
                        Se esqueceu a senha contacta nossos serviços na
                    </small>
                    <br>
                    <i class="fa  fa-database"> mariadb |</i>
                    <i class="fa fa-facebook"> facebook |</i>
                    <i class="fa fa-envelope"> Gmail |</i>
                    <i class="fa fa-twitter"> twitter </i>

                </h5>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>


</div>


