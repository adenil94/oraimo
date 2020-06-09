

		<div class="main-panel">
			<div class="content">
				<span id="iduser" style="display: none;" ></span>
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Compte utilisateur : <span id="username" ></span></h4>
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
								<a href="#"></a>
							</li>
						</ul>
					</div>
					<div class="page-category">
						<div class="row row-card-no-pd mt-2" style="display: none;">
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-round">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="flaticon-chart-pie text-warning"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Nombre de visite totale</p>
													<h4 class="card-title">0</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-round">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="flaticon-coins text-success"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Nombre de vente effectué</p>
													<h4 class="card-title">0</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-round">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="flaticon-error text-danger"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Totale de prix généré</p>
													<h4 class="card-title">0</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="card card-stats card-round">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="flaticon-twitter text-primary"></i>
												</div>
											</div>
											<div class="col-7 col-stats">
												<div class="numbers">
													<p class="card-category">Nmbre de vente du mois</p>
													<h4 class="card-title">0</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					    </div>
						<div class="content content-full">
							<div class="page-navs bg-white">
								<div class="nav-scroller">
									<div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
										<a class="nav-link active show" data-toggle="tab" href="#tab1">Listes de vos liens
											<span class="count ml-1"></span>
										</a>
										
										<div class="ml-auto">
											<a href="#" data-toggle="modal" data-target="#codeModale" class="btn btn-success">Ajouter un code</a>
										</div>
									</div>
								</div>

									<table id="code_promotion" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>#</th>
													<th>lien</th>
													<th>Date de debut</th>
													<th>Date de fin </th>
													<th>code</th>
													<th>action</th>

												
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>lien</th>
													<th>Date de debut</th>
													<th>Date de fin </th>
													<th>code</th>
													<th>action</th>
												</tr>
											</tfoot>
											<tbody id="tablecodepromo">
												
											</tbody>
									</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




<!-- Modal -->
<div class="modal fade" id="codeModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Créer votre code de partage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">				
  <div class="form-group form-floating-label">
										<select class="form-control input-border-bottom" id="selectFloatingLabel" required>
											<option value="">&nbsp;</option>
											<option value=""  data-code="">1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
										<label for="selectFloatingLabel" class="placeholder">Choisir une promotion</label>
									</div>
											<div class="form-group">
												<div class="input-group mb-3">
													<input type="text" class="form-control cosdeinoute" placeholder="votre code" aria-label="code" aria-describedby="basic-addon2" readonly="">
													<div class="input-group-append">
														<span class="input-group-text" id="codePromot">CODE</span>
													</div>
												</div>
											</div>
										</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary creercode">Créé</button>
      </div>
    </div>
  </div>
</div>