<?php

class article extends Managers
{

  protected $bdd ;
  public $lastId_user;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }
    /**
     * @author : andil Adebiyi
     * get_one_article() get specified article from bdd
     * @param  integer : $id  id for article      
     * @date : 16/05/2020
     * @return   array: article with all caractéristque (comment , like,ect) 
    */

    public function get_one_article($id){
        $text_request="SELECT 
                        A.nom AS Article,
                        A.prix AS Prix,
                        A.description AS Details,
                        A.categorie AS Catagorie,
                        A.tag AS Tag,
                        A.picture AS Images,
                        A.lien AS Lien,
                        C.commentaire AS Commentaire,
                        FROM article AS A 
                        INNER JOIN commentaire AS C
                        ON C.article_idarticle=A.idarticle 
                        WHERE A.idarticle= '".$id."'";
        $request = $this->bdd->query($text_request);
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        $request->closeCursor();
        return $result;
    }


    /**
     * @author : andil Adebiyi
     * get_all_article() get all article  from bdd    
     * @date : 16/05/2020
     * @return   array: article with all caractéristque (comment , like,ect) 
    */

    public function get_all_article(){
        $text_request="SELECT 
                        A.nom AS Article,
                        A.prix AS Prix,
                        A.description AS Details,
                        A.categorie AS Catagorie,
                        A.tag AS Tag,
                        A.picture AS Images,
                         A.lien AS Lien,
                        C.commentaire AS Commentaire,
                        COUNT(A.nom) AS totales,
                        FROM article AS A 
                        INNER JOIN commentaire AS C
                        ON C.article_idarticle=A.idarticle 
                       ";
        $request = $this->bdd->query($text_request);
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        $request->closeCursor();
        return $result;
    }


    /**
     * @author : andil Adebiyi
     * save_article() save article in  bdd    
     * @date : 16/05/2020
     * @param array : all information for article  
     * @return   bool: true if is good, false if is not  
    */

    public function save_article($post,$file){
        $Allarticle=[];

        for ($i=0; $i < count($post["Article"]) ; $i++) {
            $file=[
                    "name"=>$files['picture']["name"][$i],
                    "type"=>$files['picture']["type"][$i],
                    "tmp_name"=>$files['picture']["tmp_name"][$i],
                    "size"=>$files['picture']["size"][$i],
                    ] ;
            $images=$this->SaveImag($file,$post['Article'][$i]).";'';''";
            $lien = preg_replace('/[^a-zA-Z0-9_.]/', '-', $post["Article"][$i]);
            $OneArticle="('". $post["Article"][$i]."',
                            '".$post["Prix"][$i]."',
                            '".$images."',
                            '".$post["Details"][$i]."',
                            '".$post["Catagorie"][$i]."',
                            '".$post["Tag"][$i].",
                            '0',
                            '0',
                            '".$lien."')";

                    array_push($Allarticle, $OneArticle);           
        }
        $AllarticleSQL=implode(",", $Allarticle);
  	      $text="INSERT INTO article
             (nom,
             prix,
             picture,
             description,
             categorie,
             tag,
             vue,
             aime,
             lien) VALUES ".$AllarticleSQL;
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


    /**
     * @author : andil Adebiyi
     * del_article() del article in  bdd    
     * @date : 16/05/2020
     * @param integer : id article for del 
     * @return   bool: true if is good, false if is not 
    */

    public function del_article($id,$path){
        $text_request="DELETE  article,commentaire
                       FROM article AS A
                       INNER JOIN commentaire AS C 
                       ON C.article_idarticle=A.idarticle 
                        WHERE A.idarticle='".$id."'";
        $request = $this->bdd->query($text_request);
        $request->closeCursor();
         if (file_exists($path)) {
              unlink($path);
            }
        $result="";
        return $result;
    }



    /**
     * @author : andil Adebiyi
     * SaveImag() save Image to the server     
     * @date : 16/05/2020
     * @param  string : $ProduitTitre titlr of article 
     * @param array   : $Photo picture  for save
     * @return string : image path
    */
    public function  SaveImag($Photo,$ProduitTitre){
        if (!empty($Photo["type"])) {

                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                $radomevar=substr(str_shuffle($permitted_chars), 0, 10);

            $imagename = 'oraimo' . '_' . time() . '_Poste_oraimo'.  $radomevar . $Photo['name'];

                $imagename= str_replace(' ', '_', $imagename );
                $imagename= str_replace(';', '_', $imagename );
                $imagename= str_replace('"', '_', $imagename );
                $imagename= str_replace("'", '_', $imagename );




            $valid_extensions = array("jpeg", "JPEG", "jpg", "JPG", "png", 'PNG');



            $temporary = explode(".", $Photo["name"]);



            $file_extension = end($temporary);

            if ((($Photo["type"] == "image/png") || ($Photo["type"] == "image/jpg") || ($Photo["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)) {

                $sourcePath = $Photo['tmp_name'];

                $targetPath = "img_article/" . $imagename;

                if (move_uploaded_file($sourcePath, utf8_encode($targetPath))) {

                    $imagename = $imagename;

                }

            }

        } else {
                $imagename = "oraimo.png";
        }

        return utf8_encode($imagename);
    }
    #SaveImag

}

