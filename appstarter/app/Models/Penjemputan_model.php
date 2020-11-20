<?php namespace App\Models;

use CodeIgniter\Model;

class Penjemputan_model extends Model
{
    protected $table        = 'sewa_penjemputan';
 //   protected $DBGroup      = 'db_the_pillows_stay';
//    protected $useTimetamps = True;

//    protected $table      = 'users';
  //  protected $primaryKey = 'pemesanan_id';

//    protected $returnType     = 'array';
//    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_tamu', 'jumlah_tamu', 'lokasi_penjemputan'];

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
            return $this->table('sewa_penjemputan')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('sewa_penjemputan')
                        ->where('penjemputan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

public function sewapenjemputan($data)
{
    return $this->db->table($this->table)->insert($data);
} 
}
