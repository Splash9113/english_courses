<?php

namespace App\Factories;


use App\Entities\News;

class NewsFactory
{
    public function makeNewsArrayFromArray(array $news) : array
    {
        $newsArray = [];
        foreach ($news as $newsItem) {
            $newsArray[] = new News(
                $newsItem['title'],
                $newsItem['body']
            );
        }
        return $newsArray;
    }
}