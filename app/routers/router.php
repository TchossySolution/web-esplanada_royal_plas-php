<?php

use CoffeeCode\Router\Router;

function router(){

  $router = new Router(URL_BASE);

  $router -> namespace("App\controllers");
  
// ROTA DE BASE
  $router -> group(null);
  // 1º parâmetro: Rota | 2º parâmetro: controller (o que será executado)
  // No controller: 1º parâmetro: o arquivo (onde tem a função) (ex.: Base) |  2º parâmetro: função (ex.: home)
  $router -> get("/", "Base:home");
  $router -> get("/about", "Base:about");
  $router -> get("/gallery", "Base:gallery");
  $router -> get("/contacts", "Base:contacts");
  $router -> get("/reservation", "Base:reservation");
  
  $router -> group("/bedrooms");
  $router -> get("/", "Base:bedrooms");
  $router -> get("/details/{idBedrooms}", "Base:bedroomsDetails");
  
  $router -> group("/blog");
  $router -> get("/", "Base:blog");
  $router -> get("/details/{idBlog}", "Base:blogDetails");
  
// ROTA DA DASHBOARD
  $router -> group("/dashboard");
  $router -> get("/", "Dash:home");
 
    
// ROTA DE ERROS
  $router -> group("/ops");
  $router -> get("/{errocode}", "Base:error");
  
  
  $router -> dispatch();
  
  if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
  }
}