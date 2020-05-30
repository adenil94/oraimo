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
}

// check empty input
function checkEmptyInput(objet){
  for (var i = 1; i < objet.length; i++) {
    if (objet[i].value=="") {
      
      $("#AricleClone"+nombre).css("border","solid");
      $("#AricleClone"+nombre).css("border-color ","#f83f37");
      //$("html,body").animate({scrollTop: $("#AricleClone"+nombre).offset().top },500);
      return false;
      var nombre=i+1;
    }
  }
  return true;
}
// for cloning artile 
function cloneArticle(number){

return `<div id="AricleClone`+number+`" class="row col-12" style="position: relative">
			<button style="position: absolute; right: 0;z-index: 99;" class=" pull-right btn btn-danger supprimerClone" data-clone="AricleClone`+number+`" ><i class="fa fa-minus-square" aria-hidden="true"></i> supr.</button>

			<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
				<input id="nom`+number+`" type="text" name="nom[]" class="form-control input-border-bottom" required>
				<label for="nom`+number+`" class="placeholder">Nom article `+number+`</label>
			</div>
			<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
				<input id="prix`+number+`" type="text" name="prix[]" class="form-control input-border-bottom" required>
				<label for="prix`+number+`" class="placeholder">Prix article `+number+`</label>
			</div>
			<div class="form-group form-floating-label col-md-4 col-12 col-lg-4">
				<input id="description`+number+`" type="text" name="description[]" class="form-control input-border-bottom" required>
				<label for="description`+number+`" class="placeholder">Description article `+number+`</label>
			</div>
			<div class="form-group form-floating-label col-md-4 col-12">
				<input id="tag`+number+`" type="text" name="tag[]" class="form-control input-border-bottom" required>
				<label for="tag`+number+`" class="placeholder">Tag article `+number+`</label>
			</div>
			<div class="form-group form-floating-label col-md-4 col-12">
				<select class="form-control input-border-bottom " name="categorie[]" id="categorie`+number+`" required>
					<option value="">&nbsp;</option>
					<option>1</option>
				</select>
				<label for="categorie`+number+`" class="placeholder">Catégorie article `+number+`</label>
			</div>
			 <div class="col-md-4 col-12 row ">
			 	<div class="col-4">
			 		<label for="picture"><h4>Photos 1 <span style="color: red" >*</span> </h4></label>
                     <div class = " row" id="addpicture`+number+`">
                      <div class="divimag col-lg-3 col-md-6">
                      <input type="file" hidden class="form-control" name="picture[]" id="files`+number+`1"  title="Selecte your files.">
                        <li class="fa fa-plus filesview thumbnail" data-id="files`+number+`1" ></li>
                         <img  class="filesviews " src = "https://via.placeholder.com/250"  id="viewfiles`+number+`1" alt = "Generic placeholder thumbnail">
                      </div>
                        
                    </div>
			 	</div>
			 	<div class="col-4">
			 		<label for="picture"><h4>Photos 2</h4></label>
                     <div class = " row" id="addpicture`+number+`2">
                      <div class="divimag col-lg-3 col-md-6">
                      <input type="file" hidden class="form-control" name="picture[]" id="files`+number+`2"  title="Selecte your files.">
                        <li class="fa fa-plus filesview thumbnail" data-id="files`+number+`2" ></li>
                         <img  class="filesviews " src = "https://via.placeholder.com/250"  id="viewfiles`+number+`2" alt = "Generic placeholder thumbnail">
                      </div>
                        
                    </div>
			 	</div>
			 	<div class="col-4">
			 		<label for="picture"><h4>Photos 3</h4></label>
                     <div class = " row" id="addpicture`+number+`">
                      <div class="divimag col-lg-3 col-md-6">
                      <input type="file" hidden class="form-control" name="picture[]" id="files`+number+`3"  title="Selecte your files.">
                        <li class="fa fa-plus filesview thumbnail" data-id="files`+number+`3" ></li>
                         <img  class="filesviews " src = "https://via.placeholder.com/250"  id="viewfiles`+number+`3" alt = "Generic placeholder thumbnail">
                      </div>
                        
                    </div>
			 	</div>
                  
        		</div>
		</div>
		<hr class="hrAricleClone`+number+`">`;
}
// clone article
  $(document).on('click','#AddMoreArticle',function(e){
  	e.preventDefault();
  	var nombre =$(this).attr("data-number");
  	nombre=parseInt(nombre)+1;
  	if (nombre < 11) {
  	 $(cloneArticle(nombre)).hide().appendTo(".alldivClone").show("slow");
  	 $(".input_tags").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});
  	 $(".countNumber").html("( "+nombre+" )");
  	 
  	 $(this).attr("data-number",nombre);
  	 $("html,body").animate({scrollTop: $('#AddMoreArticle').offset().top },1500);
  	}else{
  		swal("Oups!", "Vous ne pouvez ajouter plus de 10 articles à la fois merci!", "error")
  	}
  	
  });

