<?php 
namespace App\http\Controller;

use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller

{
    function index(){
        $users = User::all();
        return view('user',['users' => $users]);
    }
}


