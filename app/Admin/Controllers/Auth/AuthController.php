<?php

namespace App\Admin\Controllers\Auth;

use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    /**
     * User setting page.
     *
     * @return mixed
     */
    public function getSetting()
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('admin.user_setting'));
            $form = $this->settingForm();
            $form->tools(
                function (Form\Tools $tools) {
                    $tools->disableBackButton();
                    $tools->disableListButton();
                }
            );
            $content->body($form->edit(Admin::user()->id));
        });
    }

    /**
     * Update user setting.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function putSetting()
    {
        return $this->settingForm()->update(Admin::user()->id);
    }

    /**
     * Model-form for user setting.
     *
     * @return Form
     */
    protected function settingForm()
    {
        return Administrator::form(function (Form $form) {
            $form->display('username', trans('admin.username'));
            $form->text('name', trans('admin.name'))->rules('required');
            $form->password('password', trans('admin.password'))->rules('confirmed|required');
            $form->password('password_confirmation', trans('admin.password_confirmation'))->rules('required')
                ->default(function ($form) {
                    return $form->model()->password;
                });

            $form->setAction(admin_base_path('auth/setting'));

            $form->ignore(['password_confirmation']);

            $form->saving(function (Form $form) {
                if ($form->password && $form->model()->password != $form->password) {
                    $form->password = bcrypt($form->password);
                }
            });

            $form->saved(function () {
                admin_toastr(trans('admin.update_succeeded'));

                return redirect(admin_base_path('auth/setting'));
            });
        });
    }
}
