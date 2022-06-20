<?php

namespace App\Controllers;

class Contact extends BaseController
{
    protected $modelmakanan;
    protected $modelwarung;

    public function __construct()
    {
        $this->modelmakanan = new \App\Models\ModelMakanan();
        $this->modelwarung = new \App\Models\ModelWarung();
    }

    public function index()
    {

        return view('contact');
    }
}
