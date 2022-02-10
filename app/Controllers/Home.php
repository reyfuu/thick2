<?php

namespace App\Controllers;
use App\Models\ConsModel;
use App\Models\AccountModel;
use App\Models\DepModel;
use CodeIgniter\Controller;
use Google_Service_Oauth2; 


class Home extends BaseController
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
       
        require_once APPPATH. 'Libraries/vendor/autoload.php';
        session();
        $this->loginModel = new AccountModel();
        $this->depModel = new DepModel();
        $this->consModel = new ConsModel();
        $this->googleAPI = new \Google_Client();
        $this->googleAPI->setClientId('774409238361-8hv321i1e7d8ptib2md8osh3epvrsbnl.apps.googleusercontent.com');
        $this->googleAPI->setClientSecret('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');
        $this->googleAPI->setRedirectUri('http://localhost/THICK/public/index.php/login');
        $this->googleAPI->addScope('email');
        $this->googleAPI->addScope('profile');

    }
    public function index()
    {
        switch (session()->get('level')) {
            case 1:
                return redirect()->to('/admin');
                break;
            // case 2:
                
            //     return redirect()->to('/kaprodi');
            //     break;
            case 3:
                return redirect()->to('/dosen');
                break;
            case 4:
                return redirect()->to('/mahasiswa');
                break;
            default:
            return redirect()->to('/login');
          }
    }
    public function keluar()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
    public function register()
    {
        $this->loginModel->insert([
            'id_account' => $this->request->getVar('id_account'),
            'id_concentration' => $this->request->getVar('concentration'),
            'name' => $this->request->getVar('name'),
            'competence' => $this->request->getVar('competence'),
            'email' => $this->request->getVar('email'),
            'contact' => $this->request->getVar('contact'),
            'picture' => $this->request->getVar('picture'),
            'level' => $this->request->getVar('level')
        
        ]);
        // session()->set([
        //     'id' => $this->request->getVar('id_account'),
        //     'name' => $this->request->getVar('name'),
        //     'level' => $this->request->getVar('level')
        // ]);
        return redirect()->to('/');
    }
    public function registration()
    {
        $account = session()->getFlashdata('account');
        //  cek data apakah sudah ada?
         $cek = $this->loginModel->cekEmail($account['email']);
         if($cek == 0)
         {
             if($account['hd'] == 'ukdc.ac.id')
             {
                 $level = 3;
             }else{
                 $level = 4;
             }

             $data = [
                'title' => 'Daftar',
                'dep' => $this->depModel->getProdi(),
                'cons' => $this->consModel->getKons(),
                'akun' => $account,
                'level' => $level
            ];
             return view('home/register',$data);
         }else{
             $raw = $this->loginModel->getEmail($account['email']);
             session()->set([
                'id' => $raw['id_akun'],
                'name' => $raw['nama'],
                'level' => $raw['level']
            ]);
            return redirect()->to('/');
         }

       
    }
    public function login()
    {
        $code = $this->request->getVar('code');
        if (isset($code))
        {
            // $this->loginGoogle($code);
            $account  = $this->loginGoogle($code);
            session()->setFlashdata('account', $account);
            return redirect()->to('/registration');
        }else{
            $data = [
                'title' => 'Login',
                'google' => $this->googleAPI->createAuthUrl()
            ];

            return view('home/login',$data);
        }
    }
    public function loginGoogle($code)
    {
        $token = $this->googleAPI->fetchAccessTokenWithAuthCode($code);
        if(!isset($token['error'])){
            $this->googleAPI->setAccessToken($token['access_token']);
            session()->set('AccessToken', $token['access_token']);

            $googleService = new \Google_Service_Oauth2($this->googleAPI);
            $data = $googleService->userinfo->get();
            $akun = array(
                'id' => $data['id'],
                'email' => $data['email'],
                'picture' => $data['picture'],
                'hd' => $data['hd']
            );
            return $akun;
            //  echo "<pre>"; print_r($data);die;
        }else{
            session()->set('pesan', 'Login google bermasalah');
            return redirect()->to('home/login');
        }
    }
}
