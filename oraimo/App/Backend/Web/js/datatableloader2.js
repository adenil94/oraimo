function dataArticle(){
	var URLARTICLE=$('#URLARTICLE').val();
	$.get( URLARTICLE, { action:"get_aticles" } )
	.done(function( data ) {
		 var response=JSON.parse(data);
		 var article=response.response;
		 var count= article.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	var images=article[i].picture.split(";")
		  	tr = tr +`<tr><td>`+article[i].nom+`</td>
					<td>`+article[i].prix+`</td>
					<td>`+article[i].tag+`</td>
					<td> <img class="img-responsive"
                                             src="https://api.kitsmass.com/oraimo/img_article/`+images[0]+`"
                                             alt="`+article[i].nom+`" width="100" height="78"></td>
					<td>`+article[i].lien+`</td>
					<td>`+article[i].description+`</td>
					<td>
						<button 
						data-nom="`+article[i].nom+`" 
						data-prix="`+article[i].prix+`" 
						data-tag="`+article[i].tag+`" 
						data-description="`+article[i].description+`" 
						data-idarticle="`+article[i].idarticle+`" 
						class="btn btn-info edit">Modif</button> <button class="btn btn-danger del"
						 data-img="`+article[i].picture+`"
						 data-idarticle="`+article[i].idarticle+`">del</button></td></tr>
					
		  			`;
		  }
		  $("#tableArtclebody").html(tr)
		  $('#articleAceuil').DataTable();
		})

}



function datacommande(){
	var URLUSER=$('#URLUSER').val();
	$.get( URLUSER, { action:"get_commande" } )
	.done(function( data ) {
		 // var response=JSON.parse(data);
		 var commande=data.response;
		 var count= commande.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	var images=commande[i].picture.split(";");
		  	var prixReduit= parseInt(commande[i].quantite) * (parseInt(commande[i].prix) -(parseInt(commande[i].prix)* commande[i].reduction/100));
		  	tr = tr +`<tr><td> <img class="img-responsive"
                                             src="https://api.kitsmass.com/oraimo/img_article/`+images[0]+`"
                                             alt="`+commande[i].nom+`" width="100" height="78"></td>
                    <td>`+commande[i].numerocommande+`</td>
                    <td>`+commande[i].nom+`</td>
					<td>`+commande[i].prix+`</td>
					<td>`+commande[i].quantite+`</td>
					<td>`+commande[i].promotion+`</td>
					<td>`+commande[i].codepromo+`</td>
					<td>`+prixReduit+`</td>
					<td>`+commande[i].description+`</td>
					<td>`+commande[i].date+`</td>
					<td>`+commande[i].reference+`</td>
					<td>`+commande[i].nom_prenom+`</td>
					<td>`+commande[i].identifiant+`</td>
					<td>`+commande[i].numero+`</td>
					<td>`+commande[i].ville_quartier+`</td>
					<td>`+commande[i].statutCommande+`</td>
					<td class="action"> <button class="btn btn-info endcomande"
						 data-idarticle="`+commande[i].idcommande+`">Terminer </button>
						 <button class="btn btn-danger AnnuleComande"
						 data-idarticle="`+commande[i].idcommande+`">Annuler </button>

						 </td></tr>
					
		  			`;
		  }
		  $("#tablecommandebody").html(tr)
		  $('#commandevalidate').DataTable();
		})

}
 

function datacommandeof(status){
	var URLUSER=$('#URLUSER').val();
	$.get( URLUSER, { action:"get_commande" } )
	.done(function( data ) {
		 // var response=JSON.parse(data);
		 var commande=data.response;
		 var count= commande.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	var images=commande[i].picture.split(";");
		  	var prixReduit= parseInt(commande[i].quantite) * (parseInt(commande[i].prix) -(parseInt(commande[i].prix)* commande[i].reduction/100));

		  	if (commande[i].statutCommande==status){
			tr = tr +`<tr><td> <img class="img-responsive"
	                                             src="https://api.kitsmass.com/oraimo/img_article/`+images[0]+`"
	                                             alt="`+commande[i].nom+`" width="100" height="78"></td>
	                    <td>`+commande[i].numerocommande+`</td>
	                    <td>`+commande[i].nom+`</td>
						<td>`+commande[i].prix+`</td>
						<td>`+commande[i].quantite+`</td>
						<td>`+commande[i].promotion+`</td>
						<td>`+commande[i].codepromo+`</td>
						<td>`+prixReduit+`</td>
						<td>`+commande[i].description+`</td>
						<td>`+commande[i].date+`</td>
						<td>`+commande[i].date_livraison+`</td>
						<td>`+commande[i].reference+`</td>
						<td>`+commande[i].nom_prenom+`</td>
						<td>`+commande[i].identifiant+`</td>
						<td>`+commande[i].numero+`</td>
						<td>`+commande[i].ville_quartier+`</td>
						<td>`+commande[i].statutCommande+`</td>
						<td class="action"> <button class="btn btn-info endcomande"
							 data-idarticle="`+commande[i].idcommande+`">Terminer </button>
							 <button class="btn btn-danger AnnuleComande"
							 data-idarticle="`+commande[i].idcommande+`">Annuler </button>

							 </td></tr>
						
			  			`;
		  	}
		  }
		  $("#tablecommandebody").html(tr)
		  $('#commande').DataTable();
		})
}
function datapromotion(){
	var URLUSER=$('#URLUSER').val();
	$.get( URLUSER, { action:"get_promotions" } )
	.done(function( data ) {
		 // var response=JSON.parse(data);
		 var promotion=data.response;
		 var count= promotion.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	tr = tr +`<tr>
                    <td>`+promotion[i].promotion+`</td>
					<td>`+promotion[i].detail+`</td>
					<td>`+promotion[i].reduction+`</td>
					<td>`+promotion[i].date_debut+`</td>
					<td>`+promotion[i].date_fin+`</td>
					<td>`+promotion[i].code+`</td>

					<td > <button class="btn btn-info terminatePromotion"
						 data-idpromotion="`+promotion[i].idtype_promo+`">terminer </button></td></tr>
					
		  			`;
		  }
		  $("#tablepromotionbody").html(tr);
		  $('#tablepromotion').DataTable();
		})

}

