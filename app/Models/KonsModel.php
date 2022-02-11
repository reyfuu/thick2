<?php

namespace App\Models;

use CodeIgniter\Model;

class KonsModel extends Model
{
    protected $table = 'konsentrasi';
    protected $primaryKey = 'id_konsentrasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_prodi', 'konsentrasi'];

    public function getKons(){
        return $this->findAll();
    }
    public function getSlug($slug = false){
        return $this->where(['slug' => $slug])->first();
    }
    public function getId($id = false){
        return $this->where(['id' => $id])->first();
    }
    public function CekId($id){
        return $this->where(['id' => $id])->countAllResults();
    }
}
?>