<?php

namespace src\Service;

class SanitizeService extends BaseService
{
    public function string(string $input)
    {
        $string = $this->stringSpecialCaracteres($input);
        return $sanitizedString = filter_var($string, FILTER_SANITIZE_STRING);
    }

    public function email(string $input)
    {
        return $email = filter_var($input, FILTER_SANITIZE_EMAIL);
    }

    public function url(string $input)
    {
        return $url = filter_var($input, FILTER_SANITIZE_URL);
    }
}
