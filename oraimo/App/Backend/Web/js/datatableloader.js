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
		  	var images=commande[i].picture.split(";")
		  	tr = tr +`<tr><td> <img class="img-responsive"
                                             src="https://api.kitsmass.com/oraimo/img_article/`+images[0]+`"
                                             alt="`+commande[i].nom+`" width="100" height="78"></td>
                    <td>`+commande[i].nom+`</td>
					<td>`+commande[i].prix+`</td>
					<td>`+commande[i].description+`</td>
					<td>`+commande[i].date+`</td>
					<td>`+commande[i].reference+`</td>
					<td>`+commande[i].nom_prenom+`</td>
					<td>`+commande[i].identifiant+`</td>
					<td>`+commande[i].numero+`</td>
					<td>`+commande[i].ville_quartier+`</td>
					<td>`+commande[i].statut+`</td>
					<td> <button class="btn btn-info validat"
						 data-idarticle="`+commande[i].idcommande+`">terminer </button></td></tr>
					
		  			`;
		  }
		  console.log(commande)
		  $("#tablecommandebody").html(tr)
		  $('#commandevalidate').DataTable();
		})

}