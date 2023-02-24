<!-- Modal -->
<style>

    .select2 * {
        padding-top: 1px !important;
        padding-bottom: 30px !important;

    }

    .pagination {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
        font-size: 10px !important;
    }

    #data-modal_paginate * {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    #data-modal_length {
        display: none !important;
    }


</style>

<script>

    //data-modal_length


</script>

<div id="saida_modal" class="modal fade" role="dialog">
    <div class="modal-dialog"></div>

    <div class="container">
        <!-- Modal content-->
        <div class="modal-content">

            <form class="saida" id="saida_forma" action=""
                  method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><i class="fa fa-shopping-cart"></i> Selecioner</h3>

                            <div class="panel-default">
                                <div class="">

                                    <div class="panel">
                                        <span>Selecione o livro </span>
                                        <div class="row">
                                            <div class="col-sm-6" style="margin-bottom:5px ">
                                                <select class="select2 form-control"
                                                        style="width: 100%; height: 100px!important; " tabindex="-1"
                                                        aria-hidden="true">
                                                    <?php
                                                    if ($read_livros->num_rows() > 0) {
                                                        foreach ($read_livros->result() as $listLivros) {

                                                            echo '<option>' . $listLivros->title . '</option>';
                                                        }
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                            <div class="col-sm-4" style="margin-bottom:5px ">
                                                <input class="form-control text-right" name="" value="1"
                                                       type="number"
                                                       placeholder="Quantidade">
                                            </div>
                                            <div class="col-sm-2" style="margin-bottom:5px ">
                                                <button type="button" class="btn btn-primary btn-block"
                                                        data-toggle="modal"
                                                        data-target="#utilizador_modal">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span>Itens Selecionados </span>
                                <!-- /.panel-heading -->
                                <div class="" style="overflow: auto">

                                    <table style="cursor: pointer;" width="100%"
                                           class="table table-striped table-bordered table-hover"
                                           id="data-modal">
                                        <thead>
                                        <tr>
                                            <th style="min-width:200px !important ;">Livro</th>
                                            <th style="min-width:50px !important ;max-width:50px !important ;">Qt</th>
                                            <th>ação</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td>Exemplo de livro</td>
                                            <td class="text-right">2</td>
                                            <td style="min-width:60px !important ; max-width:60px !important ; width:60px !important">
                                                <button type="button" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.table-responsive -->

                                </div>

                                <!-- /.panel-body -->
                            </div>


                        </div>
                        <div class="col-sm-6" style="border-left: 1px solid #ccc">
                            <div class="row">
                                <div class="col-sm-12">

                                </div>
                            </div>


                            <h3>
                                <span class="text-primary"><i class="fa fa-shopping-bag"></i> Saida do Livro</span>
                            </h3>

                            <div class="form-group" style="margin-bottom: 35px">
                                <span>Taixa a Pagar </span>
                                <input class="form-control text-right autonumber" name="" data-a-sign=" Akz"
                                       data-p-sign="s" data-v-min="0"
                                       placeholder="Valor a Pagar">
                            </div>

                            <div class="form-group">
                                <span>Taixa Troco </span>
                                <input class="form-control text-right autonumber" name="" data-a-sign=" Akz"
                                       data-p-sign="s" data-v-min="0"
                                       placeholder="Troco do Estudante">
                            </div>
                            <div class="form-group">
                                <span>Data a Devolver * .</span>
                                <input class="form-control text-right" name="" type="text" id="d_auto"
                                       placeholder="Selecione a data">
                            </div>

                            <div class="form-group">
                                <span style="margin-bottom: 10px !important;">Selecione o aluno * .</span>
                                <select class="select2 form-control" style="width: 100%; height: 100px!important; "
                                        tabindex="-1" aria-hidden="true">
                                    <?php
                                    if ($read_aluno->num_rows() > 0) {
                                        foreach ($read_aluno->result() as $list) {

                                            echo '<option>' . $list->name . '</option>';
                                        }
                                    }
                                    ?>


                                </select>
                            </div>
                            <div class="form-group">
                                <span>Descrição </span>
                                <textarea class="form-control" name="emp_username"
                                          style="height: 250px; margin-top: 10px !important;"
                                          placeholder="Selecione a data"></textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" value="" data-dismiss="modal"><i
                                class="fa fa-close"></i> Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary " id="btnSave"><i class="fa fa-send-o"></i> Enviar
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>

<!--input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" -->

