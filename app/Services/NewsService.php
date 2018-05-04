<?php

namespace App\Services;


use App\Entities\News;
use App\Repositories\NewsRepositoryInterface;

class NewsService implements NewsServiceInterface
{
    /**
     * @var NewsRepositoryInterface
     */
    private $newsRepository;

    /**
     * NewsService constructor.
     * @param NewsRepositoryInterface $newsRepository
     */
    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function all()
    {
        return $this->newsRepository->all();
    }

    public function find(int $id) : News
    {
        return $this->newsRepository->find($id);
    }

    public function create(array $data)
    {
        $news = new News($data['title'], $data['body']);

        return $this->newsRepository->create($news);
    }

    public function update(int $id, array $data)
    {
        $news = new News($data['title'], $data['body']);
        $news->setId($id);

        return $this->newsRepository->update($news);
    }

    public function delete(int $id)
    {
        $this->newsRepository->delete($id);
    }
}