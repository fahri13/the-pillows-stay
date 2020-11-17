<?php namespace App\Models;

use CodeIgniter\Model;

class Kamar_model extends Model
{
    protected $table        = 'pemesanan_kamar';
//    protected $DBGroup      = 'db_the_pillows_stay';
//    protected $useTimetamps = True;

//    protected $table      = 'users';
  //  protected $primaryKey = 'pemesanan_id';

//    protected $returnType     = 'array';
//    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama', 'check_in', 'check_out', 'tipe_kamar'];

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
            return $this->table('pemesanan_kamar')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('pemesanan_kamar')
                        ->where('pemesanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

public function pesan($data)
{
    return $this->db->table($this->table)->insert($data);
} 
}
