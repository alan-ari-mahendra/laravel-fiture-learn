<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\UserCreated;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // public function store() 
    // {
    //     try {
    //         DB::beginTransaction();
    
    //         $user = User::create([
    //             'name' => 'fahmi',
    //             'email' => 'fahmiazis@gmail.com',
    //             'password' => '221220aa'
    //         ]);

    //         UserCreated::dispatch($user);
    
    //         DB::commit(); 
    //     } catch (\Throwable $e) {
    //         throw $e;
    //         DB::rollback();
    //     }
      
    // }

    public function index()
    {
        $users = User::with('image')->get();
        return view('user', ['users' => $users]);
    }
}
