<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Retorna Index logado
    public function index() {
        return view('index');
    }

    //Retorna ticket logado
    public function ticket() {
        return view('ticket');
    }

    //Retorna login
    public function login() {
        return view('login');
    }

    //Retorna about
    public function about() {
        return view('about');
    }

    //Retorna games
    public function games() {
        return view('games');
    }
}
