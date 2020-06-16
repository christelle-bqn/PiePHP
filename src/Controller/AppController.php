<?php

class AppController extends \Core\Controller
{
  public function __construct()
  {
    $this->request = new \Core\Request;
  }
  
  public function indexAction() 
  {
    $message = "App index action";
    $this->render("index", ["message" => $message]);
  }

  public function addAction() 
  {
    echo "App add action";
  }

  public function readAction() 
  {
    $message = "App read action";
    $this->render("read", ["message" => $message]);
  }
}