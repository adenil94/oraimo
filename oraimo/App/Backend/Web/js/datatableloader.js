function dataArticle(){
	var URLARTICLE=$('#URLARTICLE').val();
	$.get( URLARTICLE, { action:"get_aticles" } )
	.done(function( data ) {
		 var response=JSON.parse(data);
		 var article=response.response;
		 var count= article.length;
		 var tr="";
		  for (var i = 0 ; i < count; i++) {
		  	tr = tr +`<tr><td>`+article[i].nom+`</td>
					<td>`+article[i].prix+`</td>
					<td>`+article[i].tag+`</td>
					<td>picture</td>
					<td>`+article[i].lien+`</td>
					<td>`+article[i].description+`</td>
					<td>
						<button 
						data-nom="`+article[i].nom+`" 
						data-prix="`+article[i].prix+`" 
						data-tag="`+article[i].tag+`" 
						data-description="`+article[i].description+`" 
						data-idarticle="`+article[i].idarticle+`" 
						class="btn btn-info edit">Modif</button> <button class="btn btn-danger del">del</button></td>
					
		  			`;
		  }
		  $("#tableArtclebody").html(tr)
		  $('#articleAceuil').DataTable();
		})

}
