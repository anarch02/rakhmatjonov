<?php
    require 'web/routes.php';


    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // var_dump($uri);

    if(array_key_exists($uri, $routes))
    {
        require $routes[$uri];
    }