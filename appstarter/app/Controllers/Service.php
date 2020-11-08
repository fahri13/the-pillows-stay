<?php namespace App\Controllers;

class Service extends BaseController
  {
    public function index()
    {
      $data = ['title' => 'Service'];
      return view('service/index', $data);
    }
  }
