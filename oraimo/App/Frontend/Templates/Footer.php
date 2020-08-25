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
            <a href="/">
                    <span class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                Acceuil
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="https://business.oraimo-bj.com/" class="">
                    <span class="icon">
                        <i class="fa fa-user " aria-hidden="true"></i>
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
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                   <div class="widget oraimolg widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">
                                            Informations d'achat
                                        </h3>
                                            <span class="produit_paiment"></span>  
                                        <ul class="oraimolg-mini-cart cart_list ">
                                            <form class="needs-validation " id="valide_achat_form" >
                                               <div class="row mb-2">
                                                    <div class="col-md-12">
                                                    <small>Quantité</small>
                                                      <input type="number" class="form-control" name="quantite" id="quantite" placeholder="Quantité" value="1" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="nom_prenom" id="nom_prenom" placeholder="Nom et Prénom" value="" required>
                                                    </div>
                                                </div>
                                                 <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="numero" id="numero" placeholder="Numéro de téléphone" value="" required maxlength="8">
                                                    </div>
                                                     
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="ville_quartier" id="ville_quartier" placeholder="Ville et lieu de livraison " value="" required>
                                                    </div>
                                                </div>
                                                  <div class="row mb-2">
                                                    <div class="col-md-12">
                                                      <small  > Date de livraison</small>
                                                      <input type="date" class="form-control" name="date_livraison" id="date_livraison" placeholder="Date livraison " value="" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                  <small  style="color: green"> Code promo à utiliser : ORAIMORED5</small>
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control"  name="code_promot" id="code_promot" placeholder="Code promo" value="" required >
                                                    </div>
                                                    <small class="codevalidationError ml-3" style="color: red;display: none;">code promo invalide ou expiré</small>
                                                    <small class="codevalidationTrue ml-3" style="color: green;display: none;"> code promo validé <span class="reductionpercent" data-reduce="0" ></span> % de reduction sur le prix : <span class="prixReduction" ></span> </small>



                                                </div>
                                                <div class=" mb-2">
                                                    <div class="form-check">
                                                          <input class="form-check-input paiement" type="radio" name="paiement" id="after" value="after" checked>
                                                          <label class="form-check-label" for="after">
                                                            Payer à la livraison
                                                          </label>
                                                    </div>
                                                    <div class="form-check" style="display: none;">
                                                          <input class="form-check-input paiement"  type="radio" name="paiement" id="now" value="now" >
                                                          <label class="form-check-label" for="now">
                                                           Payer maintenant 
                                                          </label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-2 ref_paiement" style="display: none;" >
                                                    <div class="col-md-12">
                                                      <input type="text" class="form-control" name="ref_paiement" id="ref_paiement" placeholder="Référence de paiement MOMO" value="" required minlength="8" maxlength="8">
                                                      <small>Numéro d'envoie : 66523726</small>
                                                    </div>
                                                </div>
                                                 <input type="text" hidden name="action" value="comande_user">
                                                 <input type="text" class="article_acheter" hidden name="article"  value="">
                                                <input type="text" class="Nom_save_article" hidden name="Nom_save_article" value="">
                                            </form>

                                            
                                        </ul>
                                        <small><a href="#" data-toggle="modal" data-target="#termconditionUtilisation" >Conditions générales d'utilisation</a></small> <br>
                                         <small><a href="#" data-toggle="modal" data-target="#vente_apropo" >Paiement & livraison</a></small>
                                            <button class="btn btn-info " id="Valide" style="width: 100%;background-color: #8ec31f;    border-color: #8ec31f;">Valider</button>
                                        
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
                                            Informations de connexion
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
                                                           Créer un compte 
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
                                                      <small>Attention: Pour des raisons de sécurité, un changement de mot de passe requiert la CNI </small>
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


