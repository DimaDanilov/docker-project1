<?php

declare(strict_types=1);

namespace App\Core\Pizzas\Repository;

use App\Core\Common\Repository\AbstractRepository;
use App\Core\Pizzas\Document\Pizza;
use Doctrine\ODM\MongoDB\LockException;
use Doctrine\ODM\MongoDB\Mapping\MappingException;

/**
 * @method Pizza save(Pizza $pizza)
 * @method Pizza|null find(string $id)
 * @method Pizza|null findOneBy(array $criteria)
 * @method Pizza getOne(string $id)
 */
class PizzaRepository extends AbstractRepository
{
    public function getDocumentClassName(): string
    {
        return Pizza::class;
    }

    /**
     * @throws LockException
     * @throws MappingException
     */
    public function getPizzaById(string $id): ?Pizza
    {
        return $this->find($id);
    }
}
