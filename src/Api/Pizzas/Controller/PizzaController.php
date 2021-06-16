<?php

declare(strict_types=1);

namespace App\Api\Pizzas\Controller;

#use App\Api\User\Dto\ContactResponseDto;
use App\Api\Pizzas\Dto\PizzaCreateRequestDto;
use App\Api\Pizzas\Dto\PizzaListResponseDto;
use App\Api\Pizzas\Dto\PizzaResponseDto;
use App\Api\Pizzas\Dto\PizzaUpdateRequestDto;
#use App\Api\User\Dto\ValidationExampleRequestDto;
use App\Core\Common\Dto\ValidationFailedResponse;
#use App\Core\User\Document\Contact;
use App\Core\Pizzas\Document\Pizza;
use App\Core\User\Enum\Permission;
#use App\Core\User\Enum\Role;
#use App\Core\User\Enum\RoleHumanReadable;
#use App\Core\User\Repository\ContactRepository;
use App\Core\Pizzas\Repository\PizzaRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * @Route("/pizzas")
 */
class PizzaController extends AbstractController
{
    /**
     * @Route(path="/{id<%app.mongo_id_regexp%>}", methods={"GET"})
     *
     * @IsGranted(Permission::PIZZA_SHOW)
     *
     * @ParamConverter("pizza")
     *
     * @Rest\View()
     *
     * @param Pizza|null $pizza
     *
     * @return PizzaResponseDto
     */
    public function show(Pizza $pizza = null)
    {
        if (!$pizza) {
            throw $this->createNotFoundException('Pizza not found');
        }

        return $this->createPizzaResponse($pizza);
    }

    /**
     * @Route(path="", methods={"GET"})
     * @IsGranted(Permission::PIZZA_INDEX)
     * @Rest\View()
     *
     * @return PizzaListResponseDto|ValidationFailedResponse
     */
    public function index(
        Request $request,
        PizzaRepository $pizzaRepository
    ): PizzaListResponseDto {
        $page     = (int)$request->get('page');
        $quantity = (int)$request->get('slice');

        $pizzas = $pizzaRepository->findBy([], [], $quantity, $quantity * ($page - 1));

        return new PizzaListResponseDto(
            ... array_map(
                    function (Pizza $pizza) {
                        return $this->createPizzaResponse($pizza);
                    },
                    $pizzas
                )
        );
    }

    /**
     * @Route(path="", methods={"POST"})
     * @IsGranted(Permission::PIZZA_CREATE)
     * @ParamConverter("requestDto", converter="fos_rest.request_body")
     *
     * @Rest\View(statusCode=201)
     *
     * @param PizzaCreateRequestDto $requestDto
     * @param ConstraintViolationListInterface $validationErrors
     * @param PizzaRepository $pizzaRepository
     *
     * @return PizzaResponseDto|ValidationFailedResponse|Response
     */
    public function create(
        PizzaCreateRequestDto $requestDto,
        ConstraintViolationListInterface $validationErrors,
        PizzaRepository $pizzaRepository
    ) {
        if ($validationErrors->count() > 0) {
            return new ValidationFailedResponse($validationErrors);
        }

        if ($pizza = $pizzaRepository->findOneBy(['pizzaName' => $requestDto->pizzaName])) {
            return new Response('Pizza already exists', Response::HTTP_BAD_REQUEST);
        }

        $pizza = new Pizza(
            $requestDto->pizzaName,
            $requestDto->price,
            $requestDto->status
        );
//        $pizza->setFirstName($requestDto->firstName);
//        $pizza->setLastName($requestDto->lastName);

        $pizzaRepository->save($pizza);

        return $this->createPizzaResponse($pizza);
    }

    /**
     * @Route(path="/{id<%app.mongo_id_regexp%>}", methods={"PUT"})
     * @IsGranted(Permission::PIZZA_UPDATE)
     * @ParamConverter("pizza")
     * @ParamConverter("requestDto", converter="fos_rest.request_body")
     *
     * @Rest\View()
     *
     * @param PizzaUpdateRequestDto $requestDto
     * @param ConstraintViolationListInterface $validationErrors
     * @param PizzaRepository $pizzaRepository
     *
     * @return PizzaResponseDto|ValidationFailedResponse|Response
     */
    public function update(
        Pizza $pizza = null,
        PizzaUpdateRequestDto $requestDto,
        ConstraintViolationListInterface $validationErrors,
        PizzaRepository $pizzaRepository
    ) {
        if (!$pizza) {
            throw $this->createNotFoundException('Pizza not found');
        }

        if ($validationErrors->count() > 0) {
            return new ValidationFailedResponse($validationErrors);
        }

        $pizza->setPizzaName($requestDto->pizzaName);
        $pizza->setPrice($requestDto->price);
        $pizza->setStatus($requestDto->status);

        $pizzaRepository->save($pizza);

        return $this->createPizzaResponse($pizza);
    }

    /**
     * @Route(path="/{id<%app.mongo_id_regexp%>}", methods={"DELETE"})
     * @IsGranted(Permission::PIZZA_DELETE)
     * @ParamConverter("pizza")
     *
     * @Rest\View()
     *
     * @param Pizza|null      $pizza
     * @param PizzaRepository $pizzaRepository
     *
     * @return PizzaResponseDto|ValidationFailedResponse
     */
    public function delete(
        pizzaRepository $pizzaRepository,
        Pizza $pizza = null
    ) {
        if (!$pizza) {
            throw $this->createNotFoundException('Pizza not found');
        }

        $pizzaRepository->remove($pizza);
    }


    /**
     * @param Pizza $pizza
     *
     * @return PizzaResponseDto
     */
    private function createPizzaResponse(Pizza $pizza): PizzaResponseDto
    {
        $dto = new PizzaResponseDto();

        $dto->id = $pizza->getId();
        $dto->pizzaName = $pizza->getPizzaName();
        $dto->price = $pizza->getPrice();
        $dto->status = $pizza->getStatus();

        return $dto;
    }
}
