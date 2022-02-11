<?php

namespace App\Models;

use CodeIgniter\Model;

class ProModel extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'id_project';
    protected $useTimestamps = true;
    protected $allowedFields = ['email_lecturer','email_head','name','type','start','end','status'];

    
    public function cekHead($id)
    {
        $count = $this->where(['email_head' => $id, 'status' => 0])->countAllResults();
        if($count == 2){
            return true;
        }else{
            return false;
        }
    }
    public function descCreate()
    {
        return $this->select('id_project')->orderBy('created_at','DESC')->first();
    }
    
}
?>