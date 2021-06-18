<?php

declare(strict_types=1);

namespace App\Core\Pizzas\Service;

use App\Api\Pizzas\Dto\PizzaCreateRequestDto;
use App\Api\Pizzas\Dto\PizzaUpdateRequestDto;
use App\Core\Pizzas\Document\Pizza;
use App\Core\Pizzas\Factory\PizzaFactory;
use App\Core\Pizzas\Repository\PizzaRepository;
use Psr\Log\LoggerInterface;

class PizzaService
{
    /**
     * @var PizzaRepository
     */
    private PizzaRepository $pizzaRepository;

    /**
     * @var PizzaFactory
     */
    private PizzaFactory $pizzaFactory;

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    public function __construct(PizzaRepository $pizzaRepository, PizzaFactory $pizzaFactory, LoggerInterface $logger)
    {
        $this->pizzaRepository = $pizzaRepository;
        $this->pizzaFactory    = $pizzaFactory;
        $this->logger         = $logger;
    }

    public function findOneBy(array $criteria): ?Pizza
    {
        return $this->pizzaRepository->findOneBy($criteria);
    }

    public function updatePizza(Pizza $pizza, PizzaUpdateRequestDto $requestDto): Pizza
    {
        $result = $this->pizzaFactory->update(
            $pizza,
            $requestDto->pizzaName,
            $requestDto->price,
            $requestDto->status
        );

        $result = $this->pizzaRepository->save($result);

        $this->logger->info('Pizza updated', [
            'id' => $pizza->getId(),
            'pizzaName' => $pizza->getPizzaName(),
            'price' => $pizza->getPrice(),
            'status' => $pizza->getStatus()

        ]);

        return $result;
    }

    public function deletePizza(Pizza $pizza)
    {
        $this->logger->info('Pizza deleted', [
            'DELETE_pizza' => $pizza->getId()
        ]);
        $this->pizzaRepository->remove($pizza);
    }

    public function createPizza(PizzaCreateRequestDto $requestDto): Pizza
    {
        $pizza = $this->pizzaFactory->create(
            $requestDto->pizzaName,
            $requestDto->price,
            $requestDto->status,
        );

        $pizza = $this->pizzaRepository->save($pizza);

        $this->logger->info('Pizza created', [
            'id' => $pizza->getId(),
            'pizzaName' => $pizza->getPizzaName(),
            'price' => $pizza->getPrice(),
            'status' => $pizza->getStatus()
        ]);



        return $pizza;
    }
}
