<?php

declare(strict_types=1);

namespace App\Api\Pizzas\Factory;

use App\Api\Pizzas\Dto\PizzaResponseDto;
use App\Core\Pizzas\Document\Pizza;
use Symfony\Component\HttpFoundation\Response;

class ResponseFactory
{
    /**
     * @param Pizza $pizza
     *
     * @return PizzaResponseDto
     */
    public function createPizzaResponse(Pizza $pizza): PizzaResponseDto
    {
        $dto = new PizzaResponseDto();

        $dto->id = $pizza->getId();
        $dto->pizzaName = $pizza->getPizzaName();
        $dto->price = $pizza->getPrice();
        $dto->status = $pizza->getStatus();


        return $dto;
    }
}
