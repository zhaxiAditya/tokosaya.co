<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('homepage');
        echo view('footer');
    }

    public function harga()
    {
        echo view('header');
        echo view('navbar');
        echo view('harga');
    }
    public function kebijakan()
    {
        echo view('header');
        echo view('navbar');
        echo view('kebijakan');
    }
    public function kontak()
    {
        echo view('header');
        echo view('navbar');
        echo view('kontak');
    }

    public function login(){
        return view('login');
    }

    public function regis(){
        return view('register');
    }


    public function about(){
        return view('welcome_message');
    }
}
