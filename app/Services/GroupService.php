<?php

namespace App\Services;


use App\Entities\Group;
use App\Repositories\GroupRepositoryInterface;

class GroupService implements GroupServiceInterface
{
    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;

    /**
     * GroupService constructor.
     * @param GroupRepositoryInterface $groupRepository
     */
    public function __construct(GroupRepositoryInterface $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }

    public function all()
    {
        return $this->groupRepository->all();
    }

    public function find(int $id) : Group
    {
        return $this->groupRepository->find($id);
    }

    public function create(array $data)
    {
        $group = new Group($data['name']);

        return $this->groupRepository->create($group);
    }

    public function update(int $id, array $data)
    {
        $group = new Group($data['name']);
        $group->setId($id);

        return $this->groupRepository->update($group);
    }

    public function delete(int $id)
    {
        $this->groupRepository->delete($id);
    }

    public function getAllIdWithName() : array
    {
        return $this->groupRepository->getAllIdWithName();
    }
}