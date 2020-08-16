<?php

Route::get('/', function () {
    return view('welcome');
});

/* 
=============================================================
Aula 05 - Rotas
=============================================================
*/

// Route::get('user/{id}', function($id) {
//     return "Bem-vindo user " . $id;
// });

// Route::get('user/{name?}', function($name=null) {
//     return "Bem-vindo " . $name;
// });

/* 
=============================================================
Aula 06 - Rotas com controller
=============================================================
*/

Route::get('user/{id?}', 'UserController@show');

/* 
=============================================================
Aula 07 - Templates Blade - Passando dados
=============================================================
*/

// Route::get('/', function () {
    // Primeira forma de passar dados
    // return view('users', ['name'=>'José']); 

    //Segunda forma de passar dados
    // return view('users')->with('name', 'Ignácio');
// });

/* Passando dados com controller */

// Route::get('/', 'UserController@saudacao');

/* 
=============================================================
Aula 08 - 
=============================================================
*/






