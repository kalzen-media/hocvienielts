<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;
use Carbon\Carbon;
class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        
        return view('home.index');
    }
    public function view(Request $request)
    {
        
    }
}
