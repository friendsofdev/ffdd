<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 19:05
 */

namespace App\Domain\Error;


class Validation
{
    /** @var array */
    public $violations = [];

    /**
     *
     * Creates a new constraint violation list.
     *
     * Violations constructor.
     *
     * @param array $violations
     */
    public function __construct(array $violations = [])
    {
        foreach ($violations as $violation) {
            $this->add($violation);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function add(Error $violation)
    {
        $this->violations[] = $violation;
    }
}