<?php

namespace App\Controllers;

class Contact extends BaseController
{
    protected $modelmakanan;
    protected $modelwarung;
    protected $modelrequest;

    public function __construct()
    {
        $this->modelmakanan = new \App\Models\ModelMakanan();
        $this->modelwarung = new \App\Models\ModelWarung();
        $this->modelreq = new \App\Models\ModelRequest();
    }

    public function cont()
    {

        return view('contact');
    }

    public function save()
    {
        //get images
        $images = $this->request->getFile('img');
        $images->move('assets/images');
        $images = $images->getName();
        //save to database
        $this->modelreq->create([
            'nama' => $this->request->getPost('nama'),
            'menu' => $this->request->getPost('menu'),
            'caption' => $this->request->getPost('caption'),
            'icon' => $images
        ]);
        //redirect
        //flash data
        session()->setFlashdata('pesan', 'Request Berhasil Dikirim');
        return redirect()->to('/contact');
    }
}
