
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">réduction</h4>
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
								<a href="#">Tous les réductions</a>
							</li>
						</ul>
					</div>
					<div class="page-category">
						<div class="content content-full">
							<div class="page-navs bg-white">
								<div class="nav-scroller">
									<div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
										<a class="nav-link active show" data-toggle="tab" href="#tab1">Lites des réductions
											<span class="count ml-1"></span>
										</a>
										
										<div class="ml-auto">
											<a href="/crm-admin-oraimo/reduction" class="btn btn-success">Ajouter</a>
										</div>
									</div>
								</div>
								

									<table id="tablereduction" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Nom de l'article</th>
													<th>reduction</th>
													<th>date debut</th>
													<th>date fin</th>
													<th>action</th>
													
												</tr>
											</thead>

											<tbody id="tablereductionbody">
												
											</tbody>
									</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade bd-example-modal-lg" id="modaleEditReduction" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content container p-3">
		      	<form id="newformdadaedit" action="/Ajax.php" role="form" autocomplete="on" method="POST" enctype="multipart/form-data">
					<div class="alldivClone ">											
										
										    <div id="AricleClone1 " class="row col-12">

												<div class="form-group form-floating-label col-md-6 col-12 col-lg-6">
													<label for="selectFloatingLabel" class="placeholder">Article</label><br>										    		
														<select class="form-control input-border-bottom selectFloatingLabel" id="idarticleEdit" required name="idarticle">
															<option value="">&nbsp;</option>
														</select>
												</div>
												<div class="form-group form-floating-label col-md-6 col-12 col-lg-6">
													<label for="inputFloatingLabel" class="placeholder">Réduction (%)</label><br>
													<select class="form-control input-border-bottom inputFloatingLabel" id="reductionEdit" name="reduction" required>
														<option value="">&nbsp;</option>														
													</select>													
												</div>
												<div class="form-group form-floating-label col-md-6 col-12 col-lg-6">
													<input id="date_debutEdit" type="date" name="date_debut" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Date de début</label>
												</div>
												<div class="form-group form-floating-label col-md-6 col-12">
													<input id="date_finEdit" type="date" name="date_fin" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Date de fin</label>
												</div>
											</div>
											<hr>
										</div>

										<input type="text" hidden name="action" value="edit_reduction">
										<input type="text" hidden name="idreduction" id="idreductionEdit" value="">

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
									<button class="btn btn-success" id="enregistrerEditReduction">Modifier</button>
									</div>
			    </div>
			  </div>
			</div> 



<script type="text/javascript">
	datareduction();
	selectArticle();
	selectReduction();
</script>