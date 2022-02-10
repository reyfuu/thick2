<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'email';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_account', 'id_concentration', 'name', 'competence', 'email', 'contact', 'picture', 'level'];

    public function getEmail($email = ''){
        return $this->where(['email' => $email])->first();
    }
    public function getId($id = ''){
        return $this->where(['id_akun' => $id])->first();
    }
    public function cekEmail($email = ''){
        return $this->where(['email' => $email])->countAllResults();;
    }
    public function cekId($id){
        return $this->where(['id' => $id])->countAllResults();
    }
}
?>