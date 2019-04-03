<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 15:49
 */

namespace App\Domain\Response;

/**
 * Interface ResponseInterface
 *
 * @package App\Domain\Response
 */
interface ResponseInterface
{
    /**
     * @param null  $data
     * @param int   $status
     * @param array $headers
     *
     * @return mixed
     */
    public function getResponse($data = null, int $status = 200, array $headers = []);
}