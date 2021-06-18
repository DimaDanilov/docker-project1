<?php

declare(strict_types=1);

namespace App\Api\Pizzas\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class PizzaUpdateRequestDto
{
    /**
     * @Assert\Length(max=30, min=3)
     */
    public ?string $pizzaName = null;

    public ?int $price;

    public ?string $status = null;

}
