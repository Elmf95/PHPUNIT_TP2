<?php

namespace User\Tp2PhpUnit\Exceptions;

use Exception;

class InformationsManquantesException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
