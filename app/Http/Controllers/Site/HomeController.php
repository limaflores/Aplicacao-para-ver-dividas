<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
            
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Treino;

class HomeController extends Controller
{
    //
    public function index(){
        $treinos = Treino::all();
        return view('home',compact('treinos'));
    }
}
