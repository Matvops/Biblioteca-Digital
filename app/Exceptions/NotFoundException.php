<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message ?? "Não possui dados.");
    }
}
