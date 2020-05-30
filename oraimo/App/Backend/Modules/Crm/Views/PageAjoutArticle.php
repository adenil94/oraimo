		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Articles</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#"></a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Ajouter des articles</a>
							</li>
						</ul>
					</div>
					<div class="page-category">
						<div class="content content-full">
							<div class="page-navs bg-white">
								<div class="nav-scroller">
									<div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
										<a class="nav-link active show" data-toggle="tab" href="#tab1">Formulaire d'ajout
											
										</a>
										
										<div class="ml-auto">
											
										</div>
									</div>
								</div>

									<form id="newformdada" action="/Ajax.php" role="form" autocomplete="on" method="POST" enctype="multipart/form-data">
										<div class="alldivClone ">
											
										
										    <div id="AricleClone1 " class="row col-12">

												<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
													<input id="inputFloatingLabel" type="text" name="nom[]" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Nom</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
													<input id="inputFloatingLabel" type="text" name="prix[]" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Prix</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
													<input id="inputFloatingLabel" type="text" name="description[]" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Description</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12">
													<input id="inputFloatingLabel" type="text" name="tag[]" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Tag</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12">
													<select class="form-control input-border-bottom" id="selectFloatingLabel" required name="categorie[]">
														<option value="">&nbsp;</option>
														<option>1</option>
													</select>
													<label for="selectFloatingLabel" class="placeholder">Catégorie</label>
												</div>
												 <div class="col-md-4 col-12 row ">
												 	<div class="col-4">
												 		<label for="picture"><h4>Photos 1 <span style="color: red" >*</span> </h4></label>
                                                         <div class = " row" id="addpicture">
                                                          <div class="divimag col-lg-3 col-md-6">
                                                          <input type="file" hidden class="form-control" name="picture[]" id="files1"  title="Selecte your files.">
                                                            <li class="fa fa-plus filesview thumbnail" data-id="files1" ></li>
                                                             <img  class="filesviews " src = "https://via.placeholder.com/250"  id="viewfiles1" alt = "Generic placeholder thumbnail">
                                                          </div>
                                                            
                                                        </div>
												 	</div>
												 	<div class="col-4">
												 		<label for="picture"><h4>Photos 2</h4></label>
                                                         <div class = " row" id="addpicture2">
                                                          <div class="divimag col-lg-3 col-md-6">
                                                          <input type="file" hidden class="form-control" name="picture[]" id="files2"  title="Selecte your files.">
                                                            <li class="fa fa-plus filesview thumbnail" data-id="files2" ></li>
                                                             <img  class="filesviews " src = "https://via.placeholder.com/250"  id="viewfiles2" alt = "Generic placeholder thumbnail">
                                                          </div>
                                                            
                                                        </div>
												 	</div>
												 	<div class="col-4">
												 		<label for="picture"><h4>Photos 3</h4></label>
                                                         <div class = " row" id="addpicture">
                                                          <div class="divimag col-lg-3 col-md-6">
                                                          <input type="file" hidden class="form-control" name="picture[]" id="files3"  title="Selecte your files.">
                                                            <li class="fa fa-plus filesview thumbnail" data-id="files3" ></li>
                                                             <img  class="filesviews " src = "https://via.placeholder.com/250"  id="viewfiles3" alt = "Generic placeholder thumbnail">
                                                          </div>
                                                            
                                                        </div>
												 	</div>
                                                      
                                            		</div>
											</div>
											<hr>
										</div>

										<input type="text" hidden name="action" value="set_articles">
									</form>
									<div class="demo">
										<div class="progress-card">
											<div class="progress-status">
												<span class="text-muted">Progession</span>
												<span class="text-muted fw-bold" id="progressetitle"> 0%</span>
											</div>
											<div class="progress" style="height: 6px;">
												<div class="progress-bar bg-info" id="progresse" role="progressbar" style="width: 0%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="0%"></div>
											</div>
										</div>
									</div>
									<div class="card-action mb-3 mt-3">
									<button class="btn btn-success" id="enregistrer">Enregistrer</button>
									<a href="#" class="btn btn-info " id="AddMoreArticle"  data-number="1" >Plus
												<span class="countNumber" > ( 1 )  </span>
											</a>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


