<?php

namespace App\Services;


use App\Entities\RequestContact;

interface RequestContactServiceInterface extends BaseCrudServiceInterface
{
    public function find(int $id) : RequestContact;
}