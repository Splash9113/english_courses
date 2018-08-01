<?php

namespace App\Services;


use App\Entities\RequestContact;
use App\Factories\RequestContactFactory;
use App\Repositories\RequestContactRepositoryInterface;

class RequestContactService implements RequestContactServiceInterface
{
    /**
     * @var RequestContactRepositoryInterface
     */
    private $requestContactRepository;
    /**
     * @var RequestContactFactory
     */
    private $requestContactFactory;

    /**
     * RequestContactService constructor.
     * @param RequestContactRepositoryInterface $requestContactRepository
     * @param RequestContactFactory $requestContactFactory
     */
    public function __construct(
        RequestContactRepositoryInterface $requestContactRepository,
        RequestContactFactory $requestContactFactory
    )
    {
        $this->requestContactRepository = $requestContactRepository;
        $this->requestContactFactory = $requestContactFactory;
    }

    public function all()
    {
        return $this->requestContactRepository->all();
    }

    public function create(array $data)
    {
        $requestContact = $this->requestContactFactory->makeRequestContactFromArray($data);

        return $this->requestContactRepository->create($requestContact);
    }

    public function update(int $id, array $data)
    {
        $requestContact = $this->requestContactFactory->makeRequestContactFromArray(array_merge($data, ['id' => $id]));

        return $this->requestContactRepository->update($requestContact);
    }

    public function delete(int $id)
    {
        $this->requestContactRepository->delete($id);
    }

    public function find(int $id): RequestContact
    {
        return $this->requestContactRepository->find($id);
    }
}