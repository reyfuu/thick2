<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsModel extends Model
{
    protected $table = 'concentration';
    protected $primaryKey = 'id_concentration';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_departement', 'concentration'];

    public function getKons(){
        return $this->findAll();
    }
    public function getId($id = false){
        return $this->where(['id' => $id])->first();
    }
    public function CekId($id){
        return $this->where(['id' => $id])->countAllResults();
    }
}
?>