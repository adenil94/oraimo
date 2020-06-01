<div class="banner-wrapper no_background">
    <div class="banner-wrapper-inner">
        <nav class="oraimolg-breadcrumb container"><a href="index-2.html">Article</a><i class="fa fa-angle-right"></i><a href="#"><?=$name?></a>
            <i class="fa fa-angle-right"></i><?=$name?>
        </nav>
    </div>
</div>




<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="oraimolg-notices-wrapper"></div>
                <div id="product-27"
                     class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div class="oraimolg-product-gallery oraimolg-product-gallery--with-images oraimolg-product-gallery--columns-4 images">
                                    <div class="flex-viewport">
                                        <figure class="oraimolg-product-gallery__wrapper">
                                            <div class="oraimolg-product-gallery__image">
                                                <img alt="img"
                                                     src="<?=$images?>">
                                            </div>
                                           
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        <li><img
                                                src="<?=$images?>"
                                                alt="img">
                                        </li>
                                        
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <h1 class="product_title entry-title"><?=$name?></h1>
                                <p class="price"> <span
                                        class="oraimolg-Price-amount amount"><span
                                        class="oraimolg-Price-currencySymbol"><?=$prix?> FCFA</p>
                                <p class="stock in-stock">
                                   Disponibilité: <span> Oui</span>
                                </p>
                                <div class="oraimolg-product-details__short-description">
                                   <div class="oraimolg-product-details__short-description">
                                    <p><?=$description?></p>
                                    <ul>
                                        <li>Livraison à domicile</li>
                                        <li>Paiement à la livraison </li>
                                        <li>Pas satisfait rembourssé</li>
                                    </ul>
                                </div>
                              
                            </div>
                             <div class="rating-wapper nostar" style="text-align: center;">
                                        <button class='btn btn-sm btn-info acherter '
                                         data-nom="<?=$name?>" data-prix="<?=$prix?>"     
                                         style="width: 100%;background-color: #8ec31f;    border-color: #8ec31f;" >
                                        Acherter</button>
                                    </div>
                        </div>


                        

                    </div>
                   
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
	setInterval(function(){ $(".overflow").css("display","none"); }, 1500);
</script>