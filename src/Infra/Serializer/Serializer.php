<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 16:12
 */

namespace App\Infra\Serializer;

use App\Domain\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SerializerSymfony;

/**
 * Class Serializer
 *
 * @package App\Infra\Serializer
 */
class Serializer implements SerializerInterface
{
    /**
     * @param       $data
     * @param       $format
     * @param array $context
     *
     * @return bool|float|int|mixed|string
     */
    public function serialize($data, $format, array $context = [])
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new SerializerSymfony($normalizers, $encoders);

        $jsonContent = $serializer->serialize($data, $format, $context);

        return $jsonContent;
    }
}