<div id="page-wrapper">


    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Configuração do / <b>Perfil</b></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.col-lg-8 -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-default">

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">

                                    <h1 style="padding: 20px" class="text-primary text-center"><i
                                                class="fa fa-user fa-3x"></i></h1>
                                </div>
                            </div>
                            <br>

                            <h3><span class="text-primary"> Informação da Canta</span></h3>

                            <div style="border-left: 2px solid #ccc; padding-left: 10px">
                                <div class="form-group">
                                    <span>Utilizador. * </span>
                                    <input class="form-control" placeholder="Digite o nome da conta do Funcionario"
                                           value="<?php echo $user_name_session ?>"
                                    >
                                </div>
                                <div class="form-group">
                                    <span>Senha. * </span>
                                    <input class="form-control" type="password" name="emp_password"
                                           value="<?php echo $this->encryption->decrypt($password_session) ?>"
                                           placeholder="Digite o senha do Funcionario">
                                </div>
                                <div class="form-group" style="margin-bottom:30px;">
                                    <span>Confirmar. * </span>
                                    <input class="form-control" type="password" name="emp_password2"
                                           placeholder="Digite a segunda senha do Funcionario"
                                           value="<?php echo $this->encryption->decrypt($password_session) ?>">
                                </div>

                                <div class="form-group">
                                    <br>
                                    <small style="margin-bottom:10px">Categoria / Tipo de Funcinário</small>
                                    <select class="form-control" name="emp_tipe">
                                        <option value="2">Administrador</option>
                                        <option value="1">Funcionário</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="panel-foot panel-primary">
                    <div class="well">
                        <h3><?php echo $nome_session ?></h3>
                        <span>Seja bem vindo ao seitema de Livraria</span><br>
                        <span></span>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
        <!-- /.col-lg-4 -->


    </div>
    <?php
    require_once('form_modal/livro_modal.php');
    ?>

    <!-- /.row -->
</div>
