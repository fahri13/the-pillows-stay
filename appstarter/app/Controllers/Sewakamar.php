<?php namespace App\Controllers;

use App\Models\Model_SewaKamar;

class SewaKamar extends BaseController
{
  protected $sewakamar;
  public function __construct()
  {

        $this->sewakamar = new Model_SewaKamar();

  }
	public function index()
	{
    $kamar = $this->sewakamar->findAll();

    $data = [ 'title' => 'Sewa Kamar', 'kamar' => $kamar ];

    // dd($kamar);

    return view('sewakamar/index', $data);
	}

	//--------------------------------------------------------------------

}
