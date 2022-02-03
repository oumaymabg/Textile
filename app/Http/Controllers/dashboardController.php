<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class dashboardController extends Controller
{
   

public function __invoke(Request $request) {
    Auth::logout();
    return redirect('/');
}

public function dashboard()
    {
        $user =  Auth::user();
        return view('File.copyindex', [
            'user' => $user
        ]);
    }


}
