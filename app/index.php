<?php

use BearFramework\App;

$app->routes->add('/', function() {
    return new App\Response('Hi from Bear Framework');
});
