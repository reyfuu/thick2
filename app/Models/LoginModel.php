<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id_akun';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_akun', 'id_konsentrasi', 'nama', 'kompetensi', 'email', 'kontak', 'gambar', 'level'];

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