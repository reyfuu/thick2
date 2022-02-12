<?php

namespace App\Controllers;

use App\Models\ConsModel;
use App\Models\AccountModel;
use App\Models\DepModel;
use App\Models\ProModel;
use App\Models\MemberModel;


class Mahasiswa extends BaseController
{
    protected $loginModel;
    protected $depMOdel;
    protected $consModel;
    protected $proModel;
    protected $memModel;
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
        $this->memModel = new MemberModel();
    }
    public function index()
    {
        switch (session()->get('level')) {
            case 4:
                
                break;
            default:
                return redirect()->to('/login');
        }
        $raw = $this->loginModel->getId(session()->get('id'));
        $data = [
            'title' => 'Dashboard',
            'name' => $raw['name'],
            'picture' => $raw['picture']
        ];
        return view('mahasiswa/dashboard',$data);
    }
    public function regis()
    {   
        switch (session()->get('level')) {
            case 4:
                
                break;
            default:
                return redirect()->to('/login');
        }
        $raw = $this->loginModel->getId(session()->get('id'));
        $data = [
            'title' => 'Dashboard',
            'name' => $raw['name'],
            'picture' => $raw['picture'],
            'id' => $raw['email'],
            'lecturer' => $this->loginModel->getLecturer(),
            'student' => $this->loginModel->getStudent(),
            'status' => $this->proModel->cekHead($raw['email'])
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
            'end' => NULL,
            'status' => 0
        ]);
        $desc = $this->proModel->descCreate();
        if($this->request->getVar('member1') != ""){
            $this->memModel->insert([
                'email' => $this->request->getVar('member1'),
                'id_project' => $desc['id_project']
            ]);
        }
        if($this->request->getVar('member2') != ""){
            $this->memModel->insert([
                'email' => $this->request->getVar('member2'),
                'id_project' => $desc['id_project']
            ]);
        }
        $raw = $this->loginModel->getId('19340008');
        $data = [
            'title' => 'Dashboard',
            'name' => $raw['name'],
            'picture' => $raw['picture']
        ];
        return view('mahasiswa/dashboard',$data);
    }
    public function process(){
        $raw = $this->loginModel->getId(session()->get('id'));
        $data = [
            'title' => 'Dashboard',
            'name' => $raw['name'],
            'picture' => $raw['picture'],
            'id' => $raw['email'],
            'lecturer' => $this->loginModel->getLecturer(),
            'student' => $this->loginModel->getStudent(),
            'status' => $this->proModel->cekHead($raw['email'])
        ];
        return view('mahasiswa/process',$data);
    }

    
  
}
