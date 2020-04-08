<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('hello',function(){
     return '<html><body><h1>Hello</h1><p>This is sample page</p></body></html>';
 });
Route::get('hello1/{msg}',function($msg)
{
    $html = <<< EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt;color:#999;}
</style>

<body>
    <h1> Hello </h1>
    <p>{$msg}</p>
</body>

</head>
</html>
EOF;

    return $html;
});

Route::get('hello2','HelloController@index');


Route::get('hello3','HelloController@index');
Route::get('hello3/other','HelloController@other');