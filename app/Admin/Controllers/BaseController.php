<?php

namespace App\Admin\Controllers;

use App\Factories\ViewFactoryInterface;
use App\Services\BaseCrudServiceInterface;
use App\Http\Controllers\Controller;

use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;


class BaseController extends Controller
{

    /**
     * @var BaseCrudServiceInterface
     */
    protected $service;
    /**
     * @var ViewFactoryInterface
     */
    protected $viewFactory;

    /**
     * @return Content
     */
    public function index()
    {
        return $this->viewFactory->getIndex();
    }

    /**
     * @param $id
     *
     * @return Content
     */
    public function edit($id)
    {
        return $this->viewFactory->getEdit($id);
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $employer = $this->service->find($id);

        return $this->viewFactory->getShow($employer);
    }

//    /**
//     * @param         $id
//     * @param Request $request
//     *
//     * @return mixed
//     * @throws ValidationException
//     */
//    public function update($id, Request $request)
//    {
//        $this->service->update($id, $request->all());
//
//        return response()->updated();
//    }

    /**
     * @return Content
     */
    public function create()
    {
        return $this->viewFactory->getCreate();
    }

//    /**
//     * @param Request $request
//     *
//     * @return mixed
//     */
//    public function store(Request $request)
//    {
//        $this->service->create($request->all());
//
//        return response()->saved();
//    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        return response()->deleted($this->service->delete($id));
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        return $this->viewFactory->getGrid();
    }
}
