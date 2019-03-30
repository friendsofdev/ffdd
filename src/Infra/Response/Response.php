<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 15:52
 */

namespace App\Infra\Response;

use App\Domain\Response\ResponseInterface;
use Symfony\Component\HttpFoundation\Response as ResponseSymfony;

/**
 * Class Response
 *
 * @package App\Infra\Response
 */
class Response implements ResponseInterface
{
    /**
     * @param null  $data
     * @param int   $status
     * @param array $headers
     *
     * @return mixed|ResponseSymfony
     */
    public function getResponse($data = null, int $status = 200, array $headers = [])
    {
        return new ResponseSymfony($data, $status, $headers);
    }

}