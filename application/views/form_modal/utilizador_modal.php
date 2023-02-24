<!-- Modal -->
<div id="utilizador_modal" class="modal fade" role="dialog">
    <div class="modal-dialog"></div>
    <form class="myFuncionario" id="funcio_forma" action=""
          method="post">
        <div class="container">
            <!-- Modal content-->
            <div class="modal-content">


                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="modal-body">

                                <h3>Informação Geral</h3>
                                <div class="form-group" style="margin-top: 18px">
                                    <span>Passe do Funcionário / BI. </span>
                                    <label></label>
                                    <input class="form-control" name="emp_bi"
                                           placeholder="Digite o numero BI do Funcionario">
                                </div>
                                <div class="form-group">
                                    <label>Nome . * </label>
                                    <input class="form-control" name="emp_name"
                                               placeholder="Digite o nome completo do Funcionario" required>

                                </div>
                                <div class="form-group">
                                    <label>Numero de Telefone. * </label>
                                    <input class="form-control" name="emp_numeber"
                                           data-inputmask="&quot;mask&quot;: &quot;(+999) 999-999-999&quot;"
                                           data-mask=""
                                           placeholder="(+244) 999-090-898">
                                </div>
                                <div class="form-group">
                                    <label>Genero</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="emp_genero" id="radioMasculino" value="1"
                                               checked>Masculino
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="emp_genero" id="radioFeminino" value="2">Femenino
                                    </label>

                                </div>


                                <div class="form-group" style="margin-top: 20px">

                                    <span>Morada do Funcionário </span>
                                    <br>
                                    <div style="padding-left: 10px">
                                        <br>

                                        <small style="margin-top: 10px">Selecione o Bairro</small>
                                        <br>
                                        <br>
                                        <div style="margin-top: 10px" class="form-group input-group">
                                            <select name="emp_city" id="emp_selector" style="width: 100%" class="form-control select2">
                                            </select>
                                            <span class="btn btn-primary input-group-addon" id="nova_cidade"><i class="fa fa-plus"></i></span>
                                        </div>

                                        <br>
                                        <small style="margin-top: 30px!important;">Digite o destino</small>
                                        <br>
                                        <br>
                                        <textarea class="form-control" style="height:82px " name="emp_description"
                                                  placeholder="Digite aqui a morada atual do Funcionario">
                                        </textarea>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 style="padding: 20px" class="text-primary text-center"><i
                                                class="fa fa-user fa-5x"></i></h1>
                                </div>
                            </div>
                            <br>

                            <h3><span class="text-primary"> Informação da Canta</span></h3>

                            <blockquote>
                                <div class="form-group">
                                    <span>Utilizador. * </span>
                                    <input class="form-control" name="emp_username" id="emp_username"
                                           placeholder="Digite o nome da conta do Funcionario">
                                </div>
                                <div class="form-group">
                                    <span>Senha. * </span>
                                    <input class="form-control" type="password" name="emp_password"
                                           placeholder="Digite o senha do Funcionario">
                                </div>
                                <div class="form-group">
                                    <span>Confirmar. * </span>
                                    <input class="form-control" type="password" name="emp_password2"
                                           placeholder="Digite a segunda senha do Funcionario">
                                </div>

                                <div class="form-group">
                                    <small style="margin-top: 10px">Categoria / Tipo de Funcinário</small>
                                    <br>
                                    <select class="form-control" name="emp_tipe" id="empty_type">
                                        <option value="1">Funcionário</option>
                                        <option value="2">Administrador</option>

                                    </select>

                                </div>
                                <div class="form-group alert alert-warning alert-dismissable text-left" id="alerta_pass"
                                     style="display: none;">
                                </div>
                                <div class="form-group alert alert-warning alert-dismissable text-left" id="alert-danger"
                                     style="display: none;">
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">

                    <input type="hidden" name="phone_id" value="0">
                    <input type="hidden" name="city_id" value="0">

                    <input type="hidden" name="adress_id" value="0">
                    <input type="hidden" name="user_id" value="0">

                    <input type="hidden"  name="emplory_id" value="0">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardar" data="" value="add">Novo</button>

                </div>

            </div>
        </div>
    </form>

</div>