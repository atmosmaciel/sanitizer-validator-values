<?php

use src\Provider\SanitizeProvider;
use src\Provider\ValidateProvider;

class Main
{
    private $sanitize;
    private $validate;

    public function __construct()
    {
        $this->sanitize = new SanitizeProvider();
        $this->validate = new ValidateProvider();        
    }
}
