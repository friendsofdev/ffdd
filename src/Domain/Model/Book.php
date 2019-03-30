<?php
/**
 * Created by PhpStorm.
 * User: paolo castro
 * Date: 2019-03-30
 * Time: 14:44
 */

namespace App\Domain\Model;


/**
 * Class Book
 *
 * @package App\Infra\Entity
 */
class Book
{
    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $ref;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef(string $ref): void
    {
        $this->ref = $ref;
    }
}