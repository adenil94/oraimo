 <input type="text" id="URLARTICLE"  hidden name="URLARTICLE" value="httpS://api.kitsmass.com/oraimo/article.php">
 <input type="text" id="URLUSER"  hidden name="URLARTICLE" value="httpS://api.kitsmass.com/oraimo/users.php">
<script src="/App/Frontend/Web/js/jquery-1.12.4.min.js"></script> 
<script src="/App/Frontend/Web/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="/App/Frontend/Web/js/chosen.min.js"></script>

<script src="/App/Frontend/Web/js/countdown.min.js"></script>

<script src="/App/Frontend/Web/js/jquery.scrollbar.min.js"></script>

<script src="/App/Frontend/Web/js/lightbox.min.js"></script>

<script src="/App/Frontend/Web/js/magnific-popup.min.js"></script>

<script src="/App/Frontend/Web/js/slick.js"></script>

<script src="/App/Frontend/Web/js/jquery.zoom.min.js"></script>

<script src="/App/Frontend/Web/js/threesixty.min.js"></script>

<script src="/App/Frontend/Web/js/jquery-ui.min.js"></script>

<script src="/App/Frontend/Web/js/mobilemenu.js"></script>

<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>

<script src="/App/Frontend/Web/js/functions1.js"></script>
<script src="/App/Frontend/Web/js/oraimo6.js?v79"></script>

<script type="text/javascript">
	var urlparsingFrame=window.location.search;
	var codePromotion=urlparsingFrame.split("=");
	var n = codePromotion[0].includes("code");
	if (n) {
		$("#code_promot").val(codePromotion[1]);
		checkcodePromotion(codePromotion[1]);
		// vérifier si l'utilisateur a déjà cliker sur le lien une fois dans la journée
		var cookie = getCookie(codePromotion[1]);
		if (!cookie) {
		incremaantclickCode(codePromotion[1]);
		}
	}else{
		
	}
	





</script>