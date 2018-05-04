<?php

namespace App\Repositories;

use App\Factories\GroupFactory;
use App\Models\Group as GroupEloquent;
use App\Entities\Group;

class GroupRepository extends AbstractEloquentRepository implements GroupRepositoryInterface
{
    protected $eloquent = GroupEloquent::class;
    /**
     * @var GroupFactory
     */
    private $groupFactory;

    /**
     * GroupRepository constructor.
     * @param GroupFactory $groupFactory
     */
    public function __construct(GroupFactory $groupFactory)
    {
        $this->groupFactory = $groupFactory;
    }

    public function all() : array
    {
        $result = $this->model()->all();
        if ($result) {
            return $this->groupFactory->makeGroupArrayFromArray($result->toArray());
        }
        return [];
    }

    public function find(int $id) : Group
    {
        $data = $this->model()->findOrFail($id);

        $group = new Group($data['name']);
        $group->setId($data['id']);

        return $group;
    }

    public function create(Group $group)
    {
        return $this->model()->create(
            [
                'name' => $group->getName()
            ]
        );
    }

    public function update(Group $group)
    {
        return $this->model()->find($group->getId())->update(
            [
                'name' => $group->getName()
            ]
        );
    }

    public function getAllIdWithName() : array
    {
        $result = $this->model()->all();
        if ($result) {
            return $this->groupFactory->makeArrayIdAndNameFromEloquent($result);
        }
        return [];
    }
}