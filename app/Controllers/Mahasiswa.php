<?php

namespace App\Controllers;

use App\Models\ConsModel;
use App\Models\AccountModel;
use App\Models\DepModel;
use App\Models\ProModel;


class Mahasiswa extends BaseController
{
    protected $loginModel;
    protected $depMOdel;
    protected $consModel;
    protected $proModel;
    public $level = array(
        1 => 'Super Admin',
        2 => 'Kepala Prodi',
        3 => 'Dosen Pembimbing',
        4 => 'Mahasiswa'
    );
    public function __construct()
    {
        session();
        $this->loginModel = new AccountModel();
        $this->depMOdel = new DepModel();
        $this->consModel = new ConsModel();
        $this->proModel = new ProModel();
    }
    public function index()
    {
        // switch (session()->get('level')) {
        //     case 4:
                
        //         break;
        //     default:
        //         return redirect()->to('/login');
        // }
        $raw = $this->loginModel->getId('19340008');
        $data = [
            'title' => 'Dashboard',
            'name' => $raw['name'],
            'picture' => $raw['picture']
        ];
        return view('mahasiswa/dashboard',$data);
    }
    public function regis()
    {
        $raw = $this->loginModel->getId('19340008');
        $data = [
            'title' => 'Dashboard',
            'name' => $raw['name'],
            'picture' => $raw['picture'],
            'id' => '19340008',
            'lecturer' => $this->loginModel->getLecturer(),
            'student' => $this->loginModel->getStudent(),
            'status' => $this->proModel->cekHead('19340008')
        ];
        return view('mahasiswa/regis',$data);
    }

    public function regisProject()
    {
        $this->proModel->insert([
            'name' => $this->request->getVar('name'),
            'id_lecturer' => $this->request->getVar('lecturer'),
            'id_head' => $this->request->getVar('head'),
            'type' => $this->request->getVar('type'),
            'start' => date('Y-m-d'),
            'end' => NULL
        
        ]);
        echo $this->request->getVar('member1')."<br>";
        echo $this->request->getVar('member2')."<br>";
    }
    
  
}
