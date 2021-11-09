
<?php
require_once("vendor/autoload.php");
require_once("vendor/fabpot/Goutte/Goutte/Client.php");

use Goutte\Client;

$client = new Client();


$crawler = $client->request('GET', 'https://www.milanuncios.com/categorias');

$crawler->filter('.categoriasBox')->each(function ($anuncio)
{
    print_r($anuncio);
    $arrayElement = [];
    $anuncio->filter('div > a')->each(function ($node){
        $arrayElement[] = $node->text();
    });
    $img=$anuncio->filter('img')->eq(1)->attr('src');
    $subcategoriamotor=$anuncio->filter('.cat2Item-motor')->eq(5)->text();




    var_dump($categoria);
});

