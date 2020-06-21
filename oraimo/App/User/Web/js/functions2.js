function connexion(formData,messagesucess,rederecto,idprogress,myurl){

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
                        
                        if (reponse.response!="notExist_Or_invalide") {
                            window.location.href=rederecto;
                        }else{
                            swal("Oups!", "vous n'êtes pas encore vendeur sur Oraimo-bj. Faite une demande SVP !", "error")
                                .then((value) => {
                                  //location.reload(true);
                                });
                            $('.overflow').hide();
                        }

                        
                    }
                } );
}
function refist_user(formData,messagesucess,rederecto,idprogress,myurl){

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
                        $('.overflow').hide();
                        if (reponse.response=="passe_not_correspond") {
                            swal("Oups!", "Les mots de passe ne correspondent pas !", "error");
                        }else if (reponse.response=="Compte_exite"){
                            swal("Oups!", "Ce numéro existe déjà en tand que vendeur!", "error");
                        }else{
                            window.location.href=rederecto;
                        }

                        
                    }
                } );
}




"use strict";
// send form to api
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

                            


                      
function userActif(response){
    $("#username").html(response.response.user.identifiant);
    var nomcodvar=response.response.user.identifiant.replace(" ", "");
    $(".cosdeinoute").val(nomcodvar.toUpperCase());
    $("#iduser").html(response.response.user.idusers);
    console.log(response.response.statistique);
    $("#solde").html(response.response.sumstat.prixTotale);
    $("#numero").html(response.response.user.email_numero);
    $("#adresse").html(response.response.user.adresse);

    $("#click").html(response.response.sumstat.click);
    $("#vente").html(response.response.sumstat.Vente_effectue);
    var restant= parseInt(response.response.sumstat.click)- parseInt(response.response.sumstat.Vente_effectue);
    $("#echoue").html(restant);
    $("#nom_prenom").val(response.response.user.identifiant);
    $("#numerouser").val(response.response.user.email_numero);
    $("#adresseuser").val(response.response.user.adresse);
    var statut=`<button class="btn btn-success "><span class="btn-label"><i class="fa fa-check"></i></span>
                Vendeur validé par ORAIMO BJ
                </button>`;
    $("#statut").html(statut);

    var count= response.response.UserPromotion.length;
    var promotion =response.response.UserPromotion;
     var tr="";
    for (var i = 0 ; i < count; i++) {
        tr = tr +`<tr><td>`+i+`</td>
                <td> <a class="btn btn-info" href="https://oraimo-bj.com/?code=`+promotion[i].codepromo+`" >Partager</a>
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

function userpending(response){
    $("#username").html(response.response.user.identifiant);
    var nomcodvar=response.response.user.identifiant.replace(" ", "");
    $(".cosdeinoute").val(nomcodvar.toUpperCase());
    $("#iduser").html(response.response.user.idusers);
    var statut=`<button class="btn btn-warning"><span class="btn-label ">
                        <i class="fa fa-exclamation-circle"></i> </span>
                     Vendeur en attente de validation
                </button>`;
    $("#statut").html(statut);
    $(".content-full").html("");
}

function getUserInf(numero){
    var URLUSER=$('#URLUSER').val();
   
    $.get( URLUSER, { action:"get_users",numero:numero } )
    .done(function( data ) {
        var response=data;
         $(".overflow").hide();
            if (response.response.user==false) {
                 window.location.href="https://business.oraimo-bj.com/";
            }else{
                if (response.response.user.statut=="actif") {
                    userActif(response);
                }else{
                    userpending(response)
                }
            } 
         }) 
}
function allpromotion(){
    var URLUSER=$('#URLUSER').val();
    var option="<option value='CODE-CODE' selected >choisir une promotion </option>";
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
