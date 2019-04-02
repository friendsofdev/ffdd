<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 19:11
 */

namespace App\Domain\Exception;


class Exception extends \Exception
{
    public static $exceptionCode;

    /**
     * Exception constructor.
     *
     * @param string $message
     * @param int    $code
     */
    public function __construct($message = 'request.exception', $code = 100)
    {
        self::$exceptionCode = $code;
        parent::__construct($message, $code);
    }
}
