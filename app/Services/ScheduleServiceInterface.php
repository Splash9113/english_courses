<?php

namespace App\Services;


use App\Entities\Schedule;

interface ScheduleServiceInterface extends BaseCrudServiceInterface
{
    public function find(int $id) : Schedule;
}