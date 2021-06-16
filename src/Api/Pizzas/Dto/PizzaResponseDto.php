<?php

declare(strict_types=1);

namespace App\Api\Pizzas\Dto;


class PizzaResponseDto
{
    public ?string $id;

    public ?string $pizzaName;

    public ?int $price;

    public ?string $status;

//  public ?ContactResponseDto $contact;
}
