<?php namespace App\Controllers;

  use App\Models\Kamar_model;

class Service extends BaseController
  {
    protected $pesankamar;

    public function __construct()
    {
      $this->pesankamar = new Kamar_model();
    }

    public function index()
    {
      $data = ['title' => 'Service'];
      return view('service/index', $data);
    }
    public function booking()
    {
      $pkamar = $this->pesankamar->findAll();
      $data = ['title' => 'Booking Kamar', 'kamar' => $pkamar];

      return view('service/booking', $data);
    }

    public function pemesanan()
    {

      $this->pesankamar->pesan([
        'nama' => $this->request->getVar('nama'),
        'check_in' => $this->request->getVar('check_in'),
        'check_out' => $this->request->getVar('check_out'),
        'tipe_kamar' => $this->request->getVar('tipe_kamar')
      ]);
      return redirect()->to('/home');
    } 

   
  }
