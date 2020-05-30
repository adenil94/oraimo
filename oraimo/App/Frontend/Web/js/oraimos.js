
// `<tr><td>`+article[i].nom+`</td>
// 					<td>`+article[i].prix+`</td>
// 					<td>`+article[i].tag+`</td>
// 					<td>picture</td>
// 					<td>`+article[i].vue+`</td>
// 					<td>`+article[i].lien+`</td>
// 					<td>`+article[i].idcommentaire+`</td>
// 					<td>`+article[i].idarticle+`</td>
// 					<td>`+article[i].description+`</td>
// 					<td>`+article[i].commentaire+`</td>
// 					<td>`+article[i].categorie+`</td>
// 					<td>`+article[i].article_idarticle+`</td>
// 					<td>`+article[i].aime+`</td></tr>
// 		  			`;
function dataArticle(){
	var urlimage="https://api.kitsmass.com/oraimo/img_article"
	var URLARTICLE=$('#URLARTICLE').val();
	$.get( URLARTICLE, { action:"get_aticles" } )
	.done(function( data ) {
		 var response=JSON.parse(data);
		 var article=response.response;
		 var count= article.length;
		 var li="";
		  for (var i = 0 ; i < count; i++) {
		  	var images=article[i].picture.split(";")
		
		  	li = li +`
                        <li class=" grid product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-24 mb-3 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">

                                <div class="product-thumb">
                                    <a class="thumb-link" href="/Article-`+article[i].lien+`-`+article[i].idarticle+`">
                                        <img class="img-responsive"
                                             src="`+urlimage+`/`+images[0]+`"
                                             alt="`+article[i].nom+`" width="600" height="778">
                                    </a>
                                </div>


                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="/Article-`+article[i].lien+`-`+article[i].idarticle+`">`+article[i].nom+`</a>
                                    </h3>

                                    <div class="rating-wapper nostar" style="text-align: center;">
                                        <i class="fa fa-shopping-bag commander" style="font-size: 30px;color: dodgerblue;" data-id="`+article[i].idarticle+`" aria-hidden="true"></i>
                                        <i class="fa fa-share-square partage mt-4" style="font-size: 30px;color: cadetblue;" data-id="`+article[i].idarticle+`"  aria-hidden="true"></i>
                                        <a href="https://wa.me/22999915230/?text=Salut! j'ai vu votre cet article `+article[i].nom+` sur https://www.oraimo-bj.com/, j'aimerais avoir plus d'informations.">
                                        <i class="fa fa-whatsapp mt-4" style="font-size: 30px;color: green;" aria-hidden="true" data-id="`+article[i].idarticle+`"></i>
                                        </a>
                                    </div>

                                    <span class="price"><span class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol"></span>`+article[i].prix+` FCFA</span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item list col-md-12 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner images">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="/Article-`+article[i].lien+`-`+article[i].idarticle+`">
                                        <img class="img-responsive"
                                             src="`+urlimage+`/`+images[0]+`"
                                             alt="Modern Watches" width="600" height="778">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="/Article-`+article[i].lien+`-`+article[i].idarticle+`">`+article[i].nom+`</a>
                                    </h3>
                                    <span class="price"> <span
                                            class="oraimolg-Price-amount amount"><span
                                            class="oraimolg-Price-currencySymbol"></span>`+article[i].prix+` FCFA</span></span>
                                    <div class="oraimolg-product-details__short-description">
                                        <p>`+article[i].description+`</p>
                                        
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="mb-3">
                                        <button class="btn-sm commander" style="    background-color: #8ec31f;" data-id="`+article[i].idarticle+`"  >
                                        <i class="fa fa-shopping-bag "  aria-hidden="true"></i>
                                        Commander
                                        </button>
                                        </div>

                                        <div class="mb-3"> 
                                        <a class="btn-sm partage"  href="https://wa.me/22999915230/?text=Salut! j'ai vu votre cet article `+article[i].nom+` sur https://www.oraimo-bj.com/, j'aimerais avoir plus d'informations."style="    background-color: #8ec31f;" data-id="`+article[i].idarticle+`" >
										<i class="fa fa-whatsapp " ></i>
                                        Ecrit au vendeur</a></div>

                                            
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <button class="btn-sm partage"  style="    background-color: #8ec31f;" data-id="`+article[i].idarticle+`"  >
                                                <i class="fa fa-share-square  "  aria-hidden="true"></i>
                                                Partager</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>`;
		  }
		  $(".allProduct").html(li);
		  $(".overflow").css("display","none");
		
		  // $('#articleAceuil').DataTable();
		})

}


$(document).on("click","#mode-grid",function(){
	$(this).addClass("active");
	$("#mode-list").removeClass("active");
	$(".list").hide();
	$(".grid").show("slow");
})
$(document).on("click","#mode-list",function(){
	$(this).addClass("active");
	$("#mode-grid").removeClass("active");
	$(".grid").hide();
	$(".list").show("slow");
})