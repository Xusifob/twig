<?php
// Je charge toutes les librairies
require __DIR__ . '/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__ .'/views/',
]);

$twig = new Twig_Environment($loader,[
    // 'cache' => null
]);

$article = [
    'name' => 'Vive les balises CENTER',
    'content' => 'Vive les balises CENTER',
    'enabled' => true,
    'date' => new DateTime('now'),

];
echo $twig->render('article.html.twig', [
    'article' => $article,
]);
