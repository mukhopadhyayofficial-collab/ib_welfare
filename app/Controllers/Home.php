<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\CustomModel;

class Home extends BaseController
{
	private function uid(): int
    {
        return (int)(session()->get('wefare_user_id') ?? 0);
    }
	private function requireLogin(): ?object
    {
        if (!$this->uid()) {
            return redirect()->to(base_url('login'));
        }
        return null;
    }
	private function userDetails(int $uid): array
    {
        $row = db_connect()
            ->table('users')
            ->where('id', $uid)
            ->limit(1)
            ->get()->getRowArray();

        return $row ?? [];
    }
	public function login(){
		$session = session();
		$wefare_user_id = $session->get('wefare_user_id');
		if(@$wefare_user_id){
			return redirect()->to(base_url());
		} else{
			$data = array();
			return view('login',$data);
		}
	}
	public function checkValidUser()
	{
		$session = session();
		$userModel = new UserModel();

		$email = trim((string) $this->request->getPost('employee_id'));
		$password = (string) $this->request->getPost('password');

		// Basic input hardening
		if ($email === '' || $password === '') {
			$session->setFlashdata('errorMsg', 'Please enter Email and Password.');
			return redirect()->to(base_url('login'));
		}

		$user = $userModel->where('employee_id', $email)->first();
		
		// Validate user + status
		if (!$user || ($user['status'] ?? 'Inactive') !== 'Active') { echo 1; die;
			$session->setFlashdata('errorMsg', 'Wrong Credentials.');
			return redirect()->to(base_url('login'));
		}
		$hash = (string) ($user['password'] ?? '');
		if ($hash === '' || !password_verify($password, $hash)) {
			$session->setFlashdata('errorMsg', 'Wrong Credentials.');
			return redirect()->to(base_url('login'));
		}

		// Prevent session fixation
		$session->regenerate(true);

		$session->set([
			'full_name'   => $user['full_name'] ?? '',
			'status' => $user['status'] ?? 'Inactive',
			'wefare_user_id'     => $user['id'] ?? null,
			'user_type'   => $user['user_type'] ?? 'User'
		]);

		return redirect()->to(base_url());
	}
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('login'));
	}
	public function dashboard()
	{
		if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
    	$userDetails  = $this->userDetails($uid);
		$data = [
            'title'    => 'WELFARE | DASHBOARD',
			'active_menu' => 'dashboard',
            'allUsers' => db_connect()->table('users')->where('id !=', $uid)->where('status', 'Active')->get()->getResultArray(),
            'userDetails'  => $userDetails,
        ];
		//print_r($data); die;
		return view('_header', $data) . view('welcome', $data);
	}
	
}
