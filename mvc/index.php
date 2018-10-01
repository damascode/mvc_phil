<?php

require 'config.php';

spl_autoload_register(function($class) {
    require LIBS . $class .".php";
});

// Load the Bootstrap!
$bootstrap = new Bootstrap();


$bootstrap->init();