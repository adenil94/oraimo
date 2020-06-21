	

</div>
<style type="text/css">
		.main-header, .horizontal-layout-2{
			display: none;
		}
		#connexionValide:active{
			transform: scale(0.7);
		}
		.fa-eye{
			z-index: 9999;
		}
				.fa-eye:hover{
			transform: scale(1.3);
		}
	</style>
	<div class="wrapper wrapper-login wrapper-login-full p-0">
		<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient" style="background-color: #8ec31f">

			<h2 class="title fw-bold text-white mb-3">Rejoignez la communauté vendeur de Araimo Bénin</h2>
			<p class="subtitle text-white op-7">
				<ul style="color: white; text-align: left;" >
					Vous aurez la possibilité de :
					<li>Créer vote code promotion</li>
					<li>Partager votre lien</li>
					<li>Recevoir les commisions a chaque vente effectué</li>
					<li>Suivre les statistques de votre lien</li>
					<li>faire une demande de paiement à tous moment</li>
					<li>effectuer un achat avec vos commision générer</li>
				</ul>
		
		</p>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">

			<div class="container container-login container-transparent animated fadeIn">

				<h3 class="text-center">
					<div class="header-logo">
                        <a href="/"><img alt="Oraimo" width="150" src="/App/Frontend/Web/images/logo.png" class="logo"></a></div>
				Conectez-vous a votre espace de contrôle
				</h3>
				<form id="connexion_form">
					
				<div class="login-form">
					<div class="form-group">
						<label for="numeroconnexion" class="placeholder"><b>Numéro de téléphone</b></label>
						<input id="numeroconnexion" name="numeroconnexion" type="text" class="form-control" required maxlength="8">
					</div>
					<div class="form-group">
						<label for="password" class="placeholder"><b>Mot de passe</b></label>
						<a href="#" class="link float-right" id="modifierModpass">Mot de passe oublier ? ?</a>
						<div class="position-relative">
							<input id="mot_de_pase" name="password" type="password" class="form-control" required autocomplete>
							<div class="show-password">
								<i data-id="mot_de_pase" class="fa fa-eye-slash showpass"></i>
							</div>
						</div>
					</div>
					  <input type="text" hidden name="action" value="connect_user">
				</form>
					<div class="form-group form-action-d-flex mb-3">
						
						<a href="#"  id="connexionValide" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Connecter</a>
					</div>
					<div class="login-account">
						<span class="msg">Vous n'êtes pas encore vendeur sur oraimo ?</span>
						<a href="#" id="show-signup" class="link">Faite une demande ici</a>
					</div>
				</div>
			</div>

			<div class="container container-signup container-transparent animated fadeIn" style="display: none;">
				<h3 class="text-center">
					<div class="header-logo">
                        <a href="/"><img alt="Oraimo" width="150" src="/App/Frontend/Web/images/logo.png" class="logo"></a></div>
				Formulaire de demande
				 </h3>
				 <form id="demande_form">
				 	
				<div class="login-form">
					<div class="form-group">
						<label for="nom_prenomconnecion" class="placeholder"><b>Nom et prénom</b></label>
						<input  id="nom_prenomconnecion" name="nom_prenomconnecion" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="villeconnexion" class="placeholder"><b>Ville de résidence</b></label>
						<input  id="villeconnexion" name="villeconnexion" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="numerodemand" class="placeholder"><b>Numéro</b></label>
						<input  id="numerodemand" name="numerodemand" type="text" class="form-control" required maxlength="8">
					<small>Nb: nom,prénom et numéro doivent être conforme a celui sur votre compte mobile money</small>
					</div>
					<div class="form-group">
						<label for="passwordsignin" class="placeholder"><b>Mot de passe</b></label>
						<div class="position-relative">
							<input  id="passwordsignin" name="mot_de_passe" type="password" class="form-control" required >
							<div class="show-password">
								<i data-id="passwordsignin"  class="fa fa-eye-slash showpass"></i>
							</div>
						</div> 
					</div>
					<div class="form-group">
						<label for="confirmpassword" class="placeholder"><b>Confirmer le mot de passe </b></label>
						<div class="position-relative">
							<input  id="confirm_mot_de_passe" name="confirm_mot_de_passe" type="password" class="form-control" required >
							<div class="show-password">
								<i data-id="confirm_mot_de_passe" class="fa fa-eye-slash showpass"></i>
							</div>
						</div>
						<small>Attention: Pour des raisons de sécurité, un changement de mot de passe requiert la CNI</small>
					</div>
					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="agree" id="agree">
							<label class="custom-control-label" for="agree">Condition d'utilisation .</label>
						</div>
					</div>
					 <input type="text" hidden name="action" value="registe_user">
					</form>
					<div class="row form-action">
						<div class="col-md-6">
							<a href="#"  class="btn btn-danger show-sign w-100 fw-bold">Annuler</a>
						</div>
						<div class="col-md-6">
							<a href="#" class="btn btn-secondary w-100 fw-bold" id="demandeenvoyer">Envoyer</a>
						</div>
						<div class="login-account">
						<span class="msg"></span>
						<a href="#" class ="show-sign" class="link">Connectez-vous</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div>

	<script type="text/javascript">
		setTimeout(function(){  $(".overflow").hide(); }, 1000);

		$(document).on("click","#show-signup",function(){
			$(".container-login").hide("slow");
			$(".container-signup").show("slow");
		});

				$(document).on("click",".show-sign",function(){
			$(".container-signup").hide("slow");
			$(".container-login").show("slow");
		});

