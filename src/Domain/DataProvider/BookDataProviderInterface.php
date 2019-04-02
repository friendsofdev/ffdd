<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 15:18
 */

namespace App\Domain\DataProvider;


interface BookDataProviderInterface
{
    public function getBookTitle() : ?string;
}