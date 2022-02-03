<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;


class loginController extends Controller
{
    public function __invoke()
{
    return view('connect');
}


}