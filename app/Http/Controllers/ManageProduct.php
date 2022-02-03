<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageProduct extends Controller
{
    public function __invoke(Request $request)  {
        $user =  Auth::user();
        return view('File.copyindex', [
            'user' => $user
        ]);
    }
}
