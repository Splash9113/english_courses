<?php

namespace App\Factories;


use App\Entities\RequestContact;

class RequestContactFactory
{
    public function makeRequestContactArrayFromArray(array $requestContactArray) : array
    {
        $requestContactEntityArray = [];
        foreach ($requestContactArray as $requestContact) {
            $requestContactEntityArray = $this->makeRequestContactFromArray($requestContact);
        }
        return $requestContactEntityArray;
    }

    public function makeRequestContactFromArray(array $requestContactArray) : RequestContact
    {
        $requestContact = new RequestContact($requestContactArray['name'], $requestContactArray['email']);

        if (isset($requestContactArray['phone'])) {
            $requestContact->setPhone($requestContactArray['phone']);
        }
        if (isset($requestContactArray['message'])) {
            $requestContact->setMessage($requestContactArray['message']);
        }
        if (isset($requestContactArray['comment'])) {
            $requestContact->setComment($requestContactArray['comment']);
        }
        if (isset($requestContactArray['id'])) {
            $requestContact->setId($requestContactArray['id']) ;
        }

        return $requestContact;
    }
}