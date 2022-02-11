<?php

namespace App\Controllers;

use App\Models\KonsModel;
use App\Models\LoginModel;
use App\Models\ProdiModel;


class Kaprodi extends BaseController
{
    protected $loginModel;
    protected $prodiModel;
    protected $konsModel;
    protected $googleAPI;
    public $level = array(
        1 => 'Super Admin',
        2 => 'Kepala Prodi',
        3 => 'Dosen Pembimbing',
        4 => 'Mahasiswa'
    );
    public function __construct()
    {
        session();
        $this->loginModel = new LoginModel();
        $this->prodiModel = new ProdiModel();
        $this->konsModel = new KonsModel();
    }
    public function index()
    {
        switch (session()->get('level')) {
            case 2:
                
                break;
            default:
            return redirect()->to('/login');
        }
        $raw = $this->loginModel->getId(session()->get('id'));
        $data = [
            'title' => 'Dashboard',
            'nama' => $raw['nama'],
            'gambar' => $raw['gambar']
        ];
        return view('mahasiswa/dashboard',$data);
    }
  
}
