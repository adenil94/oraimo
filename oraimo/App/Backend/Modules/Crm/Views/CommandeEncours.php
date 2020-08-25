		
<style type="text/css">
	.main-panel {
     max-width: inherit!important; 
}

</style>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Commande en cours</h4>
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
								<a href="#">Tous les Commandes en cours</a>
							</li>
						</ul>
					</div>
					<div class="page-category">
						<div class="content content-full">
							<div class="page-navs bg-white" style="overflow-y: auto;">
								<div class="nav-scroller">
									<div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
										<a class="nav-link active show" data-toggle="tab" href="#tab1">Lites des Commandes en cours
											<span class="count ml-1"></span>
										</a>
									</div>
								</div>
	

									<table id="commande" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>image</th>
													<th>Num</th>
													<th>article</th>
													<th>prix</th>
													<th>Qté</th>
													<th>Promotion</th>
													<th>Code Promo</th>
													<th>prix reduit</th>
													<th>description</th>
													<th>date</th>
													<th>date livraison</th> 
													<th>paiement</th>
													<th>acheteur</th>
													<th>vendeur</th>
													<th>numero</th>
													<th>ville</th>
													<th>statut</th>
													<th class="action">action</th>
													
												</tr>
											</thead>
											
											<tbody id="tablecommandebody">
												
											</tbody>
									</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 

<script type="text/javascript">
	datacommandeof("achat");
</script>