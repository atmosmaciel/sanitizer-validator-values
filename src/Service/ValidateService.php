<?php

namespace src\Service;

class ValidateService extends BaseService
{
    public function string(string $input)
    {
        return $string = $this->removingSymbolsNumbers($input);
    }

    public function phone(string $input)
    {
        return $phone = preg_match('/^[+]?([\d]{0,3})?[\(\.\-\s]?(([\d]{1,3})[\)\.\-\s]*)?(([\d]{3,5})[\.\-\s]?([\d]{4})|([\d]{2}[\.\-\s]?){4})$/', $input);
    }

    public function email(string $input)
    {
        return filter_var($input, FILTER_VALIDATE_EMAIL);
    }

    public function url(string $input)
    {
        return $url = filter_var($input, FILTER_VALIDATE_URL);
    }
}
