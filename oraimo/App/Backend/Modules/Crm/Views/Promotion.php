		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Promotion</h4>
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
								<a href="#">Ajouter des Promotions</a>
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
													<input  type="text" name="nompromotion" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">Nom promotion</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
													<input  type="text" name="reduction" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">réduction</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
													<input  type="text" name="userpercente" class="form-control input-border-bottom" required>
													<label for="userpercenteFloatingLabel" class="placeholder">% vendeur</label>
												</div>
													
												<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
													<input  type="text" name="detail" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">detail</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12">
													<input  type="text" name="code" class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">code</label>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12">
													<input  type="date" name="date_debut" class="form-control input-border-bottom" required>
													<small>date debut</small>
												</div>
												<div class="form-group form-floating-label col-md-4 col-12">
													<input  type="date" name="date_fin" class="form-control input-border-bottom" required>
													<small> date fin</small>
												</div>
												
											</div>
											<hr>
										</div>

										<input type="text" hidden name="action" value="set_promo_type">
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
									<button class="btn btn-success" id="enregistrer_promotion">Enregistrer</button>
									
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


