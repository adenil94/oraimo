<?php
$response = ["status"=>"ok"];
if (isset($_GET['action'])) {
	$cle = $_GET['action'];
}else if(isset($_POST['action'])){
	$cle = $_POST['action'];
}else{
	$response = [
			"status" => "ok",
			"response" => "undefine action"
	];
	echo json_encode($response);
	die();
}


header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *');
/*
    
    Access-Control-Allow-Origin DomainA.com
	Api Recupation des articles
	
	action {
			'key' : get_aticle  => without (s) mean on article , paramete => id 
			'key' : get_aticles  => with (s) mean all articles , paramete => none
			'key' : set_articles => save article , paramete => array
			'key' : del_articles => del article  , paramete => id
	}
*/
 require_once 'autoload.php';

 $article = new article ();

switch ($cle) {
	case 'get_aticle':
		$post="";$file="";
		$response["response"] = $article -> get_one_article($_GET['id']);
		break;
	case 'get_aticles':
		$post="";$file="";
		$response["response"] = $article -> get_all_article();
		break;
	case 'set_articles':
		$post="";$file="";
		$response["response"] = $article -> save_article();
		break;
	case 'del_articles':
		$post="";$file="";
		$response["response"] = $article -> del_article($_GET['id']);
		break;
	default:
		$response=[
			"Status"=>"ok",
			"response"=>"action not Found"

			];
		break;

}

	echo json_encode($response);
	die();