<?php namespace App\Controllers;

class Fasilitas extends BaseController
{

  public function index()
  {
    $data = ['title' => 'Fasilitas'];
    return view('fasilitas/index', $data);
  }
}


?>