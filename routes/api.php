<?php

use Illuminate\Http\Request;
// use Symfony\Component\Routing\Annotation\Route;
use App\Http\Resources\RoleCollection;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Role;
use App\Http\Resources\Role as RoleResource;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//角色
Route::get('/roles','RoleController@index');
Route::get('/roles/{role}','RoleController@show');
Route::post('/roles','RoleController@store');
Route::patch('/roles/{role}','RoleController@update');
Route::delete('/roles/{role}','RoleController@destroy');

//权限
Route::get('/permissions','PermissionController@index');
Route::get('/permissions/{permission}','PermissionController@show');
Route::post('/permissions','PermissionController@store');
Route::patch('/permissions/{permission}','PermissionController@update');
Route::delete('/permissions/{permission}','PermissionController@destroy');

//用户
Route::get('/users','UserController@index');
Route::get('/users/{user}','UserController@show');
Route::post('/users','UserController@store');
Route::patch('/users/{user}','UserController@update');
Route::delete('/users/{user}','UserController@destroy');
