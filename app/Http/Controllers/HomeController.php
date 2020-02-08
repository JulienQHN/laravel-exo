<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $contacts = contact::all();
        return view ('home');
        /* TODO Récupérer tout les utilisateurs, et renvoyer la view "home.blade.php avec les utilisateurs" */
    }
}



