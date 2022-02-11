<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id_member';
    protected $useTimestamps = true;
    protected $allowedFields = ['email','id_project'];
    
    
}
?>