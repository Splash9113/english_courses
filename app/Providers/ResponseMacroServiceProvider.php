<?php

namespace App\Providers;

use App\Support\Admin\Form;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro(
            'updated',
            function () {
                admin_toastr(trans('admin.update_succeeded'));
                $url = Form::getResourceUrl(-1);
                return redirect($url);
            }
        );

        Response::macro(
            'updatedAndStay',
            function () {
                admin_toastr(trans('admin.update_succeeded'));
                $url = Form::getResourceUrl(0);
                return redirect($url);
            }
        );

        Response::macro(
            'saved',
            function () {
                admin_toastr(trans('admin.save_succeeded'));
                $url = Form::getResourceUrl(0);
                return redirect($url);
            }
        );

        Response::macro(
            'deleted',
            function ($value) {
                if ($value) {
                    return response()->json(
                        [
                        'status' => true,
                        'message' => trans('admin.delete_succeeded'),
                        ]
                    );
                }
                return response()->json(
                    [
                    'status' => false,
                    'message' => trans('admin.delete_failed'),
                    ]
                );
            }
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
