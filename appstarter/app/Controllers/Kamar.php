<?php namespace App\Controllers;

use App\Models\Kamar_model;

class Kamar extends BaseController
{
  protected $sewakamar;
  public function __construct()
  {
    $this->sewakamar = new Kamar_model();
  }

  public function index()
  {
    $kamar = $this->sewakamar->findAll();
    $data = ['title' => 'Booking', 'kamar' => $kamar];
  }
}
