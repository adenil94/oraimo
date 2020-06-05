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
								<a href="#">Tous les articles</a>
							</li>
						</ul>
					</div>
					<div class="page-category">
						<div class="content content-full">
							<div class="page-navs bg-white">
								<div class="nav-scroller">
									<div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
										<a class="nav-link active show" data-toggle="tab" href="#tab1">Lites des articles
											<span class="count ml-1"></span>
										</a>
										
										<div class="ml-auto">
											<a href="/crm-admin-oraimo/Ajoute-article" class="btn btn-success">Ajouter</a>
										</div>
									</div>
								</div>

									<table id="articleAceuil" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Nom</th>
													<th>prix</th>
													<th>tag</th>
													<th>picture</th>
													<th>lien</th>
													
													<th>description</th>
													<th>action</th>
													
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Nom</th>
													<th>prix</th>
													<th>tag</th>
													<th>picture</th>
													<th>lien</th>
											
													<th>description</th>
													<th>action</th>
												

												</tr>
											</tfoot>
											<tbody id="tableArtclebody">
												
											</tbody>
									</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 



<div class="modal fade bd-example-modal-lg" id="modaleEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content container p-3">
      	<form id="newformdadaedit" action="/Ajax.php" role="form" autocomplete="on" method="POST" enctype="multipart/form-data">
										<div class="alldivClone ">
											
										
										    <div id="AricleClone1 " class="row col-12">

												<div class="form-group form-floating-label col-md-6 col-12 col-lg-6">
													<input id="nomEdit" type="text" name="nom" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Nom</label>
												</div>
												<div class="form-group form-floating-label col-md-6 col-12 col-lg-6">
													<input id="prixedit" type="text" name="prix" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Prix</label>
												</div>
												<div class="form-group form-floating-label col-md-6 col-12 col-lg-6">
													<input id="descriptionedit" type="text" name="description" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Description</label>
												</div>
												<div class="form-group form-floating-label col-md-6 col-12">
													<input id="tagedit" type="text" name="tag" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Tag</label>
												</div>
											</div>
											<hr>
										</div>

										<input type="text" hidden name="action" value="edi_articles">
										<input type="text" hidden name="idarticle" id="idarticleedit" value="">

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
									<button class="btn btn-success" id="enregistrerEdit">Enregistrer</button>
									</div>
    </div>
  </div>
</div>
<script type="text/javascript">
	dataArticle();
</script>