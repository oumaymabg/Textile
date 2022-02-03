<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;

class signupController extends Controller
{
    public function __invoke()
{
    return view('signup');
}


}