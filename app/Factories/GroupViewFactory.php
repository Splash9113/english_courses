<?php

namespace App\Factories;

use App\Models\Group;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class GroupViewFactory implements ViewFactoryInterface
{

    public function getIndex()
    {
        return Admin::content(function (Content $content) {

            $content->header('Groups');

            $content->body($this->grid());
        });
    }

    public function getEdit(int $id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Group');
            $content->description('Edit');

            $content->body($this->form()->edit($id));
        });
    }

    public function getCreate()
    {
        return Admin::content(function (Content $content) {

            $content->header('Group');
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
        return Admin::grid(Group::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('Name')->sortable();

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
        return Admin::form(Group::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', 'Name');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}