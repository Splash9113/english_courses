<?php

namespace App\Admin\Controllers;


use App\Factories\RequestContactViewFactory;
use App\Http\Requests\UpdateRequestContact;
use App\Services\RequestContactServiceInterface;

class RequestContactController extends BaseController
{
    /**
     * RequestContactController constructor.
     * @param RequestContactViewFactory $requestContactViewFactory
     * @param RequestContactServiceInterface $requestContactService
     */
    public function __construct(
        RequestContactViewFactory $requestContactViewFactory,
        RequestContactServiceInterface $requestContactService
    )
    {
        $this->viewFactory = $requestContactViewFactory;
        $this->service = $requestContactService;
    }

    public function update(int $id, UpdateRequestContact $request)
    {
        $this->service->update($id, $request->all());
        return response()->updated();
    }
}