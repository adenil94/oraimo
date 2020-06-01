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
											<span class="count ml-1">(30)</span>
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
													<th>vue</th>
													<th>lien</th>
													<th>idcommentaire</th>
													<th>idarticle</th>
													<th>description</th>
													<th>commentaire</th>
													<th>categorie</th>
													<th>article_idarticle</th>
													<th>aime</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Nom</th>
													<th>prix</th>
													<th>tag</th>
													<th>picture</th>
													<th>vue</th>
													<th>lien</th>
													<th>idcommentaire</th>
													<th>idarticle</th>
													<th>description</th>
													<th>commentaire</th>
													<th>categorie</th>
													<th>article_idarticle</th>
													<th>aime</th>

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


<script type="text/javascript">
	dataArticle();
</script>