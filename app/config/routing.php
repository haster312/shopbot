<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;


$collection = new RouteCollection();
$collection->add('category', new Route('/category',
    array(
        '_controller' => 'AppBundle:Blog:list',
        'page'        => 1,
    )
));

return $collection;