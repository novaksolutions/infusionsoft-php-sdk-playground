<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
require '../config.php';

use NovakSolutions\Infusionsoft as Infusionsoft;

Infusionsoft\OAuth2::$redirectUri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$app = NovakSolutions\Infusionsoft\App::connect();
//If We Just Got Back From The OAuth Page...

if(isset($_GET['scope']) && isset($_GET['code'])){
    Infusionsoft\OAuth2::processAuthenticationResponseIfPresent($_GET['scope'], $_GET['code'], false);
}

if(!$app->hasTokens()){
    header("Location: " . Infusionsoft\OAuth2::getAuthorizationUrl());//Send To OAuth Page...
    die();
}


$results = Infusionsoft\DataService::query(Infusionsoft\Contact::blankClass(), array('FirstName' => '%'));

var_dump($results);