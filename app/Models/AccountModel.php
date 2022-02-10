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
        return $this->where(['email' => $email])->countAllResults();;
    }
    public function cekId($id){
        return $this->where(['id_account' => $id])->countAllResults();
    }
    public function getLecturer(){
        return $this->where(['level' => 3])->find();
    }
    public function getStudent(){
        $memberActive = $this->join('member','member.email=account.email')->join('project', 'project.id_project=member.id_project')->where(['level' => 4, 'end' => NULL])->get()->getResultArray();
        $data = $this->where(['level' => 4])->get()->getResultArray();
        foreach($data as $d){
                if(empty($memberActive)){
                    $array[] = $d;
                }else{        
                foreach($memberActive as $m){
                    if($d['id_account'] != $m['id_account']){
                        $array[] = $d;
                    }
                }
            }
        }
        return $array;
    }
}
?>