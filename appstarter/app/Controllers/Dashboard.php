<?php namespace App\Controllers;

class Dashboard extends BaseController
  {
    public function index()
    {
      $data = ['title' => 'Home'];
      return view('home/index', $data);
    }
    public function About()
    {
      $data = ['title' => 'About'];
      return view('about/index', $data);
    }
  }

 ?>
