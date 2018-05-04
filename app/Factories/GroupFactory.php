<?php

namespace App\Factories;


use App\Entities\Group;
use Illuminate\Database\Eloquent\Collection;

class GroupFactory
{
    public function makeArrayIdAndNameFromEloquent(Collection $data) : array
    {
        $topicCategories = [];
        foreach ($data as $item) {
            $topicCategories[$item->id] = $item->name;
        }
        return $topicCategories;
    }

    public function makeGroupArrayFromArray(array $groups) : array
    {
        $groupsArray = [];
        foreach ($groups as $group) {
            $groupsArray[] = new Group(
                $group['name']
            );
        }
        return $groupsArray;
    }
}