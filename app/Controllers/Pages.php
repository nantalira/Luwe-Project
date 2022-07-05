<?php


namespace App\Controllers;


class Pages extends BaseController
{
    protected $modelmakanan;
    protected $modelwarung;
    protected $modeldetail;

    public function __construct()
    {
        helper('form');
        $this->modelmakanan = new \App\Models\ModelMakanan();
        $this->modelwarung = new \App\Models\ModelWarung();
        $this->modeldetail = new \App\Models\ModelDetail();
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
    public function detail($slug)
    {
        $data = [
            'warung' => $this->modeldetail->getwarung($slug)
        ];
        if (empty($data['warung'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Coin ' . $slug . ' Tidak Ditemukan.');
        };
        return view('pages/detail', $data);
    }
}
