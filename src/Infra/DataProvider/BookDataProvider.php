<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 15:15
 */

namespace App\Infra\DataProvider;


use App\Domain\DataProvider\BookDataProviderInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class BookDataProvider
 *
 * @package App\Infra\DataProvider
 */
class BookDataProvider implements BookDataProviderInterface
{
    /**
     * @var RequestStack
     */
    private $requestStack;

    /**
     * BookDataProvider constructor.
     *
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @return string
     */
    public function getBookTitle() : ?string
    {
        return $this->requestStack->getCurrentRequest()->query->get('title');
    }
}