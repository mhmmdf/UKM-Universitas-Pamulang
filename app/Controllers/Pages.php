<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function gallery()
    {
        return view('pages/gallery');
    }

    public function pendaftaran()
    {
        return view('pages/pendaftaran');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
