<?php
require ('../vendor/autoload.php');

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render('home.html.twig', array('products' => $products));

