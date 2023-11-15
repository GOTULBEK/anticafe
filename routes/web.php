<?php

use App\Http\Controllers\UsersController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\UserRequest;
use App\Models\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('front');
});
Route::resource('users', UsersController::class);
// Route::resources(["Users"=>UsersController::class]);
// Route::prefix('users')->group(function () {
//     Route::get('/', [UsersController::class, 'index']);
//     Route::post('/', [UsersController::class, 'store']);
//     Route::get('/{id}', [UsersController::class, 'show']);
//     Route::put('/{id}', [UsersController::class, 'update']);
//     Route::delete('/{id}', [UsersController::class, 'destroy']);
// });
Route::post("/savePerson", function(UserRequest $request){
    Users::create($request->all());
}
);