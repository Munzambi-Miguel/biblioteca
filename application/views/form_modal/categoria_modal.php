<!-- Modal -->

<style>
    .select2 * {
        padding-top: 1px !important;
        padding-bottom: 30px !important;
    }
</style>

<div id="categorias_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <form id="form_category" action="" method="post">
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
                                    <input class="form-control" id="category_name" name="category_name"
                                           placeholder="Digite aqui o tipo de livro">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="category_id" value="0">
                        <button type="button" class="btn btn-danger" value="" data-dismiss="modal">Cancelar
                        </button>
                        <button type="button" class="btn btn-primary" id="guardarCategory" value="add">Novo
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>