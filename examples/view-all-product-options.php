<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
require '../config.example.php';

use NovakSolutions\Infusionsoft as Infusionsoft;

$app = NovakSolutions\Infusionsoft\App::connect();

$options = Infusionsoft\DataService::query(Infusionsoft\ProductOptionValue::blankClass(), array('Id' => '%'));

?><pre><?=print_r($options, true)?></pre>