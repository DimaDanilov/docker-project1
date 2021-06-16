<?php

declare(strict_types=1);

namespace App\Core\Pizzas\Document;

use App\Core\Common\Document\AbstractDocument;
use App\Core\User\Enum\Role;
use App\Core\User\Enum\UserStatus;
use App\Core\Pizzas\Repository\PizzaRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @MongoDB\Document(repositoryClass=PizzaRepository::class, collection="pizzas")
 */
class Pizza extends AbstractDocument
{
    /**
     * @MongoDB\Id
     */
    protected ?string $id = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $pizzaName = null;

    /**
     * @MongoDB\Field(type="int")
     */
    protected int $price;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $status = null;


    public function __construct(
        string $pizzaName,
        int $price,
        string $status
    ) {
        $this->pizzaName  = $pizzaName;
        $this->price = $price;
        $this->status = $status;
    }

    public function getPizzaName(): ?string
    {
        return $this->pizzaName;
    }

    public function setPizzaName(?string $pizzaName): void
    {
        $this->pizzaName = $pizzaName;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }


}
