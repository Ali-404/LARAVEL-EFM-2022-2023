<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;


Route::get("test", [TestController::class, "index"])->middleware(TestMiddleware::class . ":admin");

Route::resource("articles", ArticleController::class);


Route::put("/commentaire/update/{id}", [CommentairesController::class, "update"]);
Route::delete("/commentaire/destroy/{id}", [CommentairesController::class, "destroy"]);