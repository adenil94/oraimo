<?php
$_GET['action']="get_aticle";
$_GET['id']="1";
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
 Autoload::loadClass(); 
 $article = new article ( Database::connect());

switch ($cle) {
	case 'get_aticle':
		$response["response"] = $article -> get_one_article($_GET['identification']);
		break;
	case 'get_aticles':
		$response["response"] = $article -> get_all_article();
		break;
	case 'set_articles':
		$post=$_POST['article'];$file=$_FILES['picture'];
		$response["response"] = $article -> save_article($post, $file);
		break;
	case 'del_articles':
		$response["response"] = $article -> del_article($_GET['identification']);
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