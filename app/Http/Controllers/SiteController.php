<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public $name = "Joao Miguel da Silva";
    public $subjects = ["materia1", "materia2", "materia3"];

    public function index()
    {



        return view('home', ['name' => $this->name, 'subjects' => $this->subjects]);
    }
}
