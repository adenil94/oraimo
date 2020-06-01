    <style type="text/css">
        .list{
            display: none;
        } 
    </style>
    <div class="banner-wrapper has_background">
        <img src="/App/Frontend/Web/images/banner-for-all2.jpg"
             class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title container">Article</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs container">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="index-2.html"><span>Acceuil</span></a></li>
                    <li class="trail-item trail-end active"><span>Article</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        
                            <span  data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-grid display-mode active" id="mode-grid" value="grid">
                                <span class="button-inner " >
                                    affichage en  Grille
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
                            <span  data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-list display-mode " id="mode-list" value="list">
                                <span class="button-inner " >
                                    affichage en List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
                    </div>
                    <form class="kobolg-ordering" method="get" style="display: none;">
                        <select title="product_cat" name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Afficher par</option>
                            <option value="popularity">Sort by popularity</option>
                        </select>
                    </form>
                    <form class="per-page-form" style="display: none;">
                        <label>
                            <select class="option-perpage">
                                <option value="12" selected="">
                                    afficher 12
                                </option>
                                <option value="5">
                                    afficher 05
                                </option>
                                <option value="10">
                                    afficher 10
                                </option>
                                <option value="12">
                                    afficher 12
                                </option>
                                <option value="15">
                                    afficher 15
                                </option>
                                <option value="20">
                                    afficher tous
                                </option>
                            </select>
                        </label>
                    </form>
                </div>
                <div class="auto-clear equal-container better-height kobolg-products">
                    <ul class="row products columns-3 allProduct">

                     
                    </ul>
                </div>
              
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="achertermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: fit-content;">
    <div class="modal-content">
      
      <div class="modal-body">
                   <div class="widget oraimolg widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">
                                            Information d'achat
                                        </h3>
                                            <span class="produit_paiment"></span>  
                                        <ul class="oraimolg-mini-cart cart_list product_list_widget">
                                            <form class="needs-validation " id="valide_achat_form" >
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" id="nom_prenom" placeholder="Nom et Prénom" value="" required>
                                                    </div>
                                                </div>
                                                 <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" id="numero" placeholder="Numéro de téléphone" value="" required>
                                                    </div>
                                                     
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" id="ville_quartier" placeholder="Ville/Quartier" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" id="code_promot" placeholder="Code promot" value="" required>
                                                    </div>
                                                </div>
                                                <div class=" mb-2">
                                                    <div class="form-check">
                                                          <input class="form-check-input paiement" type="radio" name="paiement" id="after" value="after" checked>
                                                          <label class="form-check-label" for="after">
                                                            Payer à la livraison
                                                          </label>
                                                    </div>
                                                    <div class="form-check">
                                                          <input class="form-check-input paiement" type="radio" name="paiement" id="now" value="now" >
                                                          <label class="form-check-label" for="now">
                                                           Payer maintenant 
                                                          </label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-2 ref_paiement" style="display: none;" >
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" id="ref_paiement" placeholder="Référence de paiement MOMO" value="" required>
                                                      <small>Numéro d'envoie : 66523726</small>
                                                    </div>

                                                </div>
                                            </form>

                                            
                                        </ul>
                                       
                                            <button class="btn btn-info " id="Valide" style="width: 100%;background-color: #8ec31f;    border-color: #8ec31f;">Validé</button>
                                        
                                    </div>
                                </div>
      </div>
     
    </div>
  </div>
</div>



<script type="text/javascript">
    dataArticle();
</script>