

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


$( document).on( 'click','.del', function (e)
    {
var URLUSER=$('#URLUSER').val();

    e.preventDefault();
	if (confirm("Voulz-vous vraiment supprimer ce code promo  ? ")) {
	var idpromot=$(this).attr("data-idpromot");
	var picture=$(this).attr("data-img");
        $.get( URLUSER, { action:"del_user_promo_code",idpromot: idpromot } )
      .done(function(data) {
      	 location.reload(true);
      });
	}
    } );

$( document).on( 'click','.out', function (e)
    {
 window.location.href="/";
    } );

