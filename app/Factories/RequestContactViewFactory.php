<?php

namespace App\Factories;

use App\Models\RequestContact;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class RequestContactViewFactory  implements ViewFactoryInterface
{
    public function getIndex()
    {
        return Admin::content(function (Content $content) {

            $content->header('Requests Contact');

            $content->body($this->grid());
        });
    }

    public function getEdit(int $id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Request Contact');
            $content->description('Edit');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(RequestContact::class, function (Grid $grid) {
            $grid->disableCreateButton();

            $grid->id('ID')->sortable();
            $grid->name('Name')->sortable();
            $grid->email('Email')->sortable();

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
        return Admin::form(RequestContact::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->display('name', 'Name');
            $form->display('email', 'Email');
            $form->display('phone', 'Phone');
            $form->display('message', 'Message');

            $form->textarea('comment', 'Comment');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    public function getCreate()
    {
        // disabled
    }
}