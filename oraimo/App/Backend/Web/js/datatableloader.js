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
