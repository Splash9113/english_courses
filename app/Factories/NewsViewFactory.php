<?php

namespace App\Factories;


use App\Models\News;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class NewsViewFactory implements ViewFactoryInterface
{

    public function getIndex()
    {
        return Admin::content(function (Content $content) {

            $content->header('News');

            $content->body($this->grid());
        });
    }

    public function getEdit(int $id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('News');
            $content->description('Edit');

            $content->body($this->form()->edit($id));
        });
    }

    public function getCreate()
    {
        return Admin::content(function (Content $content) {

            $content->header('News');
            $content->description('Create');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(News::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('Title')->sortable();

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(News::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('title', 'Title');
            $form->editor('body', 'Body');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}