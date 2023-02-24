<!-- Modal -->

<style>
    .select2 * {
        padding-top: 1px !important;
        padding-bottom: 30px !important;
    }
</style>

<div id="livro_modal" class="modal fade" role="dialog">
    <div class="modal-dialog"></div>
    <form class="myLivros" id="livros_forma" action=""
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
                                    <span>Codigo do Livro </span>
                                    <label></label>
                                    <input class="form-control error-message" name="books_barcode"
                                           placeholder="User O Scanner de Codigo de Barra">
                                </div>
                                <div class="form-group">
                                    <label>Titulo do Livro. * </label>
                                    <input class="form-control" name="books_title"
                                           placeholder="Digite o Titulo do Livro">
                                </div>
                                <div class="form-group">
                                    <label>Categoria. * </label>
                                    <div style="margin-top: 10px" class="form-group input-group">
                                        <select name="books_category" style="width: 100%" class="form-control select2" id="categori_selector">
                                        </select>
                                        <span class="btn btn-primary input-group-addon" id="cal_category"><i
                                                    class="fa fa-plus"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Editora. * </label>
                                    <div style="margin-top: 10px" class="form-group input-group">
                                        <select class="form-control select2" style="width: 100%" name="books_editora" id="books_selector">
                                        </select>
                                        <span class="btn btn-primary input-group-addon" id="cal_editora"><i
                                                    class="fa fa-plus"></i></span>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <small>Resumo do Livro</small>
                                    <textarea class="form-control" name="books_description" style="height: 120px"
                                              placeholder="Digite aqui a morada atual do estudante"></textarea>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6" style="padding: 20px; height: 300px; z-index: 0; cursor:pointer"
                                     id="store_image">
                                    <br> <br> <br>
                                    <h1 class="text-primary text-left"><i
                                                class="fa fa-book fa-5x"></i></h1>

                                </div>
                                <div class="col-sm-12" style="display: none">
                                    <input type="file" name="insert_image" id="insert_image" accept="image/*" capture="camera">
                                </div>
                            </div>

                            <div class="modal-body" style="z-index: 1000!important; margin-left: -20px">
                                <h3 ><span
                                            style="color: #0c0c0c; background: #fff"> Informação do livro</span></h3></div>
                            <div class="modal-body" style="border-left: 2px solid #ccc">

                                <div class="form-group">
                                    <label>Autor. * </label>
                                    <div style="margin-top: -30px" class="form-group input-group">
                                        <select class="form-control select2" style="width: 100%" name="books_autor" id="autor_selector">
                                        </select>
                                        <span class="btn btn-primary input-group-addon" id="cal_autor"><i
                                                    class="fa fa-plus"></i></span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group">
                                    <small style="margin-top: 10px"><i class="fa fa-phone-square"></i> Nº de copia
                                    </small>
                                    <input type="number" class="form-control text-right" value="0" name="books_numCopy"
                                           hidden="true" readonly="readonly">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="books_id" value="" placeholder="id books">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardar" data="" value="add">Novo</button>
                </div>

            </div>
        </div>
    </form>
</div>


<div id="insertimageModal" class="modal" role="dialog">
	<div class="modal-dialog"></div>
	<div class="container">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Configurar a Imagem</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div style="margin-left: -25px" class="col-sm-12">
						<div id="image_demo"></div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" id="close-modal" class="btn btn-default">Fechar</button>
				<button class="btn btn-success crop_image">Inserir</button>
			</div>
		</div>
	</div>
</div>
