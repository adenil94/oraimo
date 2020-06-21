<div class="page-navs bg-white">
	<div class="nav-scroller">
		<div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
			<a class="nav-link active show" data-toggle="tab" href="#tab1"><i class="fa fa-user" aria-hidden="true"></i> Profile Utilisateur
				<span class="count ml-1"></span>
			</a>
		</div>
	</div>
	<div class="page-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-profile">
								
								<div class="card-body">
									<div class="user-profile text-center">
										<div class="name"> 
										 <i class="fa fa-money" aria-hidden="true"></i>  <span id="solde" >12000 </span> FCFA</div>
										<div class="job"><i class="fa fa-phone-square" aria-hidden="true"></i>  <span id="numero" >66523726</span> </div>
										<div class="desc"><i class="fa fa-map-marker" aria-hidden="true"></i> <span id="adresse" >Cotonou, Bénin </span>  </div>
										<div class="social-media">
											
										</div>
										<div class="view-profile">
											<a href="#" class="btn btn-secondary btn-block" id="demande_payement"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Demande de paiement</a>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="row user-stats text-center">
										<div class="col">
											<div class="number"><span id="click">125 </span> </div>
											<div class="title">Visites</div>
										</div>
										<div class="col">
											<div class="number"><span id="vente" > 25 </span>  </div>
											<div class="title">Vendues</div>
										</div>
										<div class="col">
											<div class="number"><span id="echoue" > 134</span></div>
											<div class="title">Echoué</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card card-with-nav">
								<div class="card-body">
										<form id="formEdiUser">
									<div class="row mt-3">
											
										
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>Nom & Prénom</label>
												<input type="text" class="form-control "  id="nom_prenom"  name="identifiant" placeholder="Name" value="Hizrian" readonly="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>Téléphone</label>
												<input type="text" class="form-control" id="numerouser" value="+62008765678" name="	email_numero" >
											</div>
										</div>
									</div>

									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Address</label>
												<input type="text" class="form-control" id="adresseuser" value="Cotonou" name="adresse" placeholder="Address">
											</div>
										</div>
									</div>
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Mot de passe</label>
													<input type="password" class="form-control" value="*********" name="mot_pasee" placeholder="Name" value="Hizrian">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Comfirmer mot de passe</label>
													<input type="password" class="form-control" value="" name="confirm_passe">
												</div>
											</div>
										</div>
									</div>
									<input type="text" hidden name="action" value="edit_user">
									</form>
									<div class="text-right mt-3 mb-3">
										<button class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Enregister</button>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
