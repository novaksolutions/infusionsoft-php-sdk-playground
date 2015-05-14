<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
require '../config.example.php';

use NovakSolutions\Infusionsoft as Infusionsoft;

$app = NovakSolutions\Infusionsoft\App::connect();

$product = new Infusionsoft\Product();
$product->ProductName = 'Test 1';
$product->save();

$productOption = new Infusionsoft\ProductOption();
$productOption->ProductId = $product->Id;
$productOption->Label = 'Test Option';
$productOption->save();

$productOptionValue1 = new Infusionsoft\ProductOptionValue();
$productOptionValue1->ProductOptionId = $productOption->Id;
$productOptionValue1->Name = 'Test 1';
$productOptionValue1->Label = 'Test 1';
$productOptionValue1->OptionIndex = 1;
$productOptionValue1->Sku = 'T1';
$productOptionValue1->save();

$productOptionValue2 = new Infusionsoft\ProductOptionValue();
$productOptionValue2->ProductOptionId = $productOption->Id;
$productOptionValue2->Name = 'Test 1';
$productOptionValue2->Label = 'Test 2';
$productOptionValue2->OptionIndex = 2;
$productOptionValue2->Sku = 'T1';
$productOptionValue2->save();

$productOptionValue3 = new Infusionsoft\ProductOptionValue();
$productOptionValue3->ProductOptionId = $productOption->Id;
$productOptionValue3->Name = 'Test 1';
$productOptionValue3->Label = 'Test 3';
$productOptionValue2->OptionIndex = 3;
$productOptionValue3->Sku = 'T1';
$productOptionValue3->save();