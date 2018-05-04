<?php

namespace App\Factories;


use App\Entities\Schedule;
use App\Services\GroupServiceInterface;

class ScheduleFactory
{
    /**
     * @var GroupServiceInterface
     */
    private $groupService;

    /**
     * ScheduleFactory constructor.
     * @param GroupServiceInterface $groupService
     */
    public function __construct(GroupServiceInterface $groupService)
    {
        $this->groupService = $groupService;
    }

    public function makeScheduleArrayFromArray(array $schedules) : array
    {
        $schedulesArray = [];
        foreach ($schedules as $schedule) {
            $scheduleEntity = new Schedule(
                $schedule['schedule']
            );
            $scheduleEntity->setGroup($this->groupService->find($schedule['group_id']));
            $schedulesArray[] = $scheduleEntity;
        }
        return $schedulesArray;
    }
}