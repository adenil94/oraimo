 code = window.location.pathname
 code_promo=code.split("/");
 code_promo=code_promo[1];
checkcodePromotion(code_promo)
function checkcodePromotion(code_promo){
    var URLUSER=$('#URLUSER').val();
    $.get( URLUSER, { action:"check_code",code:code_promo } )
    .done(function( data ) {
        var response=data;
        
            if (response.response=="notExist_Or_invalide") {
                 $("#code_promot").val(code_promo);
                 if (code_promo=="") {

                 }else{

                    $(".codevalidationError").show();
                 }
                 $(".reductionpercent").html("0");
            }else{
                 $("#code_promot").val(code_promo);
                $(".codevalidationTrue").show();
                $(".reductionpercent").html(response.response.reduction);
            }
         }) 
 }
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
                                       <br> <span class="price"><span class="kobolg-Price-amount amount">
                                        <span
                                            class="kobolg-Price-currencySymbol"></span>`+article[i].prix+` FCFA</span>
                                    </h3>
                                    

                                    <div class="rating-wapper nostar" style="text-align: center;">
                                        <i class="fa fa-shopping-bag panierAdd" data-name="`+article[i].nom+`" data-prix="`+article[i].prix+`"  data-img="`+urlimage+`/`+images[0]+`" style="font-size: 30px;color: dodgerblue; position:relative" data-id="`+article[i].idarticle+`" aria-hidden="true">
                                        <span class="countNumberme`+article[i].idarticle+`" style="position:absolute; top:-13px;left:-6px; font-size:21px;color: #8ec31f;">0</span>
                                        </i>
                                        <i class="fa fa-share-square partage mt-4" style="font-size: 30px;color: cadetblue;" data-id="`+article[i].idarticle+`"  aria-hidden="true"></i>
                                        <a class="whatsapp" href="#" data-nomarticle="`+article[i].nom+`">
                                        <i class="fa fa-whatsapp mt-4" style="font-size: 30px;color: green;" aria-hidden="true" data-id="`+article[i].idarticle+`"></i>
                                        </a>
                                    </div>

                                      <div class="rating-wapper nostar" style="text-align: center;">
                                        <button class='btn btn-sm btn-info acherter '
                                         data-nom="`+article[i].nom+`" data-prix="`+article[i].prix+`"    data-id="`+article[i].idarticle+`"  
                                         style="width: 100%;background-color: #8ec31f;    border-color: #8ec31f;" >
                                        Acheter</button>
                                    </div>

                                    
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
                                    <div class="group-button-inner mb-3" style="text-align: center;">
                                         <i class="fa fa-shopping-bag panierAdd" data-name="`+article[i].nom+`" data-prix="`+article[i].prix+`"  data-img="`+urlimage+`/`+images[0]+`" style="font-size: 30px;color: dodgerblue; position:relative" data-id="`+article[i].idarticle+`" aria-hidden="true">
                                        <span class="countNumberme`+article[i].idarticle+`" style="position:absolute; top:-13px;left:-6px; font-size:21px;color: #8ec31f;">0</span>
                                        </i>
                                        <i class="fa fa-share-square partage mt-4" style="font-size: 30px;color: cadetblue;" data-id="`+article[i].idarticle+`"  aria-hidden="true"></i>
                                        <a class="whatsapp" href="#" data-nomarticle="`+article[i].nom+`">
                                        <i class="fa fa-whatsapp mt-4" style="font-size: 30px;color: green;" aria-hidden="true" data-id="`+article[i].idarticle+`"></i>
                                        </a>
                                        
                                    </div>
                                    <div class="rating-wapper nostar" style="text-align: center;">
                                        <button class='btn btn-sm btn-info acherter '
                                         data-nom="`+article[i].nom+`" data-prix="`+article[i].prix+`" data-id="`+article[i].idarticle+`"  
                                         style="width: 100%;background-color: #8ec31f;    border-color: #8ec31f;" >
                                        Acheter</button>
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

