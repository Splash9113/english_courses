<?php

namespace App\Repositories;


use App\Entities\RequestContact;

interface RequestContactRepositoryInterface
{
    public function find(int $id);

    public function all() : array;

    public function create(RequestContact $requestContact);

    public function update(RequestContact $requestContact);

    public function delete(int $id);
}