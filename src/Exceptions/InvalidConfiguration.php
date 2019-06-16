<?php


namespace DansMaCulotte\MailTemplate\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{
    /**
     * @param $name
     * @return InvalidConfiguration
     */
    public static function invalidCredentials($name)
    {
        return new static("Credentials provided for `{$name}` are invalid.");
    }
}
