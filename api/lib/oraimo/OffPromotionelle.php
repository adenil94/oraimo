<?php
/**
 * @license Kits License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @Copyright (c) kits, 2019
 */
//namespace Kits;
 class OffPromotionelle extends Managers
{ 
  
  protected $bdd ;
  public $lastId_user;
  public $url="https://kitsmass.com//api/OffPromotionelle_V1.0.0.php";
  protected $managers = [];

  public function __construct($bdd)
  {
    $this->bdd = $bdd;
  }
      /**
     * @author : andil Adebiyi
     * ADD() ajoute d'offre promotionelle
     * @param  array : $post  information des offres  
     * @param  file : $file  image de l'offre   
     * @date : 29/03/2020
     * @return  retourne save si acion reuisit et error si non 
     */
      public function ADD($data,$file=null){

        $url=$this->url;

        $setbanner=(isset($data["setTobanner"]))?$data["setTobanner"]:"false";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        

        $datas= array(
        "action"=>"setOffre",
        "promo_name"=>$data["nom"],
        "aricle_number"=>$data["nombre_article"],
        "detail"=>$data["descriptions"],
        "begin_date"=>$data["date_debut"],
        "end_date"=>$data["date_fin"],
        "has_picture"=>$data["has_image"],
        "set_banner"=>$setbanner,
        "id_users"=>$_SESSION['useinfos']['id_users'],
        "id_shop"=>$_SESSION['id_shop'],
        );
        if ($file["picture1"]["name"]!="") {
          $cfile=new CURLFile($file['picture1']['tmp_name'],$file['picture1']['type'],$file['picture1']['name']);
          $arrayFile=['user_pictuer' => $cfile];
         $datas=array_merge($datas, $arrayFile);
        }else{
          $cfile="";
          $arrayFile=['user_pictuer' => $cfile];
        }

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$datas);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $response = curl_exec($ch);
        return json_decode($response,true) ;
        }


      /**
     * @author : andil Adebiyi
     * EDIT() modification d'offre promotionelle
     * @param  array : $post  information des offres  
     * @param  file : $file  image de l'offre   
     * @date : 29/03/2020
     * @return  retourne save si acion reuisit et error si non 
     */
    public function EDIT($data,$file){

        $url=$this->url;

        $setbanner=(isset($data["setTobanner"]))?$data["setTobanner"]:"false";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        

        $datas= array(
        "action"=>"setOffreEdit",
        "promo_name"=>$data["nom"],
        "aricle_number"=>$data["nombre_article"],
        "detail"=>$data["descriptions"],
        "begin_date"=>$data["date_debut"],
        "end_date"=>$data["date_fin"],
        "has_picture"=>$data["has_image"],
        "has_picture"=>$data["has_image"],
        "set_banner"=>$setbanner,
        "idOffre"=>$data["idOffre"],
        "id_users"=>$_SESSION['useinfos']['id_users'],
        "id_shop"=>$_SESSION['id_shop'],
        );
        if ($file["picture1"]["name"]!="") {
          $cfile=new CURLFile($file['picture1']['tmp_name'],$file['picture1']['type'],$file['picture1']['name']);
          $arrayFile=['user_pictuer' => $cfile];
         $datas=array_merge($datas, $arrayFile);
        }else{
          $cfile="";
          $arrayFile=['user_pictuer' => $cfile];
        }

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$datas);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $response = curl_exec($ch);
        return json_decode($response,true) ;
    }

    /**
     * @author : andil Adebiyi
     * DELL est une methode qui suprime les offres promotionelle   
     * @param  string : $table  Le nom de la table dans laquelle les informations seront suprimer
     * @param $promotion id de l'offre
     * @param $valueckec valeur correspondant au champs de vérifiaction 
     * @date : 29/03/2020
     * @return errorUse si  l'offre est deja utiliser une seul fois
               dell  si l'offre a été suprimer 
               error si il y a une erreur  
     */

    public function DELL($shop,$promotion){

              $url= $url=$this->url."?action=dellforshop&idshop=".$shop."&idoffre=".$promotion;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json')                                                                       
        ); 
        $response = curl_exec($ch);  
        return json_decode($response,true);     
    }

    /**
     * @author : andil Adebiyi
     * GetAllPromotion est une methode qui renvoie les offres promotionelle   
     * @param  string : $table  Le nom de la table dans laquelle les informations seront suprimer
     * @date : 29/03/2020
     * @return le tableau des offres
     */

    public function GetAllPromotion(){

       $resultat=$this->getEntiter("offre_promotionelle");
      return $resultat;
    }


    /**
     * @author : andil Adebiyi
     * GetOnePromotion est une methode qui renvoie une offres promotionelle   
     * @param  string : $promotion  identifiant de  la promotion en cours
     * @date : 29/03/2020
     * @return le tableau des offres
     */

 
    public function GetOnePromotion($promotion){
      $resultat=$this->getEntiterUnique("offre_promotionelle", "idoffre_promotionelle", $promotion);
      return $resultat;
    }

    /**
     * @author : andil Adebiyi
     * GetShopPromotion est une methode qui renvoie les offres promotionelle d'une boutique  
     * @param  string : $boutique  identifiant de  la boutique en cours
     * @param  array : $post  information des offres  
     * @param  file : $file  image de l'offre 
     * @date : 29/03/2020
     * @return le tableau des offres
     */

    public function GetShopPromotion($boutique){
        $url=$this->url."?action=getforshop&idshop=".$boutique;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json')                                                                       
        ); 
        $response = curl_exec($ch);

      //$resultat=$this->getEntiterM("offre_promotionelle", "idoffre_promotionelle", $boutique,"nom");
      return json_decode($response,true);
    }

    /**
     * @author : andil Adebiyi
     * SetPromoForOneArticle est une methode qui attribu une offre a un article 
     * @param  string : $boutique  identifiant de  la boutique en cours
     * @date : 29/03/2020
     * @return save si reuissit et error si echeck 
     */

    public function SetPromoForOneArticle($post){
        $url=$this->url;
$ch = curl_init($url);
        $data=[
                "action"=>"applyOnarticle",
                "article"=>$post["idArticle"] ,
                "all_promotion"=>$post["offreforOne"] //exemple : "1,2,3,4"
                ];

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $response = curl_exec($ch);
      return json_decode($response,true);
    }
        /**
     * @author : andil Adebiyi
     * SetPromoForManyArticle est une methode qui attribu une plusieur offre  a plusieur article 
     * @param  string : $boutique  identifiant de  la boutique en cours
     * @date : 29/03/2020
     * @return save si reuissit et error si echeck 
     */

    public function SetPromoForManyArticle($post){
        $url=$this->url;
        $ch = curl_init($url);
            $data=[
                "action"=>"applyManyarticle",
                "article"=>$post["Allarticle"] ,
                "promotion"=>$post["offreformany"] //exemple : "1,2,3,4"
                ];
               
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $response = curl_exec($ch);
      return json_decode($response,true);
    }

    /**
     * @author : andil Adebiyi
     * GetOnePromotionForOneArticle est une methode qui renvoie tous  les offres promotionelle lier a un article  
     * @param  string : $article  identifiant de  l'article en cours
     * @date : 29/03/2020
     * @return le tableau des offres
     */

    public function GetPromotionForOneArticle($article){
        $url=$this->url."?action=getAllOffreForOne&idArticle=".$article;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json')                                                                       
        ); 
        $response = curl_exec($ch);

      //$resultat=$this->getEntiterM("offre_promotionelle", "idoffre_promotionelle", $boutique,"nom");
      return json_decode($response,true);    
    }
    /**
     * @author : andil Adebiyi
     * CountPromotionForOneArticle est une methode qui renvoie le nombre  d'offres promotionelle lier a un article  
     * @param  string : $article  identifiant de  l'article en cours
     * @date : 29/03/2020
     * @return le tableau des offres
     */
    public function CountPromotionForOneArticle($article){
      $CountPromotion=$this->counts("condition_pannier", "id_article", $article);
      return $CountPromotion;      
    }



    /**
     * @author : andil Adebiyi
     * SaveImagoffre est une methode qui enregistre et renvoie le nom de l'image de l'offre  
     * @param  file : $Photo  photo
     * @date : 29/03/2020
     * @return le nom de l'image
     */
        #SaveImag 
    public function  SaveImagoffre($Photo){
        if (!empty($Photo["type"])) {


              $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
              $radomevar=substr(str_shuffle($permitted_chars), 0, 10);

            $imagename = 'Kitsmass_' . '_' . time() . 'offre_promotionelle'.  $radomevar . $Photo['name'];

             $imagename= str_replace(' ', '_', $imagename );
             $imagename= str_replace(';', '_', $imagename );
             $imagename= str_replace('"', '_', $imagename );
             $imagename= str_replace("'", '_', $imagename );




            $valid_extensions = array("jpeg", "JPEG", "jpg", "JPG", "png", 'PNG');



            $temporary = explode(".", $Photo["name"]);



            $file_extension = end($temporary);

            if ((($Photo["type"] == "image/png") || ($Photo["type"] == "image/jpg") || ($Photo["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)) {

                $sourcePath = $Photo['tmp_name'];

                $targetPath = "Web/img/offrepromotion/" . $imagename;

                if (move_uploaded_file($sourcePath, utf8_encode($targetPath))) {

                    $imagename = $imagename;

                }

            }

        } else {
                $imagename = "kitsmass.png";
        }

        return utf8_encode($imagename);
    }
    #SaveImag



}