<?php

namespace App\Controllers;


class HomeController extends Controller
{


    public function index()
    {

        return $this->view('home', 'Pages', ['data' => 'Teste data']);
    }
}
