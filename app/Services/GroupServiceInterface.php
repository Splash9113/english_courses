<?php

namespace App\Services;


use App\Entities\Group;

interface GroupServiceInterface extends BaseCrudServiceInterface
{
    public function find(int $id) : Group;
    public function getAllIdWithName() : array;
}