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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//  Route::group(['middleware' => 'admin'], function () {
    Route::delete('admin/manageSupervisor/{id}','AdminController@destroy');
    Route::post('admin/manageSupervisor/addSuperv','AdminController@addUser');
    Route::post('admin/manageSupervisor/editSuperv','AdminController@editUser');

    Route::delete('admin/manageProfessor/{id}','AdminController@destroy');
    Route::post('admin/manageProfessor/addProf','AdminController@addUser');
    Route::post('admin/manageProfessor/editProf','AdminController@editUser');

    Route::post('admin/timetable/save','AdminController@saveTimetable');
// });

Route::post('savePresence','PresenceArchiveController@savePresence');
