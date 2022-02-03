<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ; 
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function __invoke()
    {
            $Users = User::all();
            $user =  Auth::user();
            return view ('File.ClientList', [
                'Users' => $Users,
                'user' => $user
            ]);
   
}
}