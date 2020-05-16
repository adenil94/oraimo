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
        $result="";
        return $result;
    }


    /**
     * @author : andil Adebiyi
     * get_all_article() get all article  from bdd    
     * @date : 16/05/2020
     * @return   array: article with all caractéristque (comment , like,ect) 
    */

    public function get_all_article(){
        $result="";
        return $result;
    }


    /**
     * @author : andil Adebiyi
     * save_article() save article in  bdd    
     * @date : 16/05/2020
     * @param array : all information for article  
     * @return   bool: true if is good, false if is not  
    */

    public function save_article(){
        $result="";
        return $result;
    }


    /**
     * @author : andil Adebiyi
     * del_article() del article in  bdd    
     * @date : 16/05/2020
     * @param integer : id article for del 
     * @return   bool: true if is good, false if is not 
    */

    public function del_article($id){
        $result="";
        return $result;
    }


    
}

