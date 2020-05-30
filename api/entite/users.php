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
     * set_users_type() save type user to  bdd
     * @param  array : $post  infonrmation of users_type      
     * @date : 16/05/2020
     * @return   bool: true if is good fals if is not  
    */
    public function set_users_type($post){

    }

    /**
     * @author : andil Adebiyi
     * set_users() save user to bdd
     * @param  array : $post  information of user      
     * @date : 16/05/2020
     * @return   bool: true if is good fals if is not  
    */
    public function set_users($post){

    }

    /**
     * @author : andil Adebiyi
     * set_promo_type() save user to bdd
     * @param  array : $post  information of promotion      
     * @date : 16/05/2020
     * @return   bool: true if is good fals if is not  
    */
    public function set_promo_type($post){

    }

    /**
     * @author : andil Adebiyi
     * set_user_promo() save user to bdd
     * @param  array : $post  information of promotion      
     * @date : 16/05/2020
     * @return   bool: true if is good fals if is not  
    */
    public function set_user_promo($post){

    }

    /**
     * @author : andil Adebiyi
     * get_users() get user from
     * @param  string : $id  information of promotion      
     * @date : 16/05/2020
     * @return   array : user information   
    */
    public function get_users(){

    }


   /**
     * @author : andil Adebiyi
     * users_connexion() check il user have count bdd
     * @param  array : $post  information of user      
     * @date : 16/05/2020
     * @return   integer: users id 
    */
    public function users_connexion($post){

    }


}