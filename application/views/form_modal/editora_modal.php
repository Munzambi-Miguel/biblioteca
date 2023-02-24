<!-- Modal -->

<style>
    .select2 * {
        padding-top: 1px !important;
        padding-bottom: 30px !important;
    }
</style>

<div id="editora_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <form id="form_editora" action="" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nome. * </label>
                                    <input class="form-control" id="editora_name" name="editora_name"
                                           placeholder="Digite o nome editora">
                                </div>

                                <div class="form-group">
                                    <span>Numero de Telefone </span>
                                    <input class="form-control" id="number_phone" name="number_phone"
                                           data-inputmask="&quot;mask&quot;: &quot;(+999) 999-999-999&quot;"
                                           data-mask=""
                                           placeholder="(+244) 999-090-898">
                                </div>


                                <div class="form-group" style="margin-top: 18px">
                                    <span>Descrição</span>
                                    <label></label>
                                    <textarea class="form-control" id="editora_descricao" name="editora_descricao"
                                              style="height: 150px"
                                              placeholder="Insere aquia as iinformações do escritore">
                                    </textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <input type="hidden" name="editora_id" value="0">
                        <input type="hidden" name="phone_id" value="0">

                        <button type="button" class="btn btn-danger" value="" data-dismiss="modal">
                            <i class="fa fa-close"></i> Cancelar
                        </button>
                        <button type="button" class="btn btn-primary" id="guardarEditora" value="add">
                            <i class="fa fa-send-o"></i> Novo
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>