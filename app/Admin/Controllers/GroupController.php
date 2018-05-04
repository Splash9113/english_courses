<?php

namespace App\Admin\Controllers;


use App\Factories\GroupViewFactory;
use App\Http\Requests\StoreGroup;
use App\Http\Requests\UpdateGroup;
use App\Services\GroupServiceInterface;

class GroupController extends BaseController
{

    /**
     * GroupController constructor.
     * @param GroupViewFactory $groupViewFactory
     * @param GroupServiceInterface $groupService
     */
    public function __construct(GroupViewFactory $groupViewFactory, GroupServiceInterface $groupService)
    {
        $this->viewFactory = $groupViewFactory;
        $this->service = $groupService;
    }

    public function store(StoreGroup $request)
    {
        $this->service->create($request->all());
        return response()->saved();
    }

    public function update(int $id, UpdateGroup $request)
    {
        $this->service->update($id, $request->all());
        return response()->updated();
    }
}