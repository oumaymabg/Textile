<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;



class contactController extends Controller
{
    public function __invoke()
{
    return view('contact');
}


}
