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
        return $this->where(['id_account' => $id])->first();
    }
    public function cekEmail($email = ''){
        return $this->where(['email' => $email])->countAllResults();
    }
    public function cekId($id){
        return $this->where(['id_account' => $id])->countAllResults();
    }
    public function getLecturer(){
        return $this->where(['level' => 3])->find();
    }
    public function getStudent(){
        $db = \Config\Database::connect();
        $data = $this->where(['level' => 4])->get()->getResultArray();
        // return $memberActive;
        foreach($data as $k => $d){
                $memberCount = $db->query("SELECT m.email FROM member m, project p WHERE m.email = '$d[email]' AND m.id_project = p.id_project AND p.status = 0")->getNumRows();
                if($memberCount == 1){      
                    unset($data[$k]);
                }
        }
        return $data;
    }
}
?>