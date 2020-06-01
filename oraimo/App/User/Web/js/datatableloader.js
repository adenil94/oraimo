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
					<td>`+article[i].vue+`</td>
					<td>`+article[i].lien+`</td>
					<td>`+article[i].idcommentaire+`</td>
					<td>`+article[i].idarticle+`</td>
					<td>`+article[i].description+`</td>
					<td>`+article[i].commentaire+`</td>
					<td>`+article[i].categorie+`</td>
					<td>`+article[i].article_idarticle+`</td>
					<td>`+article[i].aime+`</td></tr>
		  			`;
		  }
		  $("#tableArtclebody").html(tr)
		  $('#articleAceuil').DataTable();
		})

}