<!-- Modal -->
<div class="modal fade" id="termconditionUtilisation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termconditionUtilisationTitle">CONDITIONS GÉNÉRALES D'UTILISATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
Bienvenue sur le site <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> , site de vente exclusive des accessoires de la marque ORAIMO au Bénin. Ledit site est géré par l’Etablissement KITS à qui la marque ORAIMO donne mandat limité de gérer pour son compte le site <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> .<br>
Nous vous invitons à lire attentivement les présentes conditions générales d’utilisation et les conditions générales de vente et (Ci-après dénommées les « CGU/CGV ») ainsi que notre politique de protection des données personnelles pour pouvoir naviguer et commander sur notre site internet. L’Utilisateur, personne physique, client ou non, est informé qu’il est tenu par les présentes.<br>
L’utilisation des services de notre site, ainsi que toute commande implique l’acceptation préalable, pleine et entière des présentes CGU/CGV et de notre politique de protection de données personnelles dont vous reconnaissez avoir pris connaissance.<br>
<small><h4>
I. LES MENTIONS LÉGALES<br>
</h4></small>
Le site Internet <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> est géré l’Etablissement KITS<br>
N° rccm: RB/COT/20 A 58832 du 04-06-2020<br>
N° Ifu: 0201910857762<br>
Adresse : Ilôt 373, Fignon Sike, Cotonou (Bénin)<br>
Téléphone : +229 91 79 42 50<br>
<small><h4>
II. CONDITIONS GÉNÉRALES D’UTILISATION<br>
</h4></small>
Tout accès et/ou utilisation du site <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> implique le respect de l'ensemble des dispositions des présentes conditions générales et leur acceptation. Elles constituent donc un contrat entre KITS et l’Utilisateur/ le Client.<br>
Définitions<br>
Client : s’entend comme toute personne physique qui agit à des fins qui n’entrent pas dans le cadre de son activité commerciale, industrielle, artisanale ou libérale, âgée au moins de 18 ans et ayant commandé au moins une fois sur le Site. Le Client possède un compte client sur <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> s’il le souhaite. <br>
Identifiant : s’entend comme l’adresse e-mail nécessaire à l'identification d'un Utilisateur sur le Site pour accéder à son compte. <br>
Mot de passe : s’entend comme la succession de caractères dont l'Utilisateur doit garder le secret et lui permettant, avec son Identifiant, d’accéder à son compte. <br>
Site : <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> <br>
Utilisateur : L'Utilisateur s’entend comme toute personne utilisant le site <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> ou l'un des services proposés sur celui-ci.<br>
Utilisateur identifié : L'Utilisateur s’entend comme toute personne utilisant le site <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> ou l'un des services proposés sur celui-ci et possédant un compte KITS.<br>
Conditions d’accès et utilisation du Site<br>
Le Site est accessible gratuitement à tout Utilisateur disposant d’un accès à internet.<br>
L’Utilisateur est responsable de son équipement informatique ainsi que de son accès à internet. Tous les coûts relatifs à l’accès au Site restent à la charge de l’Utilisateur/Client.<br>
L’Utilisateur ne pourra accéder à son compte qu’après identification à l’aide de son Identifiant et de son Mot de passe. L’Utilisateur est tenu de garder secret ses Identifiant et Mot de passe et ne doit pas les communiquer à un tiers.<br>
KITS mettra en œuvre tous les moyens afin d’assurer un accès au Site 24h/24, 7 jours/7, mais ne peut être tenue responsable de toute problème, dysfonctionnement du Site qui empêcherait tout accès au Site et/ou aux différents services proposés par KITS. KITS fera son possible afin de résoudre tout problème dans les meilleurs délais.<br>
Création de compte<br>
L’Utilisateur a la possibilité de créer un compte sur le site s’il souhaite accéder et profiter des services/offres proposés par KITS.<br>
En créant son compte, l’Utilisateur accepte les présentes CGU/CGV et notre politique de protection des données personnelles.<br>
L’Utilisateur identifié peut également s’inscrire à la newsletter partenaire et recevoir des offres de ORAIMO <br>
La création de compte sur le Site est réservée à toute personne physique âgée au moins de 18 ans. Chaque Utilisateur ne peut créer qu’un seul compte sur <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> .<br>
Tous les champs présents dans le formulaire de création de compte doivent être renseignés à l’exception des champs indiqués comme facultatifs. Tout défaut de réponse aura pour conséquence la non création de compte. Toutes les informations renseignées par l’Utilisateur devront être exactes. Le Client peut renseigner un numéro de téléphone au choix : bureau et/ou portable et/ou domicile.<br>
Lorsque l’Utilisateur crée un compte sur le Site, il reçoit un e-mail de confirmation de création de compte le jour même. KITS se réserve le droit de supprimer tout compte ne respectant pas les présentes conditions contractuelles.<br>
<small><h4>
III. CONDITIONS GÉNÉRALES DE VENTE<br>
</h4></small>
Les Conditions Générales de Vente définissent les conditions applicables aux ventes conclues entre d'une part les personnes effectuant un achat via le site Internet de <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> , ci-après dénommées "le Client" et d'autre part KITS, ci-après dénommée « KITS ». Ces conditions ne concernent à titre exclusif que les personnes physiques non commerçantes.<br>
Prix des articles<br>
Tous les prix sont indiqués en CFA avec frais d'expédition INCLUS. Sauf pour les régions précitées.<br>
 <br>
