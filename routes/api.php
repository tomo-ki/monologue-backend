<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

Route::apiResource('/tweet', TweetController::class);