function sendForm(formData,messagesucess,rederecto,idprogress,myurl){

                $.ajax( {
                    url        : myurl,
                    type       : 'POST',
                    cle        : 'action',
                    contentType: false,
                    cache      : false,
                    processData: false,
                    data       : formData,
                    xhr        : function ()
                    {
                        var jqXHR = null;
                        if ( window.ActiveXObject )
                        {
                            jqXHR = new window.ActiveXObject( "Microsoft.XMLHTTP" );
                        }
                        else
                        {
                            jqXHR = new window.XMLHttpRequest();
                        }

                        //Upload progress
                        jqXHR.upload.addEventListener( "progress", function ( evt )
                        {
                            if ( evt.lengthComputable )
                            {
                                var percentComplete = Math.round( (evt.loaded * 100) / evt.total )-1;
                                //Do something with upload progress
                                 $(idprogress).css('width',percentComplete+"%");
                                 $(idprogress).attr('aria-valuenow',percentComplete);
                                

                               
                                 
                                $(idprogress).html( percentComplete+"%");
                                $(idprogress+"title").html( percentComplete+"%");
                                console.log( 'Uploaded percent', percentComplete );
                            }
                        }, false );

                        //Download progress
                        jqXHR.addEventListener( "progress", function ( evt )
                        {
                            if ( evt.lengthComputable )
                            {
                                var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                                
                            }
                        }, false );

                        return jqXHR;
                    },
                    success    : function ( data )
                    {
                         var reponse  = data;
                        //Do something success-ish
                        
                        if (reponse.response==true) {

                        console.log( 'Completed.' );
                        setTimeout(function(){
                            $(idprogress).html( "100%");
                             $('.overflow').hide();
                            swal("Super!", messagesucess, "success")
                                .then((value) => {
                                    $(':input').not(":button",":reset",":checkbox").val("");
                                    $(':checkbox').prop('checked',false);
                                    if (rederecto!="") {
                                    window.location.href=rederecto;

                                    }
                                });

                           }, 2000);
                        }else{
                            swal("Oups!", "veuillez  réessayer!", "error")
                                .then((value) => {
                                  //location.reload(true);
                                });
                            $('.overflow').hide();
                        }

                        
                    }
                } );
}

$(document).on("click",".whatsapp",function(){
   var nomArticle= $(this).attr("data-nomarticle");
    window.open("https://wa.me/22999915230/?text=Salut! j'ai vu cet article "+nomArticle+"  sur https://www.oraimo-bj.com/, j'aimerais avoir plus d'informations.", '_blank');
})
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

$(document).on("click",".panierAdd",function(){
    var nom=$(this).attr("data-name");
    var img=$(this).attr("data-img");
    var prix=$(this).attr("data-prix");
    var id=$(this).attr("data-id");
    $(this).attr("data-removearticle","remocarticle"+id);
    var totale=parseInt($(".totale").html()) + parseInt(prix) ;
    $(".totale").html(totale);
    var countNumberme=parseInt($(".countNumberme"+id).html())+1;
    $(".countNumberme"+id).html(countNumberme);

    var countTotale=parseInt($(".count").html()) + 1;

    $(".count").html(countTotale);

    var li=` <li class="oraimolg-mini-cart-item mini_cart_item remocarticle`+id+`_`+countTotale+`" >
                                        <a href="#" class="remove remove_from_cart_button" data-id="`+id+`" data-remove="remocarticle`+id+`_`+countTotale+`" data-prix="`+prix+`">×</a>
                                        <a href="#">
                                            <img src="`+img+`"
                                                 class="attachment-oraimolg_thumbnail size-oraimolg_thumbnail"
                                                 alt="img" width="600" height="778">`+nom+`&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="oraimolg-Price-amount amount"><span
                                                class="oraimolg-Price-currencySymbol"></span>`+prix+`</span> FCFA</span>
                                    </li>`;
    $(".product_list_widget").append(li);

})


$(document).on("click",".remove_from_cart_button",function(){
    var li_for_remove= $(this).attr("data-remove");
    var id=$(this).attr("data-id");
    $("."+li_for_remove).hide('slow', function(){ $("."+li_for_remove).remove(); });
    var countTotale=parseInt($(".count").html()) - 1;
    $(".count").html(countTotale);
    var prix=$(this).attr("data-prix");
    var countNumberme=parseInt($(".countNumberme"+id).html())-1;
    $(".countNumberme"+id).html(countNumberme);
    var totale=parseInt($(".totale").html()) - parseInt(prix) ;
    $(".totale").html(totale);
});

// losque l'utilisateur choisis le produit a acheter
$(document).on("click",'.acherter',function(){

    var prix =  parseInt($(this).attr("data-prix")) - (parseInt($(".reductionpercent").html()) * parseInt($(this).attr("data-prix")) /100);
    var name_price=" Article: <small style='color:#8ec31f' >"+$(this).attr("data-nom")+"  "+prix+" FCFA</small>";
    $(".article_acheter").val($(this).attr("data-id"))
    $(".produit_paiment").html(name_price);
    $("#achertermodal").modal();
})





// lors du choix de paiement 
$(document).on("change",".paiement",function(){
    if (this.value == 'now') {
        $(".ref_paiement").show("slow");
    }
    else if (this.value == 'after') {
        $(".ref_paiement").hide("slow");
        
    } 
})

// quand on click sur le bouton connexion 
$(document).on("click",'.connectuser',function(e){
    e.preventDefault();
    $("#connexionmodale").modal();
})
// choix de connexion a effectuer
$(document).on("change",".connexion",function(){
    if (this.value == 'creat') {
        $(".confirm_passe").show("slow");
    }
    else if (this.value == 'connexion') {
        $(".confirm_passe").hide("slow");     
    } 
})


