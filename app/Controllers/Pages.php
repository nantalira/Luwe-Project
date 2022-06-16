<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Luwe Home Page'
        ];
        return view('pages/home', $data);
    }
}
