<!-- Modal -->

<style>
    .select2 * {
        padding-top: 1px !important;
        padding-bottom: 30px !important;
    }
</style>

<div id="aluno_modal" class="modal fade" role="dialog">
    <div class="modal-dialog"></div>

    <div class="container">
        <!-- Modal content-->
        <div class="modal-content">

            <form class="myAluno" id="aluno_forma" action=""
                  method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">Novo Estudante</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="modal-body">

                                <h3>Informação Geral</h3>
                                <div class="form-group" style="margin-top: 18px">
                                    <span>Numero de Cliente / BI. </span>
                                    <label></label>
                                    <input class="form-control" name="emp_bi"
                                           placeholder="Digite o numero BI do Cliente">
                                </div>
                                <div class="form-group">
                                    <label>Nome. * </label>
                                    <input class="form-control" name="emp_name"
                                           placeholder="Digite o nome completo do Cliente">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Numero de Telefone. * </label>
                                    <input class="form-control" name="emp_numeber"
                                           data-inputmask="&quot;mask&quot;: &quot;(+999) 999-999-999&quot;"
                                           data-mask=""
                                           placeholder="(+244) 999-090-898">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Genero. *</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="emp_genero" id="optionsRadiosInline2"
                                               value="1" checked>Masculino
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="emp_genero" id="optionsRadiosInline3"
                                               value="2">Femenino
                                    </label>

                                </div>

                                <div class="form-group" style="margin-top: 25px">

                                    <span>Morada do Cliente </span>
                                    <div style="padding-left: 10px">
                                        <small style="margin-top: 15px">Selecione o Bairro</small>

                                        <div style="margin-top: 10px" class="form-group input-group">
                                            <select name="emp_city" class="form-control select2" style="width: 100%" id="emp_selector">
												<option value="">-- Selecione a Categoria do Produto --</option>
                                            </select>
                                            <span class="btn btn-primary input-group-addon" id="nova_cidade"><i
                                                        class="fa fa-plus"></i></span>
                                        </div>

                                        <br>
                                        <small>Digite o destino</small>
                                        <input class="form-control" name="emp_description"
                                               placeholder="Digite aqui a morada atual do Cliente">
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
                                <div class="form-group" style="margin-bottom: 50px">
                                    <span>Utilizador</span>
                                    <input class="form-control" name="emp_username"
                                           placeholder="Digite o nome da conta do Cliente" disabled>
                                    <input class="form-control" name="emp_tipe" value="0" style="display: none">
                                </div>
                                <div class="form-group">
                                    <span>Senha</span>
                                    <input class="form-control" name="emp_password" type="password"
                                           placeholder="Digite o senha do Cliente" disabled>
                                </div>
                                <div class="form-group" style="padding-top: 5px!important;">
                                    <span>Confirmar</span>
                                    <input class="form-control" name="emp_password2" type="password"
                                           placeholder="Digite a segunda senha do Cliente" disabled>
                                </div>
                                <div class="form-group alert alert-warning alert-dismissable text-left" id="alerta_pass"
                                     style="display: none; ">
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="phone_id" value="telefone" placeholder="telefone">
                    <input type="hidden" name="city_id" value="cidade" placeholder="cidade">

                    <input type="hidden" name="adress_id" value="endereço" placeholder="endereço">
                    <input type="hidden" name="user_id" value="employer user" placeholder="employer user">

                    <input type="hidden" name="emplory_id" value="employer" placeholder="employer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardar" data="" value="add">Novo</button>
                </div>
            </form>
        </div>
    </div>
</div>
