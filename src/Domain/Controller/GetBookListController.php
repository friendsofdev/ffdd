<?php
/**
 * Created by PhpStorm.
 * User: paolocastro
 * Date: 2019-03-30
 * Time: 15:08
 */

namespace App\Domain\Controller;

use App\Domain\Response\ResponseInterface;
use App\Domain\Serializer\SerializerInterface;
use App\Domain\Service\Provider\BookProvider;

/**
 * Interface GetListController
 *
 * @package App\Domain\Controller
 */
class GetBookListController
{
    /** @var BookProvider */
    private $bookProvider;

    /** @var ResponseInterface */
    private $response;

    /** @var SerializerInterface */
    private $serializer;

    /**
     * GetBookListController constructor.
     *
     * @param BookProvider        $bookProvider
     * @param ResponseInterface   $response
     * @param SerializerInterface $serializer
     */
    public function __construct(
        BookProvider $bookProvider,
        ResponseInterface $response,
        SerializerInterface $serializer
    )
    {
        $this->bookProvider = $bookProvider;
        $this->response = $response;
        $this->serializer = $serializer;
    }

    /**
     * @return object
     */
    public function getBooksByTitle()
    {
        $books = $this->bookProvider->getBooksByTitle();
        $booksSerialize = $this->serializer->serialize($books, 'json');
        return $this->response->getResponse($booksSerialize);
    }
}