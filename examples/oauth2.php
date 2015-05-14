<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
require '../config.php';

use NovakSolutions\Infusionsoft as Infusionsoft;

Infusionsoft\OAuth2::$redirectUri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

Infusionsoft\OAuth2::processAuthenticationResponseIfPresent();

$app = NovakSolutions\Infusionsoft\App::connect();
//If We Just Got Back From The OAuth Page...

if(!$app->hasTokens()){
    header("Location: " . Infusionsoft\OAuth2::getAuthorizationUrl());//Send To OAuth Page...
    die();
}

$results = Infusionsoft\DataService::query(Infusionsoft\Contact::blankClass(), array('FirstName' => '%'), 2);
?><pre><?php var_dump($results); ?></pre><?php
