<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// GET|HEAD          user ..................................................................... user.index
// POST            user ..................................................................... user.store
// GET|HEAD        user/create ............................................................ user.create
// GET|HEAD        user/{user} ................................................................ user.show
// PUT|PATCH       user/{user} ............................................................ user.update
// DELETE          user/{user} .......................................................... user.destroy
// GET|HEAD        user/{user}/edit ........................................................... user.edit


Route::resource('/user', UserController::class);
