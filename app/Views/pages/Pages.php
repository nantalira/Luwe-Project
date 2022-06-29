<?php


namespace App\Controllers;


class Pages extends BaseController
{
    protected $modelmakanan;
    protected $modelwarung;

    public function __construct()
    {
        helper('form');
        $this->modelmakanan = new \App\Models\ModelMakanan();
        $this->modelwarung = new \App\Models\ModelWarung();
    }

    public function index()
    {
        $keyword = ($this->request->getVar('keyword'));
        if ($keyword) {
            $makanan = $this->modelmakanan->like('caption', $keyword);
            $makanan = $this->modelmakanan->findAll();
        } else {
            $makanan = $this->modelmakanan->findAll();
        }

        $warung = $this->modelwarung->findAll();
        $data = [
            'title' => 'Luwe Home Page',
            'makanan' => $makanan,
            'warung' => $warung,
        ];
        return view('pages/home', $data);
    }
}
