<?php

namespace App\Models;

use CodeIgniter\Model;

class ProModel extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'id_project';
    protected $useTimestamps = true;
    protected $allowedFields = ['email_lecturer','email_head','name','type','start','end'];

    
    public function cekHead($id){
        $count = $this->where(['email_head' => $id, 'end' => NULL])->countAllResults();
        if($count == 2){
            return true;
        }else{
            return false;
        }
    }
}
?>