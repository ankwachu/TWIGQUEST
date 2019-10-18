<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader, []);
//echo $twig->render('base.html.twig');
echo $twig->render('index.html.twig',['products' => $products]);