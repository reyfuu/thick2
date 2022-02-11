<?php

namespace App\Controllers;
use App\Models\ConsModel;
use App\Models\AccountModel;
use App\Models\DepModel;


class Admin extends BaseController
{
    protected $loginModel;
    protected $prodiModel;
    protected $konsModel;
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
        $this->depModel = new DepModel();
        $this->consModel = new ConsModel();
    }
    public function index()
    {
        // switch (session()->get('level')) {
        //     case 1:
                
        //         break;
        //     default:
        //     return redirect()->to('/login');
        // }
    $raw = $this->loginModel->getId('1'/*session()->get('id')*/);
        $data = [
            'title' => 'Dashboard',
            'name' => $raw['name'],
            'picture' => $raw['picture']
        ];
        return view('admin/dashboard',$data);
    }

    public function account()
    {
        // switch (session()->get('level')) {
        //     case 1:
                
        //         break;
        //     default:
        //         return redirect()->to('/login');
        // }
        dd($this->loginModel->getLevel());
        // $raw = $this->loginModel->getId('1'/*session()->get('id')*/);
        // $data = [
        //     'title' => 'Account',
        //     'name' => $raw['name'],
        //     'picture' => $raw['picture'],
        //     'account' => $this->loginModel->getLevel()
        // ];
        // return view('admin/account',$data);
    }
    public function prodi()
    {
        switch (session()->get('level')) {
            case 1:
                
                break;
            default:
                return redirect()->to('/login');
        }
        $raw = $this->loginModel->getId(session()->get('id'));
        $data = [
            'title' => 'Prodi',
            'nama' => $raw['nama'],
            'gambar' => $raw['gambar']
        ];
        return view('admin/prodi',$data);
    }
  
}
