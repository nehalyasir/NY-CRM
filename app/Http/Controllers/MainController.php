<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MainController extends Controller
{
    public function index()
    {
        // Saare menus retrieve karain
        $menus = Menu::all();

        // View ko pass karain
        return view('navbar.nav', compact('menus'));
    }


    public function Register()
    {
        return view('loginRegister.loginRegister');
    }
}
