<?php

namespace App\Models;

use CodeIgniter\Model;

class DepModel extends Model
{
    protected $table = 'departement';
    protected $primaryKey = 'id_departement';
    protected $useTimestamps = true;
    protected $allowedFields = ['departement'];

    public function getProdi(){
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