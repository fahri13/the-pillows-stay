<?php namespace App\Models;

use CodeIgniter\Model;

class Tiket_model extends Model
{
    protected $table        = 'sewa_penjemputan';
 //   protected $DBGroup      = 'db_the_pillows_stay';
//    protected $useTimetamps = True;

//    protected $table      = 'users';
  //  protected $primaryKey = 'pemesanan_id';

//    protected $returnType     = 'array';
//    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_tamu', 'stasiun_awal', 'stasiun_tujuan', 'tanggal_berangkat', 'jumlah_penumpang', 'kelas_kereta'];

//    protected $useTimestamps = false;
//    protected $createdField  = 'created_at';
//    protected $updatedField  = 'updated_at';
//    protected $deletedField  = 'deleted_at';

//    protected $validationRules    = [];
//    protected $validationMessages = [];
//    protected $skipValidation     = false;

public function getProduct($id = false)
    {
        if($id === false){
            return $this->table('pemesanan_tiket')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('pemesanan_tiket')
                        ->where('tiket_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

public function belitiket($data)
{
    return $this->db->table($this->table)->insert($data);
} 
}
