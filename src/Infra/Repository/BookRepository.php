<?php

namespace App\Infra\Repository;

use App\Domain\Model\Book;
use App\Domain\Repository\BookRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends ServiceEntityRepository implements BookRepositoryInterface
{
    /**
     * BookRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Book::class);
    }

    /**
     * @return Book[] Returns an array of Book objects by title
     *
     * @param string $title
     *
     * @return iterable
     */
    public function findByTitle(string $title) : iterable
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.title LIKE :title')
            ->setParameter('title', $title . '%')
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
}
