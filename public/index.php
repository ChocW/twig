<?php

require_once '../vendor/autoload.php';

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

//rendu du template
$loader = new Twig_Loader_Filesystem( '../src/view/');
$twig = new Twig_Environment($loader,array(
         'cache' => false
));


$params= array("produits"=>$products);
echo $twig->render('index.html.twig', $params);
