<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function show($id=null) {
    //     return 'UserID ' . $id;
    // }

    public function show($id) {
        // $user = \DB::table('users')->where('id', $id)->first();
        $user = User::where('id', $id)->firstOrFail(); 
        // dd($user);

        if(!$user){
            abort(404);
        }

        return view('users', ['user' => $user]);
    }

    public function saudacao() {
        // return view('users', ['name'=>'José']); 
        return view('users')->with('name', 'Ignácio');
    }

}
