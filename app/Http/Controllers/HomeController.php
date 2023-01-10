<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    //cherhcer user infos
    public function homePage(){
        $user = User::find(1);
        return view('home', $user);
    }
}
