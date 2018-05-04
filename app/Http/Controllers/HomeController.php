<?php

namespace App\Http\Controllers;

use App\Services\GroupServiceInterface;
use App\Services\NewsServiceInterface;
use App\Services\ScheduleServiceInterface;

class HomeController extends Controller
{
    /**
     * @var NewsServiceInterface
     */
    private $newsService;
    /**
     * @var GroupServiceInterface
     */
    private $groupService;
    /**
     * @var ScheduleServiceInterface
     */
    private $scheduleService;

    /**
     * HomeController constructor.
     * @param NewsServiceInterface $newsService
     * @param GroupServiceInterface $groupService
     * @param ScheduleServiceInterface $scheduleService
     */
    public function __construct(
        NewsServiceInterface $newsService,
        GroupServiceInterface $groupService,
        ScheduleServiceInterface $scheduleService
    )
    {
        $this->newsService = $newsService;
        $this->groupService = $groupService;
        $this->scheduleService = $scheduleService;
    }

    public function index()
    {
        return view('index',
            [
                'news' => $this->newsService->all(),
                'groups' => $this->groupService->all(),
                'schedules' => $this->scheduleService->all()
            ]
        );
    }
}
