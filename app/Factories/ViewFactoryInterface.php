<?php

namespace App\Factories;

interface ViewFactoryInterface
{
    public function getIndex();
    public function getEdit(int $id);
    public function getCreate();
}
