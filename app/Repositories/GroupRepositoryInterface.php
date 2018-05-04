<?php

namespace App\Repositories;


use App\Entities\Group;

interface GroupRepositoryInterface
{
    public function find(int $id) : Group;

    public function all() : array;

    public function create(Group $group);

    public function update(Group $group);

    public function delete(int $id);

    public function getAllIdWithName() : array;
}