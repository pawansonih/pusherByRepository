<?php

use Illuminate\Support\Facades\Route;

Route::get('test-pusher', function(){
    return view('pusherbyrepository::test');
});