// supremer element cloner 
  $(document).on('click','.supprimerClone',function(e){
  	e.preventDefault();
  	var cloneTodelete =$(this).attr("data-clone");

  	$("#"+cloneTodelete).hide('slow', function(){ $("#"+cloneTodelete).remove(); });
  	$(".hr"+cloneTodelete).hide();
  	console.log($("#hr"+cloneTodelete));
  	
  	var nombre =$('#AddMoreArticle').attr("data-number");
  	  	 nombre=parseInt(nombre)-1;
  	 $('#AddMoreArticle').attr("data-number",nombre);

  	 $(".countNumber").html("( "+nombre+" )");
  });

 // save article
   $( document).on( 'click','#enregistrer', function (e)
        {
        e.preventDefault();
		var Article = document.getElementsByName("article[]");
		var prix = document.getElementsByName("prix[]");
		var categories = document.getElementsByName("categories[]");
        	if (checkEmptyInput(Article)==false|| checkEmptyInput(categories) ==false || checkEmptyInput(prix)==false   ) {
        		swal("Oups!", "Rassurez-vous d'avoir renseigné  le nom, la catégorie et le prix de chaque article!", "error");
        	}else{
	            $('.overflow').show();
	            var myForm = document.querySelector('#newformdada');
	            var formData= new FormData(myForm); 
	            var messagesucess="Enregistrement éffectué!";
				var rederecto='/crm-admin-oraimo/Ajoute-article';
				var idprogress='#progresse';
				var url=URLARTICLE;
				 sendForm(formData,messagesucess,rederecto,idprogress,url);
	           // console.log( file );
	       }
        } );
// add aticle image
$(document).ready(function(){
	/*Disabled*/
	$(document).on('click','.filesview', function () {
      var file=$(this).attr('data-id');
      var   filesview='#view'+file;
          file='#'+file;
        $(file).trigger('click');
        viewimage(file,filesview);
    $(this).removeClass('fa-plus filesview');
        $(this).addClass('fa-minus close ');
    });
      $(document).on('click','.close',function(){
      var file=$(this).attr('data-id');
      var   filesview='#view'+file;
          file='#'+file;      
    $(this).removeClass('fa-minus close');
        $(this).addClass('fa-plus filesview');
        var file=$(this).attr('data-id');
      	var filesview='#view'+file;
          	file='#'+file;
        var el=  $(file);
         	el.wrap('<form>').closest('form').get(0).reset();
      		el.unwrap();
        $(filesview).attr('src','https://via.placeholder.com/250');
      })

      function viewimage(file,filesview){
    $(document).on('change',file,function(){
    var oFReader = new FileReader();
    oFReader.readAsDataURL((this).files[0]);
    oFReader.onload = function (oFREvent) {
        $(filesview).attr('src',oFREvent.target.result);
    };
    });
}
});



// JQVmap


//Chart
