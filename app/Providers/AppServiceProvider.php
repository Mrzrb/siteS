<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->bootView();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function bootView(){
        View::composer(env('tplSN').'.layouts.footer', function($view){
            $fls = \App\Models\FriendlyLink\FriendlyLinkService::getFriendlyLinks();

            $view->with('friend_links', $fls);
        });

        View::composer(env('tplSN').'.layouts.top_nav',function($view){
            $view->with('top_categoryies', \App\Models\Category\CategoryService::getTopNav());
        });
    }
}
