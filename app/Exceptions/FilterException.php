<?php

namespace App\Exceptions;

use Exception;

class FilterException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message ?? "Erro inesperado! Favor contate o suporte.");
    }
}
