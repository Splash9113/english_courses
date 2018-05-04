<?php

namespace App\Entities;


class Schedule
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $schedule;
    /**
     * @var Group
     */
    private $group;
    /**
     * Schedule constructor.
     * @param string $schedule
     */
    public function __construct(string $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->group ? $this->group->getId() : 0;
    }

    /**
     * @return string
     */
    public function getGroupName() : string
    {
        return $this->group ? $this->group->getName() : '';
    }

    /**
     * @return Group
     */
    public function getGroup() : Group
    {
        return $this->group;
    }

    /**
     * @param Group $group
     */
    public function setGroup(Group $group)
    {
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

}