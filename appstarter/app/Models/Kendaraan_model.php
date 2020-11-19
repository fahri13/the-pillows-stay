<?php namespace App\Models;

use CodeIgniter\Model;

class Kendaraan_model extends Model
{
    protected $table        = 'sewa_kendaraan';
 //   protected $DBGroup      = 'db_the_pillows_stay';
//    protected $useTimetamps = True;

//    protected $table      = 'users';
  //  protected $primaryKey = 'pemesanan_id';

//    protected $returnType     = 'array';
//    protected $useSoftDeletes = true;

    protected $allowedFields = ['kendaraan_nama', 'jumlah_kendaraan', 'waktu_sewa'];

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
            return $this->table('sewa_kendaraan')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('sewa_kendaraan')
                        ->where('kendaraan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

public function pesan($data)
{
    return $this->db->table($this->table)->insert($data);
} 
}
