<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestContact;
use App\Services\GroupServiceInterface;
use App\Services\NewsServiceInterface;
use App\Services\RequestContactServiceInterface;
use App\Services\ScheduleServiceInterface;

class MainController extends Controller
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
     * @var RequestContactServiceInterface
     */
    private $requestContactService;

    /**
     * HomeController constructor.
     * @param NewsServiceInterface $newsService
     * @param GroupServiceInterface $groupService
     * @param ScheduleServiceInterface $scheduleService
     * @param RequestContactServiceInterface $requestContactService
     */
    public function __construct(
        NewsServiceInterface $newsService,
        GroupServiceInterface $groupService,
        ScheduleServiceInterface $scheduleService,
        RequestContactServiceInterface $requestContactService
    )
    {
        $this->newsService = $newsService;
        $this->groupService = $groupService;
        $this->scheduleService = $scheduleService;
        $this->requestContactService = $requestContactService;
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

    public function requestContact(StoreRequestContact $requestContact)
    {
        $this->requestContactService->create($requestContact->all());
        return response('success');
    }
}
