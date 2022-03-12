<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Inertia::share([
            "flash" => function () {
                return [
                    "success" => session("success")
                ];
            },
            "currentRouteName" =>  function () {
                return request()->route()->getName();
            },
            "errors" => function () {
                if (! request()->session()->has('errors')) {
                    return (object) [];
                }
 
                return (object) collect(request()->session()->get('errors')->getBags())->map(function ($bag) {
                    return (object) collect($bag->messages())->map(function ($errors) {
                        return $errors[0];
                    })->toArray();
                })->pipe(function ($bags) {
                    if ($bags->has('default') && request()->header('x-inertia-error-bag')) {
                        return [request()->header('x-inertia-error-bag') => $bags->get('default')];
                    } elseif ($bags->has('default')) {
                        return $bags->get('default');
                    } else {
                        return $bags->toArray();
                    }
                });
            }
        ]);
    }
}