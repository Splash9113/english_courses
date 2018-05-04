<?php

namespace App\Services;


use App\Entities\Schedule;
use App\Repositories\ScheduleRepositoryInterface;

class ScheduleService implements ScheduleServiceInterface
{
    /**
     * @var ScheduleRepositoryInterface
     */
    private $scheduleRepository;
    /**
     * @var GroupServiceInterface
     */
    private $groupService;

    /**
     * ScheduleService constructor.
     * @param ScheduleRepositoryInterface $scheduleRepository
     * @param GroupServiceInterface $groupService
     */
    public function __construct(ScheduleRepositoryInterface $scheduleRepository, GroupServiceInterface $groupService)
    {
        $this->scheduleRepository = $scheduleRepository;
        $this->groupService = $groupService;
    }

    public function all()
    {
        return $this->scheduleRepository->all();
    }

    public function find(int $id) : Schedule
    {
        return $this->scheduleRepository->find($id);
    }

    public function create(array $data)
    {
        $schedule = new Schedule($data['schedule']);
        if (isset($data['group_id'])) {
            $schedule->setGroup($this->groupService->find($data['group_id']));
        }

        return $this->scheduleRepository->create($schedule);
    }

    public function update(int $id, array $data)
    {
        $schedule = new Schedule($data['schedule']);
        if (isset($data['group_id'])) {
            $schedule->setGroup($this->groupService->find($data['group_id']));
        }
        $schedule->setId($id);

        return $this->scheduleRepository->update($schedule);
    }

    public function delete(int $id)
    {
        $this->scheduleRepository->delete($id);
    }
}