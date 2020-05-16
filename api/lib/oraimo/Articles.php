<?php
/**
 * @license Kits License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @Copyright (c) kits, 2019
 */
//namespace Kits;
 class Articles extends Managers
{
  
  protected $bdd ;
  public $lastId_user;
  protected $managers = [];

  public function __construct($bdd)
  {
    $this->bdd = $bdd;
  }

  public function ADD($post,$files){
  	$datenow=$this->getCurentimeAs("dateTime");


   $Allarticle=[];

        for ($i=0; $i < count($post["article"]) ; $i++) {
            $file=[
                    "name"=>$files['picture']["name"][$i],
                    "type"=>$files['picture']["type"][$i],
                    "tmp_name"=>$files['picture']["tmp_name"][$i],
                    "size"=>$files['picture']["size"][$i],
                    ] ;
            $images=$this->SaveImag($file,$post['article']).";'';''";
            $lien = preg_replace('/[^a-zA-Z0-9_.]/', '-', $post["article"][$i]);
            $OneArticle="('".
                            $post["article"][$i].
                            "','".$_SESSION['id_shop'].
                            "','".$post["categories"][$i].
                            "','".$post["prix"][$i].
                            "','0','0'".
                            ",'".$post["descriptions"][$i].
                            "','','','','".$datenow.
                            "','".$datenow.
                            "','".$images.
                            "','".$lien.
                            "')";

                    array_push($Allarticle, $OneArticle);
                    
        }



        $AllarticleSQL=implode(",", $Allarticle);
  	      $text="INSERT INTO article (article,id_shop,id_categoire,price,promo_price,available_stock,detail,taille,article_arrival,statut,creat_date,edit_date,article_picture,unique_id) VALUES ".$AllarticleSQL;


     try{
           $request = $this->bdd->query($text);
            $request->closeCursor();
            $this->AddCategorie($post,$datenow);
            return true;
        } catch (PDOException $e) {
            echo "L'enregistrement des informations a échoué:" . $e->getMessage();
            return false;
        }
  }

  public function DELL($post){
            $table=trim(htmlentities($post['tb']));
           $checkby=trim(htmlentities($post['ckb']));
           $valueckeck=trim(htmlentities($post['id']));
            $article=$this->getEntiterUnique('article', 'id_article',$post['id']);
            $this->DelUserInfos($table, $checkby, $valueckeck);
            $this->DelUserInfos('article_has_category',"article_id_article",$post['id']);
            $img=explode(";", $article["article_picture"]);
            $path='Web/img/produit/'.$img[0];


            if (file_exists($path)) {
              unlink($path);
            }
           header('Location: /Maboutique/Liste');
  }

public function AddCategorie($post,$datenow){
    $lastId_users =$this->getlasinsertIds('article','id_article',$datenow);

    

        $Allcategorie=[];
    for ($i=0; $i < count($lastId_users) ; $i++) { 
        $id_categoires=explode(',',trim(htmlentities($post["categories"][$i])));

         foreach ($id_categoires as $id) {
         	$lastid=$lastId_users[$i]['id_article'];

            $oneCategorie="('". $id . "','" . $lastid . "')";
            array_push($Allcategorie, $oneCategorie);
            }
        
    }
     $AllcategorieSQL=implode(",", $Allcategorie);

     $text="INSERT INTO article_has_category (category_id_category,article_id_article) VALUES ".$AllcategorieSQL;
      try{
           $request = $this->bdd->query($text);
            $request->closeCursor();
            return true;
        } catch (PDOException $e) {
            echo "L'enregistrement des informations a échoué:" . $e->getMessage();
            return false;
        }
}



    #getlasinsertId
     public function getlasinsertIds($table,$id,$date){
        $text='SELECT '.$id.'  FROM '.$table.' WHERE creat_date = "'.$date.'"'; 
        $request = $this->bdd->query($text);
        $id = $request->fetchAll();
        return $id;
     }   
    #getlasinsertId

        #SaveImag 
        public function  SaveImag($Photo,$ProduitTitre){
            if (!empty($Photo["type"])) {


                $ProduitTitre =str_replace(' ', '_', $ProduitTitre );
                 $ProduitTitre= str_replace(';', '_', $ProduitTitre );
                 $ProduitTitre= str_replace('"', '_', $ProduitTitre );
                 $ProduitTitre= str_replace("'", '_', $ProduitTitre );
                  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                  $radomevar=substr(str_shuffle($permitted_chars), 0, 10);

                $imagename = 'Kitsmass_' . '_' . time() . '_Poste_Kitsmass'.  $radomevar . $Photo['name'];

                 $imagename= str_replace(' ', '_', $imagename );
                 $imagename= str_replace(';', '_', $imagename );
                 $imagename= str_replace('"', '_', $imagename );
                 $imagename= str_replace("'", '_', $imagename );




                $valid_extensions = array("jpeg", "JPEG", "jpg", "JPG", "png", 'PNG');



                $temporary = explode(".", $Photo["name"]);



                $file_extension = end($temporary);

                if ((($Photo["type"] == "image/png") || ($Photo["type"] == "image/jpg") || ($Photo["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)) {

                    $sourcePath = $Photo['tmp_name'];

                    $targetPath = "Web/img/produit/" . $imagename;

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