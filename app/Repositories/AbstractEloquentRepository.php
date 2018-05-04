<?php

namespace App\Repositories;

use \Exception;

abstract class AbstractEloquentRepository
{
    protected $eloquent;

    protected function model()
    {
        if (!$this->eloquent) {
            throw new Exception('No eloquent set for ' . get_class($this));
        }
        return new $this->eloquent;
    }

//    public function find(int $id)
//    {
//        return $this->model()->findOrFail($id);
//    }

//    public function all() : array
//    {
//        $result = $this->model()->all();
//        if ($result) {
//            return $result->toArray();
//        }
//        return [];
//    }

//    public function create(array $data)
//    {
//        return $this->model()->create($data);
//    }
//
//    public function update(int $id, array $data)
//    {
//        return $this->model()->find($id)->update($data);
//    }

    public function delete(int $id)
    {
        return $this->model()->destroy($id);
    }
}
