<?php

class View {

    function __construct() {
    }

    public function render($name, $noInclude = false)
    {
        require 'views/' . $name . '.php';    
    }

}