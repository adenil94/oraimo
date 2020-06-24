

$(document).on("change","#selectFloatingLabel",function(){

	var valeur=$('#selectFloatingLabel').val();
	var code = valeur.split("-");

	var codes=$('#codePromot').html(code[1]);
	var nom=$("#username").html();
	var nomcodvar=nom.replace(" ", "");

	$(".cosdeinoute").val(nomcodvar.toUpperCase());
	
	;
	
});

 
$(document).on("click",".creercode",function(){

	var valeur=$('#selectFloatingLabel').val();
	var code = valeur.split("-");
	var nom=$("#username").html();
	var nom=$("#username").html();
	var nomcodvar=nom.replace(" ", "");

	var id=code[0];
	if (code[1]=="CODE") {
		swal("Oups!", "Choisissez une promotion SVP", "error");
	}else{
	var usercode=nomcodvar.toUpperCase()+code[1];
	var iduser=$("#iduser").html();
	var URLUSER=$('#URLUSER').val();
	    $.get( URLUSER, { action:"set_user_promo_code",idpromot:id,code:usercode,user:iduser} )
    .done(function( data ) {
        var response=data.response;
        if (response==true) {
 			location.reload();
        	}else if(response=="code_existe"){
        		swal("Oups!", "Ce code existe déjà", "error");
        	}
         }) 
	}
	
});


$( document).on( 'click','.del', function (e){

var URLUSER=$('#URLUSER').val();

    e.preventDefault();
	if (confirm("En supprimant ce  code promo, les commissions en attente liées à ce code seront annulées  ? ")) {
	var idpromot=$(this).attr("data-idpromot");
	var picture=$(this).attr("data-img");
        $.get( URLUSER, { action:"del_user_promo_code",idpromot: idpromot } )
      .done(function(data) {
      	 location.reload(true);
      });
	}
} );

$( document).on( 'click','.out', function (e){
 	window.location.href="/";
} );


$( document).on( 'click','#demande_payement', function (e){
 var montant =parseInt($("#solde").html());
 var URLUSER=$('#URLUSER').val();

    e.preventDefault();
    if (montant<1000) {
    	swal("Oups!", "Une demande de paiement d'un montant inférieur à 1000 FCFA n'est pas autorisé", "error");
    }else{
	if (confirm("Voulez-vous vraiment effectuer une demande de paiement  ? ")) {
		$(".overflow").show();
	var id=$(this).attr("data-id");
        $.get( URLUSER, { action:"ask_paiement",montant: montant,identification:id } )
      .done(function(data) {
      	 var reponse =data.response;
      	 if (reponse=="true") {
      	 	$(".overflow").hide();
      	 	swal( "Demande envoyé!");
      	 } else if (reponse=="paiement_exite"){
      	 	$(".overflow").hide();
      	 	swal( "Demande existante en cours de traitement!");
      	 }else{
      	 	$(".overflow").hide();
      	 	swal( "Demande non envoyée!");
      	 }
      });
	}

    }
} );

$(document).on("click",".partage",function(){
   var url= $(this).attr("data-url");
    window.open("whatsapp://send?text= bénéficie d'une reduction de 5% sur toutes tes achats en suivant ce lien  "+url+" ", '_blank');
})
