<?php

declare(strict_types=1);

namespace App\Api\Pizzas\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class PizzaCreateRequestDto
{
    /**
     * @Assert\Length(max=60, min=2)
     */

    public ?string $pizzaName = null;
    public int $price;
    public ?string $status = null;
    
}
