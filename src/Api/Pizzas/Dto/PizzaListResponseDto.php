<?php

declare(strict_types=1);

namespace App\Api\Pizzas\Dto;

class PizzaListResponseDto
{
    public array $data;

    public function __construct(PizzaResponseDto ... $data)
    {
        $this->data = $data;
    }
}
