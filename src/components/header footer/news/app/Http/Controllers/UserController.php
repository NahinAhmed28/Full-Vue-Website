<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function index()
   {
    

    // DB::insert('insert into users (name, email, password)
    // values (?,?,?)', [
    //     'sarthak', 'sarthak@bitfumes.com', 'password',
    //     ]);


    $users = DB::select('select * from users');
    return dd($users);

    return view ('home');
    
   }
}