$(document).on("click",'#demandeenvoyer',function(){
	var URLUSER=$('#URLUSER').val();
	$(".overflow").show();
	var nom_prenomconnecion=$("#nom_prenomconnecion").val();
	var numerodemand=$("#numerodemand").val();
	var villeconnexion=$("#villeconnexion").val();
	var passwordsignin=$("#passwordsignin").val();
	var confirm_mot_de_passe=$("#confirm_mot_de_passe").val();

if (nom_prenomconnecion==""|| numerodemand=="" || villeconnexion==""|| passwordsignin==""){
swal("Oups!", "Veuillez bien remplir vos informations  ", "error");
$(".overflow").hide();
}else if (passwordsignin!=confirm_mot_de_passe){
swal("Oups!", "Les mots de passe ne correspondent pas ", "error");
$(".overflow").hide();
}else if(numerodemand.length<8){
swal("Oups!", "Le numéro de téléphone saisie n'est pas correct ", "error");
$(".overflow").hide();
}
else{
   var myForm = document.querySelector('#demande_form');
   var formData= new FormData(myForm); 
    $('.overflow').show(); 
    var messagesucess="";
    var rederecto='/user/'+numerodemand;
    var idprogress='#progresse';
    var url=URLUSER;
    refist_user(formData,messagesucess,rederecto,idprogress,url); 
     
}
})

$(document).on("click",'#connexionValide',function(){
	$(".overflow").show();
var URLUSER=$('#URLUSER').val();
var numero=$("#numeroconnexion").val();
var passe=$("#mot_de_pase").val();

if (passe==""|| numero==""){
swal("Oups!", "informations inccorecte  ", "error");
$(".overflow").hide();
}else{
   var myForm = document.querySelector('#connexion_form');
   var formData= new FormData(myForm); 
    $('.overflow').show(); 
    var messagesucess="Votre demande a été enregistrée, veuillez patienter, la validation de votre compte vendeur";
    var rederecto='/user/'+numero;
    var idprogress='#progresse';
    var url=URLUSER;
    connexion(formData,messagesucess,rederecto,idprogress,url); 
}
})


$(document).on('click','.showpass',function(){
	var id =$(this).attr("data-id");
	$("#"+id).prop('type','text');
	$(this).removeClass('fa-eye-slash');
	$(this).removeClass('showpass');
	$(this).addClass('fa-eye');
	$(this).addClass('closepass');
});

$(document).on("click",".closepass",function(){
var id =$(this).attr("data-id");
	$("#"+id).prop('type','password');
	$(this).removeClass('fa-eye');
	$(this).removeClass('closepass');
	$(this).addClass('fa-eye-slash');
	$(this).addClass('showpass');
});
$(document).on("click","#modifierModpass",function(){
  window.open("whatsapp://send?text=Bonsoir j'ai oublié mon mot de passe , je suis un vendeur sur oraimo, mon Numéro est :", '_blank');

});

	</script>