

		<div class="main-panel">
			<div class="content">
				<span id="iduser" style="display: none;" ></span>
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Compte Vendeur : <span id="username" ></span>
							<span id="statut">
								
							</span>

						</h4>
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
						
						<div class="content content-full">
							<div class="">
							<div class="card">
								
								<div class="card-body">
									<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
												
												<i class="fa fa-home" aria-hidden="true"></i>

												Accueil
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
												<i class="fa fa-user-o" aria-hidden="true"></i>
												Compte
											</a>
										</li>
										<li class="nav-item" style="display: none;">
											<a class="nav-link" id="pills-contact-tab-icon" data-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
												<i class="fa fa-line-chart" aria-hidden="true"></i>
												statistique
											</a>
										</li>
									</ul>
									<div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
										<div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
											<?php include 'tableauAcceuil.php';?>
										</div>
										<div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
											<?php include 'CompteUser.php';?>
										</div>
										<div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
											<?php include 'StatistiqueUser.php';?>
											
										</div>
									</div>
								</div>
							</div>
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
        <button type="button" class="btn btn-primary creercode">Créer</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
var  users = window.location.pathname;
var userInfo=users.split("/");
var Numero=userInfo[2];
getUserInf(Numero);
allpromotion();
</script>