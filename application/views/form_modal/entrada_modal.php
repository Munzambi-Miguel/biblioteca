<!-- Modal -->
<style>

</style>
<div id="entrada_modal" class="modal fade" role="dialog">
    <div class="modal-dialog"></div>

    <div class="container">
        <!-- Modal content-->
        <div class="modal-content">

            <form class="form_entrada" id="form_entrada" action=""
                  method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 style="padding-top: 100px" class="text-primary text-center"><i
                                        class="fa fa-book fa-5x"></i></h1>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">

                                </div>
                            </div>
                            <br>

                            <h3><span class="text-primary">Entrada do Livro</span></h3>

                            <div style="border-left: 2px solid #ccc; padding-left: 20px!important; padding-right: 20px!important;">
                                <div class="form-group">
                                    <span>Selecione o Livro. * </span>
                                    <br>
                                    <select class="select2 form-control form-group" name="mov_books" style="width: 100%;" id="select-autor">
                                        <option value="">-- selecione o Autor do Livro --</option>
                                        <?php
                                        if ($read_livros->num_rows() > 0) {

                                            foreach ($read_livros->result() as $rows_sele) {
                                                ?>
                                                <option value="<?php echo $rows_sele->id; ?>">
                                                    <?php echo $rows_sele->title; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span>Quantidade. * </span>
                                    <input class="form-control text-right" value="1" name="mov_qt" type="number"
                                           placeholder="Quantidade">
                                </div>
                                <div class="form-group">
                                    <span>Multa </span>
                                    <input class="form-control text-right autonumber" name="mov_multas" data-a-sign=" Akz"
                                           data-p-sign="s" data-v-min="0"
                                           placeholder="Valor a Pago">
                                </div>
                                <div class="form-group">
                                    <span>Descrição </span>
                                    <textarea style="height: 200px" class="form-control" name="mov_desciptio"  placeholder="Selecione a data">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardar" data="" value="add">Novo</button>
                </div>
            </form>

        </div>
    </div>

</div>