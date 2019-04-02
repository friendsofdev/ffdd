<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 19:05
 */

namespace App\Domain\Error;


class Error
{
    /** @var string */
    public $propertyPath;
    /** @var string */
    public $message;

    /**
     * Error constructor.
     *
     * @param string $message
     * @param string $propertyPath
     */
    public function __construct(string $message, string $propertyPath)
    {
        $this->propertyPath = $propertyPath;
        $this->message = $message;

        return $this;
    }
}