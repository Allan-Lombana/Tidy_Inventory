<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function __invoke()
    {
        return "Qué se cuece perritos";
    }
}
