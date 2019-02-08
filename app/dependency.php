<?php

use Pimple\Container;
$container = new Container();

// define some services
$container['kopet'] = function ($c) {
    return 'sempak';
};

echo $container['kopet'];