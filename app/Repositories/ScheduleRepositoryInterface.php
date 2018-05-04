<?php

namespace App\Repositories;


use App\Entities\Schedule;

interface ScheduleRepositoryInterface
{
    public function find(int $id);

    public function all() : array;

    public function create(Schedule $schedule);

    public function update(Schedule $schedule);

    public function delete(int $id);
}