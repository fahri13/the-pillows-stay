<?php namespace App\Controllers;

  use App\Models\Kamar_model;
  use App\Models\Tiket_model;

class Service extends BaseController
  {
    protected $pemesanankamar;
    protected $pemesanantiket;

    public function __construct()
    {
      $this->pemesanankamar = new Kamar_model();
      $this->pemesanantiket = new Tiket_model();
    
    }

    public function index()
    {
      $data = ['title' => 'Service'];
      return view('service/index', $data);
    }
    public function sewakamar()
    {
      $pkamar = $this->pemesanankamar->findAll();
      $data = ['title' => 'Reservasi Kamar', 'kamar' => $pkamar];

      return view('service/sewakamar', $data);
    }

    public function pemesananKamar()
    {

      $this->pemesanankamar->pesankamar([
        'nama' => $this->request->getVar('nama'),
        'check_in' => $this->request->getVar('check_in'),
        'check_out' => $this->request->getVar('check_out'),
        'tipe_kamar' => $this->request->getVar('tipe_kamar')
      ]);
      return redirect()->to('/home');
    }
    
    //--Pemesanan-Tiket-Kereta-Api
    public function pesantiket()
    {
      $tiket = $this->pemesanantiket->findAll();
      $data = ['title' => 'Pemesanan Tiket', 'tiket' => $tiket];

     $data = ['title' => 'Tiket Kereta'];
      return view('service/pesantiket', $data);
    }

    public function pemesananTiket()
    {
      $this->pemesanantiket->belitiket([
        'nama_penumpang' => $this->request->getVar('nama_penumpang'),
        'stasiun_awal' => $this->request->getVar('stasiun_awal'),
        'stasiun_tujuan' => $this->request->getVar('stasiun_tujuan'),
        'tanggal_berangkat' => $this->request->getVar('tanggal_berangkat'),
        'jumlah_penumpang' => $this->request->getVar('jumlah_penumpang'),
        'kelas_kereta' => $this->request->getVar('kelas_kereta')
      ]);
      return redirect()->to('/home');
    }

    //--Jemput-Tamu
    public function sewajemput()
    {
      $data = ['title' => 'Sewa Penjemputan'];
      return view('fasilitas/sewajemput', $data); 
    }
   
  }
