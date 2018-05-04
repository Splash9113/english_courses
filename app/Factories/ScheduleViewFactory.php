<?php

namespace App\Factories;

use App\Models\Schedule;
use App\Services\GroupServiceInterface;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class ScheduleViewFactory implements ViewFactoryInterface
{
    /**
     * @var GroupServiceInterface
     */
    private $groupService;

    /**
     * ScheduleViewFactory constructor.
     * @param GroupServiceInterface $groupService
     */
    public function __construct(GroupServiceInterface $groupService)
    {
        $this->groupService = $groupService;
    }

    public function getIndex()
    {
        return Admin::content(function (Content $content) {

            $content->header('Schedules');

            $content->body($this->grid());
        });
    }

    public function getEdit(int $id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Schedule');
            $content->description('Edit');

            $content->body($this->form()->edit($id));
        });
    }

    public function getCreate()
    {
        return Admin::content(function (Content $content) {

            $content->header('Schedule');
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
        return Admin::grid(Schedule::class, function (Grid $grid) {
            $grid->id('ID')->sortable();

            $groupService = $this->groupService;
            $grid->group_id('Group')->display(
                function ($groupId) use ($groupService) {
                    return $groupService->find($groupId)->getName();
                }
            );

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
        return Admin::form(Schedule::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->textarea('schedule', 'Schedule'); //todo add wysiwyg

            $groups = $this->groupService->getAllIdWithName();
            $form->select('group_id', 'Group')->options($groups);

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}