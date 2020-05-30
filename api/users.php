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
	Api Recupation des userss
	
	action {
			'key' : set_type_user  => create type of user , paramete => array 
			'key' : set_users  => create user acount , paramete => array
			'key' : set_promo_type => create a type of promotion , paramete => array
			'key' : set_user_promo_code => creat a promotcode for user  , paramete => id
			'key' : get_users => get user information , paramete => id
			'key' : connect_user => check user information , paramete => array
	}
*/

 require_once 'autoload.php';
 Autoload::loadClass(); 
 $users = new users ( Database::connect());

switch ($cle) {
	case 'set_type_user':
		$post=$_POST['type_users'];
		$response["response"] = $users -> set_users_type($post);
		break;
	case 'set_users':
		$post=$_POST['users'];
		$response["response"] = $users -> set_users($post);
		break;
	case 'set_promo_type':
		$post=$_POST['promo_type'];
		$response["response"] = $users -> set_promo_type($post);
		break;
	case 'set_user_promo_code':
		$post=$_POST['promo_type'];
		$response["response"] = $users -> set_user_promo($post);
		break;
	case 'get_users':
		$response["response"] = $users -> get_users();
		break;
	case 'connect_user':
		$post=$_POST['infos'];
		$response["response"] = $users -> users_connexion($post);
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