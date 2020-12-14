<?php namespace App\Controllers;

class Profile extends BaseController
{

  public function index()
  {
    $data = ['title' => 'Profile'];
    return view('profile/index', $data);
  }

  public function akun()
  {
    $data = ['title' => 'Informasi Diri'];
    return view('profile/akun', $data);
  } 
  
  public function pesanan()
  {
    $data = ['title' => 'Detail Pesanan'];
    return view('profile/pesanan', $data);
  }
}


?>