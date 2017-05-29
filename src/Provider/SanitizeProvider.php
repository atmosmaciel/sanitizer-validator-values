<?php

namespace src\Provider;

use src\Service\SanitizeService;

class SanitizeProvider
{
    private $sanitize;

    public function __construct()
    {
        $this->sanitize = new SanitizeService();
    }

    public function string(string $input)
    {
        $value = $this->sanitize->string($input);

        try {
            if ($value != true) {
                throw new Exception("A string informada não é válida", 1);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return $value;
    }

    public function email(string $input)
    {
        $value = $this->sanitize->email($input);

        try {
            if ($value != true) {
                throw new Exception("A string informada não é válida", 1);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return $value;
    }

    public function url(string $input)
    {
        $value = $this->sanitize->url($input);

        try {
            if ($value != true) {
                throw new Exception("A string informada não é válida", 1);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return $value;
    }
}
