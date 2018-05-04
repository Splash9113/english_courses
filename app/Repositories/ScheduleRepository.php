<?php

namespace App\Repositories;


use App\Factories\ScheduleFactory;
use App\Models\Schedule as ScheduleEloquent;
use App\Entities\Schedule;
use App\Services\GroupServiceInterface;

class ScheduleRepository extends AbstractEloquentRepository implements ScheduleRepositoryInterface
{
    protected $eloquent = ScheduleEloquent::class;
    /**
     * @var GroupServiceInterface
     */
    private $groupService;
    /**
     * @var ScheduleFactory
     */
    private $scheduleFactory;

    /**
     * ScheduleRepository constructor.
     * @param GroupServiceInterface $groupService
     * @param ScheduleFactory $scheduleFactory
     */
    public function __construct(GroupServiceInterface $groupService, ScheduleFactory $scheduleFactory)
    {
        $this->groupService = $groupService;
        $this->scheduleFactory = $scheduleFactory;
    }

    public function all() : array
    {
        $result = $this->model()->all();
        if ($result) {
            return $this->scheduleFactory->makeScheduleArrayFromArray($result->toArray());
        }
        return [];
    }
    
    public function find(int $id) : Schedule
    {
        $data = $this->model()->findOrFail($id);

        $schedule = new Schedule($data['schedule']);
        $schedule->setGroup($this->groupService->find($data['group_id']));
        $schedule->setId($data['id']);

        return $schedule;
    }

    public function create(Schedule $schedule)
    {
        return $this->model()->create(
            [
                'schedule' => $schedule->getSchedule(),
                'group_id' => $schedule->getGroupId()
            ]
        );
    }

    public function update(Schedule $schedule)
    {
        return $this->model()->find($schedule->getId())->update(
            [
                'schedule' => $schedule->getSchedule(),
                'group_id' => $schedule->getGroupId()
            ]
        );
    }
}