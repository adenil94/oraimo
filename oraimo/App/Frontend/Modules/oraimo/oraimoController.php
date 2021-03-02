 <?php
 

class oraimoController extends BackController
{
    /**
 * @licenseoraimo License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison
 * @Copyright (c) oraimo, 2019
 */

  public function executesimple(HTTPRequest $request)
  {
  		  $urlapi="http://api.kitsmass.com/oraimo/article.php";
  		 // $urlapi="http://kitmass.d.com/api/oraimo/article.php";
      $id= urldecode($request->getData('id')) ;
  		$lien= urldecode($request->getData('lien')) ;


  	    $url=$urlapi."?action=get_aticle&identification=".$id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json')                                                                       
        ); 
        $urlimag="https://api.kitsmass.com/oraimo/img_article";
        $response = curl_exec($ch);
        $article= json_decode($response,true);
		$name=$article["response"]['Article'];
		$img=explode(";", $article["response"]['Images']);
		$images=$urlimag."/".$img[0];
		$prix=$article["response"]['Prix'];
		$description=$article["response"]['Descrption'];
		$this->page->addVar('name',$name);
		$this->page->addVar('images',$images);
		$this->page->addVar('prix',$prix);
    $this->page->addVar('description',$description);
		$this->page->addVar('idArticle',$id);


$this->page->addVar('descriptionMeta',$description);
$this->page->addVar('titleMeta',$name);
$this->page->addVar('urlMeta',"https://oraimo.kitsmass.com/Article-".$lien."-".$id);
$this->page->addVar('imageMeta',$images);

  } 

      /**
 * @license oraimo License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Acceuil
 * @Copyright (c) or, 2019
 */
  public function executeindex(HTTPRequest $request)
  {
  
  }
      /**
 * @license oraimo License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Rapport/Maisons
 * @Copyright (c)oraimo, 2019
 */
  

 } 





