<?php

namespace App\Services;


use App\Entities\News;

interface NewsServiceInterface extends BaseCrudServiceInterface
{
    public function find(int $id) : News;
}