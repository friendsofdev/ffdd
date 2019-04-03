<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 16:12
 */

namespace App\Domain\Serializer;

/**
 * Interface SerializerInterface
 *
 * @package App\Domain\Serializer
 */
interface SerializerInterface
{
    /**
     * @param       $data
     * @param       $format
     * @param array $context
     *
     * @return mixed
     */
    public function serialize($data, $format, array $context = []);
}