<?php

namespace App\Repositories;


use App\Entities\News;

interface NewsRepositoryInterface
{
    public function find(int $id);

    public function all() : array;

    public function create(News $news);

    public function update(News $news);

    public function delete(int $id);
}