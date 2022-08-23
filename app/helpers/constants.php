<?php

define('URL_BASE', "http://localhost/web-esplanada_royal_plas-php");
define('SITE', "Royal Plaza");

define('FOLDER_BASE', "/app/views/base");
define('BASE_VIEWS', "/../views/base");
define('BASE_STYLES', "/src/styles");
define('BASE_JS', "/src/js");
define('BASE_IMAGES', "/src/assets/images");
define('BASE_ICONS', "/src/assets/icons");

define('FOLDER_DASHBOAR', "/app/views/base");
define('DASHBOARD_VIEWS', "/../views/dashboard");


function urlProject(string $uri = null): string{
  if($uri){
    return URL_BASE . "/{$uri}";
  }

  return URL_BASE;
}