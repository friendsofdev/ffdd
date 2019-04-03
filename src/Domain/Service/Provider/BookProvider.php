<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 15:12
 */

namespace App\Domain\Service\Provider;


use App\Domain\DataProvider\BookDataProviderInterface;
use App\Domain\Repository\BookRepositoryInterface;

/**
 * Class BookProvider
 *
 * @package App\Domain\Service\Provider
 */
class BookProvider
{
    /**
     * @var BookDataProviderInterface
     */
    private $bookDataProvider;
    /**
     * @var BookRepositoryInterface
     */
    private $bookRepository;

    /**
     * BookProvider constructor.
     *
     * @param BookDataProviderInterface $bookDataProvider
     * @param BookRepositoryInterface   $bookRepository
     */
    public function __construct(
        BookDataProviderInterface $bookDataProvider,
        BookRepositoryInterface $bookRepository
    )
    {
        $this->bookDataProvider = $bookDataProvider;
        $this->bookRepository = $bookRepository;
    }

    /**
     * @return \App\Domain\Model\Book[]|iterable
     */
    public function getBooksByTitle()
    {
        $title = htmlentities($this->bookDataProvider->getBookTitle() ?? '');

        return $this->bookRepository->findByTitle($title);
    }

}