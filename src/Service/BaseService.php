<?php

namespace src\Service;

class BaseService
{
    protected function removingSymbolsNumbers(string $input)
    {
        return $data = preg_replace("/[^a-zA-Z\s]/", "", $input);
    }

    protected function stringSpecialCaracteres(string $input)
    {
        return $string = filter_var($input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
}
