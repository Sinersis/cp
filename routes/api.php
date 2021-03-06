<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/searchComparePostsCount', 'PostController@searchByComparePostsCounts');
Route::get('/searchComparePosts', 'PostController@searchByComparePosts');
Route::get('/searchDepartmentByTags', 'PostController@searchDepartmentByTags');

Route::get('/allPosts', 'PostController@allPosts');
