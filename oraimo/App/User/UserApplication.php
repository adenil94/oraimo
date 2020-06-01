<?php
class UserApplication extends Application
{
  public function __construct()
  {
    parent::__construct();

    $this->name = 'User';
  }

  public function run()
  {
    $controller = $this->getController();
    $controller->execute();


    $this->httpResponse->setPage($controller->page());
    $this->httpResponse->send();
  }
}