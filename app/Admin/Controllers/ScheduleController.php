<?php

namespace App\Admin\Controllers;


use App\Factories\ScheduleViewFactory;
use App\Http\Requests\StoreSchedule;
use App\Http\Requests\UpdateSchedule;
use App\Services\ScheduleServiceInterface;

class ScheduleController extends BaseController
{

    /**
     * ScheduleController constructor.
     * @param ScheduleViewFactory $scheduleViewFactory
     * @param ScheduleServiceInterface $scheduleService
     */
    public function __construct(ScheduleViewFactory $scheduleViewFactory, ScheduleServiceInterface $scheduleService)
    {
        $this->viewFactory = $scheduleViewFactory;
        $this->service = $scheduleService;
    }

    public function store(StoreSchedule $request)
    {
        $this->service->create($request->all());
        return response()->saved();
    }

    public function update(int $id, UpdateSchedule $request)
    {
        $this->service->update($id, $request->all());
        return response()->updated();
    }
}