La durée de validité des prix des articles proposés sur <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> est de 24 heures à compter de leur publication sur le site <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> . Les articles seront facturés sur la base des tarifs en vigueur au moment de l'enregistrement des commandes. Ils demeurent la propriété de KITS jusqu'au complet encaissement du prix par KITS. Ce prix est payable en totalité et en un seul versement.<br>
Commande<br>
Le client peut passer commande sur le site Internet <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> à toute heure de la journée et de la nuit. <br>
Le client pourra visualiser lors de ces différentes étapes le détail de sa commande et son prix total et corriger d’éventuelles erreurs, avant de confirmer celle-ci pour exprimer son acceptation.<br>
KITS se réserve la propriété des articles jusqu’au règlement complet de la commande, c’est-à-dire à l’encaissement du prix de la commande par KITS.<br>
KITS se réserve le droit d'annuler ou de refuser toute commande d'un client avec lequel il existerait un litige relatif au paiement d'une commande antérieure ou qui présenterait à ses yeux une quelconque forme de risque.<br>
Toute commande vaut acceptation des prix et description des articles disponibles à la vente.<br>
KITS s’engage à honorer les commandes reçues sur le site Internet uniquement dans la limite des stocks disponibles. A défaut de disponibilité d’un ou plusieurs article(s) commandé(s), KITS s'engage à en informer le client dans les plus brefs délais.<br>
Paiement<br>
Le paiement des achats s'effectue à la livraison partout au Bénin.<br>
Echange, retour et remboursement<br>
Délai pour retourner un article<br>
Le client dispose d'un délai de 03 jours pour retourner/échanger un article.<br>
Les retours/échanges sont gratuits.<br>
KITS ne rembourse pas les articles retournés mais procède au remplacement de l’article qui serait défectueux <br>
Conditions d'échange et de retour pour remboursement<br>
Le(s) article(s) retourné(s) doivent être neufs, non utilisés et dans leur boite d’origine parfaitement intacte.<br>
Tout échange ou retour doit faire l’objet d’une demande d'échange auprès de KITS.<br>
Etat des articles<br>
Tous les articles retournés devront être renvoyés parfaitement intacts.<br>
A réception du colis, KITS jugera du parfait état de la marchandise retournée. Aucun retour ne sera accepté si les articles retournés ont été visiblement utilisés ou endommagés du fait du client et que cette utilisation ou ces dommages rendent les articles impropres à la vente. Si le retour est refusé par KITS , les articles seront alors retournés au client.<br>
Propriété intellectuelle<br>
Tous les textes, commentaires, ouvrages, illustrations et images reproduits sur KITS sont réservés au titre du droit d'auteur.<br>
Toute reproduction totale ou partielle du site de <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> est strictement interdite sauf accord préalable.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Accepter</button>
       
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="vente_apropo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="vente_apropoTitle">PAIEMENT & LIVRAISON / PROPOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<p>
  <h5>
  PAIEMENT & LIVRAISON<br>  
  </h5> 
