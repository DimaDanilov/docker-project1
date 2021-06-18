<?php

declare(strict_types=1);

namespace App\Core\Pizzas\Factory;

use App\Core\Pizzas\Document\Pizza;

class PizzaFactory
{
    public function create(
        string $pizzaName,
        int $price,
        string $status


    ): Pizza {
        $pizza = new Pizza(
            $pizzaName,
            $price,
            $status
        );

        return $pizza;
    }
    public function update(
        Pizza $pizza = null,
        string $pizzaName,
        int $price,
        string $status
    ): Pizza {
        $pizza->setPizzaName($pizzaName);
        $pizza->setPrice($price);
        $pizza->setStatus($status);

        return $pizza;
    }
}
