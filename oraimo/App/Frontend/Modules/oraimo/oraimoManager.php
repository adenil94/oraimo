<?php

class oraimoManager extends Managers
{
  protected $bdd;
 
  public function __construct($bdd)
  {
    $this->bdd = $bdd;

  }

}


              