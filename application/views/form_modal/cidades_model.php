<!-- Modal -->

<style>
    .select2 * {
        padding-top: 1px !important;
        padding-bottom: 30px !important;
    }

    .error-node {
        display: none;
    }
</style>

<div id="cidades_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form id="city_form" action="" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Descrição . * </label>
                                    <input class="form-control" id="city_name" name="city_name"
                                           placeholder="Digite o nome da cidade">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="city_id" value="0">
                        <button type="button" class="btn btn-danger" value="" data-dismiss="modal">
                            Cancelar
                        </button>
                        <button type="button" name="action" class="btn btn-primary" id="guardarCidade" value="add">
                            Novo
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
