<?php

namespace App\controllers;

use League\Plates\Engine;

class Base {

  private $templates;
  
  public function __construct() {
    $viewsPath = __DIR__ . BASE_VIEWS;
    $this->templates = new Engine($viewsPath);
  } 

  // HOME
  public function home():void{
    $page_name = "home";
    echo $this->templates->render($page_name, []);
  }

  // ABOUT US
  public function about():void{
    $page_name = "about";
    echo $this->templates->render($page_name, []);
  }

  // BEDROOMS
  public function bedrooms():void{
    $page_name = "bedrooms";
    echo $this->templates->render($page_name, []);
  }
  public function bedroomsDetails():void{
    $page_name = "bedroomsDetails";
    echo $this->templates->render($page_name, []);
  }

  // GALLERY
  public function gallery():void{
    $page_name = "gallery";
    echo $this->templates->render($page_name, []);
  }

  // BLOG
  public function blog():void{
    $page_name = "blog";
    echo $this->templates->render($page_name, []);
  }
  public function blogDetails():void{
    $page_name = "blogDetails";
    echo $this->templates->render($page_name, []);
  }

  // ABOUT US
  public function reservation():void{
    $page_name = "reservation";
    echo $this->templates->render($page_name, []);
  }

  // CONTACTS
  public function contacts():void{
    $page_name = "contacts";
    echo $this->templates->render($page_name, []);
  }

  // ERROS
  public function error(array $data):void{
    $page_name = "notFound";

    echo $this->templates->render($page_name, [
      "error" => $data["errocode"]
    ]);
    
  }
}