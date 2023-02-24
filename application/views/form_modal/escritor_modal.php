<!-- Modal -->

<style>
    .select2 * {
        padding-top: 1px !important;
        padding-bottom: 30px !important;
    }
</style>

<div id="escritores_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <form class="form_escritores" id="form_escritores" action="" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nome. * </label>
                                    <input class="form-control" id="autor_name" name="autor_name"
                                           placeholder="Digite o nome completo do escritore">
                                </div>

                                <div class="form-group" style="display:none">
                                    <span>Numero de Telefone </span>
                                    <input class="form-control" name="autor_number" id="autor_number"
                                           data-inputmask="&quot;mask&quot;: &quot;(+999) 999-999-999&quot;"
                                           data-mask=""
                                           placeholder="(+244) 999-090-898">
                                </div>

                                <div class="form-group" >
                                    <span class="btn-block">Genero</span>

                                    <label class="radio-inline">
                                        <input type="radio" name="autor_generos" id="radioMasculino"
                                               value="Masculino" checked>Masculino
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="autor_generos" id="radioFeminino"
                                               value="Feminino">Feminino
                                    </label>
                                </div>

                                <div class="form-group" style="margin-top: 18px">
                                    <span>Descrição</span>
                                    <label></label>
                                    <textarea class="form-control" name="autor_description" style="height: 150px"
                                              placeholder="Insere aquia as iinformações do escritore">
                                    </textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <input type="hidden" name="autor_id" value="0">
                        <input type="hidden" name="phone_id" value="0">

                        <button type="button" class="btn btn-danger" value="" data-dismiss="modal">
                            Cancelar
                        </button>
                        <button type="button" class="btn btn-primary" id="guardar_escrito" data="" value="add">
                            Novo
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>