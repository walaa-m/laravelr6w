<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function ford()
    {
        return 'Ford Cars in USA';
    }

    public function tesla()
    {
        return 'Tesla Cars in USA';
    }

    public function mercedes()
    {
        return 'Mercedes Cars in Germany';
    }

    public function audi()
    {
        return 'Audi Cars in Germany';
    }

    public function volkswagen()
    {
        return 'Volkswagen Cars in Germany';
    }
}
