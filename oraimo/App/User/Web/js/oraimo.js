"use strict";
// send form to api
function sendForm(formData,messagesucess,rederecto,idprogress,myurl){

	            $.ajax( {
	                url        : myurl,
	                type       : 'POST',
	                cle 	   : 'action',
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
	                	var reponse  = JSON.parse(data);
	                    //Do something success-ish
	                    if (reponse.response==true) {

	                    console.log( 'Completed.' );
	                    setTimeout(function(){
	                    	$(idprogress).html( "100%");
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
		                	
		                }

	                    
	                }
	            } );
};


function getUserInf(numero){
	var URLUSER=$('#URLUSER').val();
	var tr="";
    $.get( URLUSER, { action:"get_users",numero:numero } )
    .done(function( data ) {
        var response=data;
         $(".overflow").hide();
            if (response.response.user==false) {
                 window.location.href="/";
            }else{
                $("#username").html(response.response.user.identifiant);
                $("#iduser").html(response.response.user.idusers);
                 var count= response.response.UserPromotion.length;
                 var promotion =response.response.UserPromotion
				  for (var i = 0 ; i < count; i++) {
				  	
				  	tr = tr +`<tr><td>`+i+`</td>
							<td> <a class="btn btn-info" href="https://oraimo-bj.com/?`+promotion[i].codepromo+`" >Partager</a>
							</td>
							<td>`+promotion[i].date_debut+`</td>
							<td>`+promotion[i].date_fin+` </td>
							<td>`+promotion[i].codepromo+`</td>
							<td>
								<button
								class="btn btn-info edit">Modif</button> <button class="btn btn-danger del"
								data-idpromot="`+promotion[i].idcode_promo+`" >del</button></td></tr>
				  			`;
				  }
				      	 $("#tablecodepromo").html(tr)
		  $('#code_promotion').DataTable();
            }

           
         }) 
}
function allpromotion(){
	var URLUSER=$('#URLUSER').val();
	var option="";
    $.get( URLUSER, { action:"get_promotions"} )
    .done(function( data ) {
        var response=data.response;
        var count= response.length;
				  for (var i = 0 ; i < count; i++) {
				  	
				  	option = option +`<option value="`+response[i].idtype_promo+`-`+response[i].code+`"  >`+response[i].promotion+`</option>
				  			`;
				  }
				 $("#selectFloatingLabel").html(option)  
         }) 

}


var  users = window.location.pathname;
var userInfo=users.split("/");
var Numero=userInfo[2];
getUserInf(Numero);
allpromotion();



$(document).on("change","#selectFloatingLabel",function(){

	var valeur=$('#selectFloatingLabel').val();
	var code = valeur.split("-");

	var codes=$('#codePromot').html(code[1]);
	var nom=$("#username").html();
	var nomcodvar=nom.split(" ");
	var name=nomcodvar[0];
	$(".cosdeinoute").val(name.toUpperCase());
	
	;
	
});


$(document).on("click",".creercode",function(){

	var valeur=$('#selectFloatingLabel').val();
	var code = valeur.split("-");
	var nom=$("#username").html();
	var nomcodvar=nom.split(" ");
	var name=nomcodvar[0];

	var id=code[0];
	var usercode=name.toUpperCase()+code[1];
	var iduser=$("#iduser").html();
	var URLUSER=$('#URLUSER').val();
	    $.get( URLUSER, { action:"set_user_promo_code",idpromot:id,code:usercode,user:iduser} )
    .done(function( data ) {
        var response=data.response;
        if (response=true) {}
 			location.reload();
         }) 
	
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