function datareduction(){	
	var URLUSER=$('#URLUSER').val();
	$.get( URLUSER, { action:"get_reduction" } )
	.done(function( data ) {
		 // var response=JSON.parse(data);
		 var reduction=data.response;
		 var count= reduction.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	tr = tr +`<tr>
                    <td>`+reduction[i].nom_article+`</td>
					<td>`+reduction[i].reduction+`</td>
					<td>`+reduction[i].date_debut+`</td>
					<td>`+reduction[i].date_fin+`</td>

					<td> <button
						data-reduction="`+reduction[i].reduction+`" 
						data-date_debut="`+reduction[i].date_debut+`" 
						data-date_fin="`+reduction[i].date_fin+`" 
						data-idarticle="`+reduction[i].idarticle+`"  class="btn btn-info editReduction"
						 data-idreduction="`+reduction[i].idreduction+`">Modif </button></td>

					<td > <button class="btn btn-info terminateReduction"
						 data-idreduction="`+reduction[i].idreduction+`">terminer </button></td>

					<td > <button class="btn btn-danger delReduction"
						 data-idreduction="`+reduction[i].idreduction+`">del </button></td></tr>					
		  			`;
		  }
		  $("#tablereductionbody").html(tr)
		  $('#tablereduction').DataTable();
		})

}

function dataVendeur(){
		var URLUSER=$('#URLUSER').val();
	$.get( URLUSER, { action:"get_all_users" } )
	.done(function( data ) {
		 // var response=JSON.parse(data);
		 var users=data.response.users;
		 var count= users.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	tr = tr +`<tr>
                    <td>`+users[i].identifiant+`</td>
					<td>`+users[i].email_numero+`</td>
					<td>`+users[i].adresse+`</td>
					<td>`+users[i].statut+`</td>
					<td > <button class="btn btn-info userAction" data-action="actif"
						 data-iduser="`+users[i].idusers+`">valider </button>
						 <button class="btn btn-warning userAction" data-action="attente"
						 data-iduser="`+users[i].idusers+`">Suspendre </button>
						 </td></tr>
					
		  			`;
		  }
		  $("#tablevendeurbody").html(tr);
		  $('#vendeurvalidate').DataTable();
		})
}
function dataDemandpaiement(){
		var URLUSER=$('#URLUSER').val();
	$.get( URLUSER, { action:"get_allpaieent" } )
	.done(function( data ) {
		 // var response=JSON.parse(data);
		 var paiement=data.response.paiement;
		 var count= paiement.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	tr = tr +`<tr>
                    <td>`+paiement[i].identifiant+`</td>
					<td>`+paiement[i].email_numero+`</td>
					<td>`+paiement[i].adresse+`</td>
					<td>`+paiement[i].montant+`</td>
					<td>`+paiement[i].date+`</td>
					<td > <button class="btn btn-info paiementAction" data-action="valider"
						 data-iduser="`+paiement[i].iddemand_paiement+`">valider </button>
						 <button class="btn btn-warning paiementAction" data-action="annuler"
						 data-iduser="`+paiement[i].iddemand_paiement+`">Annuler </button>
						 </td></tr>
					
		  			`;
		  }
		  $("#tableDemandpaiementrbody").html(tr);
		  $('#Demandpaiementvalidate').DataTable();
		})
}

function selectArticle(){
	var URLARTICLE=$('#URLARTICLE').val();
	$.get( URLARTICLE, { action:"get_aticles" } )
	.done(function( data ) {
		 var response=JSON.parse(data);
		 var article=response.response;
		 var count= article.length;
		 var option="";
		  for (var i = 0 ; i < count; i++) {
		  	option = option + `<option value ="`+article[i].idarticle+`">`+article[i].nom+`</option>`;

		  }
		  $("#selectFloatingLabel").html(option);
		  $("#selectFloatingLabel").select2();
		})
		  
}

function selectReduction(){
	var reduction="";
	for (var i = 5; i <= 95; i=i+5) {
		reduction = reduction + `<option value ="`+[i]+`">`+[i]+`</option>`;
	};
	$("#inputFloatingLabel").html(reduction);
	$("#inputFloatingLabel").select2();
}
