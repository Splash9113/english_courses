<?php

namespace App\Admin\Controllers;


use App\Factories\NewsViewFactory;
use App\Http\Requests\StoreNews;
use App\Http\Requests\UpdateNews;
use App\Services\NewsServiceInterface;

class NewsController extends BaseController
{

    /**
     * NewsController constructor.
     * @param NewsViewFactory $newsViewFactory
     * @param NewsServiceInterface $newsService
     */
    public function __construct(NewsViewFactory $newsViewFactory, NewsServiceInterface $newsService)
    {
        $this->viewFactory = $newsViewFactory;
        $this->service = $newsService;
    }
    
    public function store(StoreNews $request)
    {
        $this->service->create($request->all());
        return response()->saved();
    }
    
    public function update(int $id, UpdateNews $request)
    {
        $this->service->update($id, $request->all());
        return response()->updated();
    }
}