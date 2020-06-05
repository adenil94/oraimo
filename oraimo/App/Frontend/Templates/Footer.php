<footer id="footer" class="footer style-01">
    <div class="section-010">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Copyright 2020 <a href="#">oraimo</a>. Propulsé par <a href="https://kitsmass.com/">kit's</a> .</p>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">

        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="index-2.html">
                    <span class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                Acceuil
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="" class="connectuser">
                    <span class="icon connectuser">
                        <i class="fa fa-user connectuser" aria-hidden="true"></i>
                    </span>
                Compte
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">

        </div>
    </div>
</div>
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>

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
                                                      <input type="text" class="form-control" name="nom_prenom" id="nom_prenom" placeholder="Nom et Prénom" value="" required>
                                                    </div>
                                                </div>
                                                 <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="numero" id="numero" placeholder="Numéro de téléphone" value="" required>
                                                    </div>
                                                     
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="ville_quartier" id="ville_quartier" placeholder="Ville/Quartier" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control"  name="code_promot" id="code_promot" placeholder="Code promo" value="" required readonly>
                                                    </div>
                                                    <small class="codevalidationError ml-3" style="color: red;display: none;">code promo invalide ou expiré</small>
                                                    <small class="codevalidationTrue ml-3" style="color: green;display: none;"> code promo validé <span class="reductionpercent" > </span> % de reduction sur le prix</small>



                                                </div>
                                                <div class=" mb-2">
                                                    <div class="form-check">
                                                          <input class="form-check-input paiement" type="radio" name="paiement" id="after" value="after" checked>
                                                          <label class="form-check-label" for="after">
                                                            Payer à la livraison
                                                          </label>
                                                    </div>
                                                    <div class="form-check">
                                                          <input class="form-check-input paiement"  type="radio" name="paiement" id="now" value="now" >
                                                          <label class="form-check-label" for="now">
                                                           Payer maintenant 
                                                          </label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-2 ref_paiement" style="display: none;" >
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="ref_paiement" id="ref_paiement" placeholder="Référence de paiement MOMO" value="" required>
                                                      <small>Numéro d'envoie : 66523726</small>
                                                    </div>

                                                </div>
                                                 <input type="text" hidden name="action" value="comande_user">
                                                 <input type="text" class="article_acheter" hidden name="article"  value="">
                                            </form>

                                            
                                        </ul>
                                       
                                            <button class="btn btn-info " id="Valide" style="width: 100%;background-color: #8ec31f;    border-color: #8ec31f;">Validé</button>
                                        
                                    </div>
                                </div>
      </div>
     
    </div>
  </div>
</div>
<div class="modal fade" id="connexionmodale" tabindex="-1" role="dialog" aria-labelledby="connexionmodale" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: fit-content;">
    <div class="modal-content">
      
      <div class="modal-body">
                   <div class="widget oraimolg widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">
                                            Information de connexion
                                        </h3>
                                            <span class="produit_paiment"></span>  
                                        <ul class="oraimolg-mini-cart cart_list product_list_widget">
                                            <form class="needs-validation " id="connexion_form" >
                                               <div class=" mb-2">
                                                    <div class="form-check">
                                                          <input class="form-check-input connexion" type="radio" name="connexion" id="connexion" value="connexion" checked>
                                                          <label class="form-check-label" for="connexion">
                                                            Connexion
                                                          </label>
                                                    </div>
                                                    <div class="form-check">
                                                          <input class="form-check-input connexion" type="radio" name="connexion" id="creat" value="creat" >
                                                          <label class="form-check-label" for="creat">
                                                           Créé un compte 
                                                          </label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-2 confirm_passe" style="display: none;">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="nom_prenomconnecion" id="nom_prenomconnecion" placeholder="Nom et Prénom" value="" required>
                                                    </div>
                                                </div>
                                                 <div class="row mb-2 confirm_passe" style="display: none;">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="villeconnexion" id="villeconnexion" placeholder="ville" value="" required>
                                                    </div>
                                                </div>
                                                 <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="numeroconnexion" id="numeroconnexion" placeholder="Numéro de téléphone" value="" required>
                                                    </div>
                                                     
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="password" class="form-control" name="password" id="mot_de_pase" placeholder="Mot de passe" value="" required autocomplete>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row mb-2 confirm_passe" style="display: none;" >
                                                    <div class="col-md-12">
                                                      <input type="password" class="form-control" name="comfirmpasse" id="confirm_mot_de_passe" placeholder="comfirmer le mot de passe" value="" required autocomplete>
                                                      <small>Attention: Pour des raisons de sécurité, un changement de mot de passe recquire la CIN, et l'acte de naissance</small>
                                                    </div>

                                                </div>
                                               <input type="text" hidden name="action" value="connect_user">
                                            </form>

                                            
                                        </ul>
                                       
                                            <button class="btn btn-info " id="connexionValide" style="width: 100%;background-color: #8ec31f;    border-color: #8ec31f;">Connecter</button>
                                        
                                    </div>
                                </div>
      </div>
     
    </div>
  </div>
</div>


<script >
  // lors de la validation de l'acchat
$(document).on("click",'#Valide',function(){
var URLUSER=$('#URLUSER').val();
var nom_prenom=$("#nom_prenom").val();
var numero=$("#numero").val();
var ville_quartier=$("#ville_quartier").val();

if (nom_prenom==""|| numero==""|| ville_quartier==""){
swal("Oups!", "Nom, Numéro et adresse doivent être remplie  ", "error")
}else{
     var myForm = document.querySelector('#valide_achat_form');
   var formData= new FormData(myForm); 
    $('.overflow').show(); 
    var messagesucess="Votre achat à été enregistrer,  patientez quelque minute pour la validation par sms ou whatsapp!";
    var rederecto='/';
    var idprogress='#progresse';
    var url=URLUSER;
     sendForm(formData,messagesucess,rederecto,idprogress,url);  
}

})
$(document).on("click",'#connexionValide',function(){
var URLUSER=$('#URLUSER').val();
var numero=$("#numeroconnexion").val();
var passe=$("#mot_de_pase").val();
var confirm_mot_de_passe=$("#confirm_mot_de_passe").val();

if (passe==""|| numero==""){
swal("Oups!", "informations inccorecte  ", "error")
}else if (confirm_mot_de_passe!=passe && confirm_mot_de_passe!=""){
  swal("Oups!", "Les mot de passe ne correspondesnt pas  ", "error")
}else{
   var myForm = document.querySelector('#connexion_form');
   var formData= new FormData(myForm); 
    $('.overflow').show(); 
    var messagesucess="Votre achat à été enregistrer,  patientez quelque minute pour la validation par sms ou whatsapp!";
    var rederecto='/user/'+numero;
    var idprogress='#progresse';
    var url=URLUSER;
     connexion(formData,messagesucess,rederecto,idprogress,url);  
}

})

</script>