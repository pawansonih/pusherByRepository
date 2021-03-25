<?php
namespace OspPawan\PusherByRepository;

use Illuminate\Support\ServiceProvider;

class PusherByRepositoryServiceProvider extends ServiceProvider{
    
    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','pusherbyrepository');

    }

    public function register(){

    }
}