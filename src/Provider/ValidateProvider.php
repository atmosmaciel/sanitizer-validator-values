<?php

namespace src\Provider;

use src\Service\ValidateService;

class ValidateProvider
{
    private $validate;

    public function __construct()
    {
        $this->validate = new ValidateService();
    }

    public function string($input = null)
    {
        return $validString = $this->validate->string($input);
    }

    public function phone($input = null)
    {
        return $validPhone = $this->validate->phone($input);
    }

    public function email($input = null)
    {
        return $validEmail = $this->validate->email($sanitizedEmail);
    }

    public function url($input = null)
    {
        return $validUrl = $this->validate->url($sanitizedUrl);
    }
}