Paiement<br>
Le Paiement s'effectue à la livraison. Vous payez vos achats directement à la livraison (Pour tout le Bénin)<br>
Frais de livraison<br>
La livraison est gratuite pour les zones de Cotonou, Calavi et Akpakpa. En dehors de ces zones, les livraisons seront payés selon le tarif du prestataire désigné.<br>
Délai de livraison<br>
Les colis sont expédiés le jour même! Vous êtes livré en - 24h sur Cotonou et environs et - 48h pour les autres régions du Bénin.<br>
Retours et échanges<br>
Le client dispose d'un délai de 03 jours pour retourner/échanger un article. KITS ne rembourse pas les articles retournés mais vous permet de les échanger avec des articles de même type.<br>
Conditions d'échange et de retour<br>
Le(s) article(s) retourné(s) doivent être neufs, non utilisés et dans leur boite d’origine parfaitement intacte. Tout échange ou retour doit faire l’objet d’une demande d'échange auprès de KITS.</p>

<p>
  <h5>
  A PROPOS 
  </h5> 
KITS en quelques mots<br>
KITS est un partenaire de la marque ORAIMO au Bénin. Il lui est confié la gestion du site web <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a>. KITS vous propose en exclusivité les accessoires de la marque ORAIMO. Le site s'adresse aux personnes qui aiment utiliser les produits de qualité et qui sont fans des innovations technologiques.<br>
KITS c'est le plaisir d’acheter en ligne.<br>
Pratique, intuitif et optimisé, le site internet <a href="https://www.oraimo-bj.com/" >www.oraimo-bj.com</a> est accessible à tous les internautes. De la présentation produit jusqu'à la commande, vous êtes est guidé(e) et chaque étape est facilitée.<br>
Un paiement à la livraison partout au Bénin.<br>
Plus besoin de payer nécessairement à l'avance. A vous de choisir soit d’avance par Mobile Money soit à la livraison.<br>
Livraison express<br>
Chez KITS les commandes passées sont expédiées le jour même ! </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Accepter</button>
       
      </div>
    </div>
  </div>
</div>
<script >
  // lors de la validation de l'acchat
$(document).on("click",'#Valide',function(){
var URLUSER=$('#URLUSER').val();
var nom_prenom=$("#nom_prenom").val();
var numero=$("#numero").val().split(" ").join("");;
var quantite=$("#quantite").val();
var ville_quartier=$("#ville_quartier").val();
var code_promot=$("#code_promot").val();
var date_livraison=$("#date_livraison").val();

if (nom_prenom==""|| numero==""|| ville_quartier=="" || quantite=="" || date_livraison==""){
swal("Oups!", "la quantité, la date de livraison, le Nom, le numéro et l'adresse doivent être remplie  ", "error")
}else if(numero.length<8){
swal("Oups!", "Vérifier le numéro de téléphone SVP (sans espace) ", "error");
} 
else{
     var myForm = document.querySelector('#valide_achat_form');
   var formData= new FormData(myForm); 
    $('.overflow').show(); 
    var messagesucess="Votre achat a été enregistré,  patientez quelques minutes pour la validation par sms ou whatsapp!";
    var rederecto='/';
    var idprogress='#progresse';
    var url=URLUSER;
    sendForm(formData,messagesucess,rederecto,idprogress,url);  
}

})


</script>