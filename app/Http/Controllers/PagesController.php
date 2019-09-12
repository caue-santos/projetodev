<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public static function index()
    {    
        return view('home');
    }

    /*
    * rotas da aplicação estão cadastradas em app/routes/web.php
    */
}
