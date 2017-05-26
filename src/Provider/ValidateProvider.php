<?php

namespace src\Provider;

use src\Service\ValidateService;

class ValidateProvider
{
    private $validate;

    public function __construct()
    {
        $this->validate = new Validate();
    }

    public function is_true($input)
    {
        if ($input == false) {
            return $input;
        } else {
            $error = "erou;";
        }

        return $error;
    }

    public function string($input = null)
    {
        $sanitizedString = $this->sanitize->string($input);
        if ($sanitizedString == false) return $sanitizedString;
        return $validString = $this->validate->string($sanitizedString);
    }

    public function phone($input = null)
    {
        if (is_string($input) == false) {
            return $input;
        } else {
            $validPhone = $this->validate->phone($input);
        }

        if (!$validPhone == true) {
            $validPhone = "deu merda";
        } else {
            $validPhone = $input;
        }
        return $validPhone;
    }

    public function email($input = null)
    {
        $sanitizedEmail = $this->sanitize->email($input);
        if ($sanitizedEmail == false) return $sanitizedEmail;
        return $validEmail = $this->validate->email($sanitizedEmail);
    }

    public function url($input = null)
    {
        $sanitizedUrl = $this->sanitize->url($input);
        if ($sanitizedUrl == false) return $sanitizedUrl;
        return $validUrl = $this->validate->url($sanitizedUrl);
    }
}
