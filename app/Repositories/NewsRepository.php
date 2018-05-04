<?php

namespace App\Repositories;


use App\Entities\News;
use App\Factories\NewsFactory;
use App\Models\News as NewsEloquent;

class NewsRepository extends AbstractEloquentRepository implements NewsRepositoryInterface
{
    protected $eloquent = NewsEloquent::class;
    /**
     * @var NewsFactory
     */
    private $newsFactory;

    /**
     * NewsRepository constructor.
     * @param NewsFactory $newsFactory
     */
    public function __construct(NewsFactory $newsFactory)
    {
        $this->newsFactory = $newsFactory;
    }

    public function all() : array
    {
        $result = $this->model()->all();
        if ($result) {
            return $this->newsFactory->makeNewsArrayFromArray($result->toArray());
        }
        return [];
    }

    public function find(int $id) : News
    {
        $data = $this->model()->findOrFail($id);

        $news = new News($data['title'], $data['body']);
        $news->setId($data['id']);

        return $group;
    }

    public function create(News $news)
    {
        return $this->model()->create(
            [
                'title' => $news->getTitle(),
                'body' => $news->getBody()
            ]
        );
    }

    public function update(News $news)
    {
        return $this->model()->find($news->getId())->update(
            [
                'title' => $news->getTitle(),
                'body' => $news->getBody()
            ]
        );
    }
}