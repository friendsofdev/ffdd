<?php

namespace App\Domain\Repository;

use App\Domain\Model\Book;

/**
 * Interface BookRepositoryInterface
 *
 * @package App\Domain\Repository
 */
interface BookRepositoryInterface
{
    /**
     * @return Book[] Returns an array of Book objects by title
     *
     * @param string $title
     *
     * @return iterable
     */
    public function findByTitle(string $title) : iterable;
}
