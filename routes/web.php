<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;
// use Spatie\Crypto\Rsa\KeyPair;
// use Spatie\Crypto\Rsa\PrivateKey;
// use Spatie\Crypto\Rsa\PublicKey;
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
    return view('welcome');
});
Route::get('/todo',[TodoListController::class,'index'])->name('index');
Route::post('/todo',[TodoListController::class,'store'])->name('store');
Route::delete('/todo/{todoList:id}',[TodoListController::class,'destroy'])->name('destroy');

// Route::get('/demo', function () {
//     echo "Hello , I'm Ruchika Sharma";
// });
// Route::post('/test', function () {
//     echo "Testing the route"; 
// });

// Route::get('/login/{name}/{id?}',function($name,$id=null){
// //   echo $name . " ";
// //   echo $id;
//  $data=compact('name','id');
// //  print_r($data);
//  return view('login')->with($data);
// });
// Route::get('/key-pair',function(){
//     [$privateKeyString, $publicKeyString] = (new KeyPair())->generate();
//     $data='my data';
//     // $privateKey='';
//     $privateKeyObject = PrivateKey::fromString($privateKeyString);
//     $encryptedData = $privateKeyObject->encrypt($data);
//     $publicKeyObject = PublicKey::fromString($publicKeyString);
//     dd( $decryptedString = $publicKeyObject->decrypt($encryptedData));
//     // dd($private_json_encode = json_encode($privateKeyString));
//     // dd( $public_json_encode = json_encode($publicKeyString));
//     // $data = 'my secret data';

// });