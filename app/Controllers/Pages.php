<?php

namespace App\Controllers;

class Pages extends BaseController {
    protected $modelmakanan;
    protected $modelwarung;
     
    public function __construct() {
        $this->modelmakanan = new \App\Models\ModelMakanan();
        $this->modelwarung = new \App\Models\ModelWarung();
    }

    public function index()
    {
        $makanan = $this->modelmakanan->findAll();
        $warung = $this->modelwarung->findAll();

        $data = [
            'title' => 'Luwe Home Page',
            'makanan' => $makanan,
            'warung' => $warung
        ];


        return view('pages/home', $data);
    }
}
