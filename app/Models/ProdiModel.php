<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    protected $useTimestamps = true;
    protected $allowedFields = ['prodi'];

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