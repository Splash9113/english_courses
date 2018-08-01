<?php

namespace App\Repositories;

use App\Factories\RequestContactFactory;
use App\Models\RequestContact as RequestContactModel;
use App\Entities\RequestContact;

class RequestContactRepository extends AbstractEloquentRepository implements RequestContactRepositoryInterface
{
    protected $eloquent = RequestContactModel::class;
    /**
     * @var RequestContactFactory
     */
    private $requestContactFactory;

    /**
     * RequestContactRepository constructor.
     * @param RequestContactFactory $requestContactFactory
     */
    public function __construct(RequestContactFactory $requestContactFactory)
    {
        $this->requestContactFactory = $requestContactFactory;
    }

    public function find(int $id)
    {
        $data = $this->model()->findOrFail($id);

        return $this->requestContactFactory->makeRequestContactFromArray($data);
    }

    public function all(): array
    {
        $result = $this->model()->all();
        if ($result) {
            return $this->requestContactFactory->makeRequestContactArrayFromArray($result->toArray());
        }
        return [];
    }

    public function create(RequestContact $requestContact)
    {
        return $this->model()->create(
            [
                'name' => $requestContact->getName(),
                'email' => $requestContact->getEmail(),
                'phone' => $requestContact->getPhone(),
                'message' => $requestContact->getMessage()
            ]
        );
    }

    public function update(RequestContact $requestContact)
    {
        return $this->model()->find($requestContact->getId())->update(
            [
                'comment' => $requestContact->getComment()
            ]
        );
    }
}