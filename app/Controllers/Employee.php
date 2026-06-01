<?php

namespace App\Controllers;
use App\Models\DesignationModel;
use App\Models\UserModel;
use App\Models\UnitModel;
use App\Models\LiuModel;
use App\Models\RelationshipModel;
use App\Models\StateModel;
use App\Models\DistrictModel;
use App\Models\PoliceStationModel;

class Employee extends BaseController {
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
    /**
     * User details row (for view rendering — header, userDetails).
     */
    private function userDetails(int $uid): array
    {
        $row = db_connect()
            ->table('users')
            ->where('id', $uid)
            ->limit(1)
            ->get()->getRowArray();

        return $row ?? [];
    }

    // -------------------------------------------------------
    // Shared raw DB read — single user record by PK
    // -------------------------------------------------------
    private function getUserById(int $id): ?array
    {
        $row = db_connect()
            ->table('users')
            ->where('id', $id)
            ->get()
            ->getRowArray();

        return $row ?: null;
    }
    public function employeeManagement(){ 
		if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
    	$userDetails  = $this->userDetails($uid);
        $data = [
            'title'    => 'Employee Management',
            'active_menu' => 'employee-management',
            'allUsers' => db_connect()->table('users')->where('id !=', $uid)->where('status', 'Active')->get()->getResultArray(),
            'userDetails'  => $userDetails,
        ];
        return view('_header', $data) . view('Employee/employeeManagement', $data);
    }
    public function addEmployee(){ 
        $rankModel = new DesignationModel();
        $unitModel = new UnitModel();
        $liuModel = new LiuModel();
        $relationshipModel = new RelationshipModel();
        $stateModel = new StateModel();
        $districtModel = new DistrictModel();

        if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
    	$userDetails  = $this->userDetails($uid);        
        $rankModel = $rankModel->where('status', 'Active')->findAll();
        $unitModel = $unitModel->where('status', 'Active')->findAll();
        $liuModel = $liuModel->where('status', 'Active')->findAll();
        $relationshipModel = $relationshipModel->where('status', 'Active')->findAll();
        $stateModel = $stateModel->where('status', 'Active')->findAll();
        $districtModel = $districtModel->where('gb_district_status', '1')->findAll();

        $data = [
            'title'    => 'Add Employee',
            'active_menu' => 'add-employee',
            'userDetails'  => $userDetails,
            'rankDetails'  => $rankModel,
            'unitDetails'  => $unitModel,
            'liuDetails'  => $liuModel,
            'relationshipDetails'  => $relationshipModel,
            'stateDetails'  => $stateModel,
        ];
        return view('_header', $data) . view('Employee/employeeAddition', $data);
    }
    public function insertEmployee(){
        $session = session();
        $data =  [
			'full_name' =>$this->request->getVar('full_name'),
            'email' =>$this->request->getVar('email'),
            'password' =>$this->request->getVar('password'),
            'user_type' =>$this->request->getVar('user_type'),
		];
		$UserModel = new UserModel();
        $user = $UserModel->where("email",$this->request->getVar('email'))->first();
        if(@$user){
            $session->setFlashdata("errorMsg","Employee Already Exists..");
        } else{
            $UserModel->insert($data);
            $session->setFlashdata("successMsg","Employee Successfully Added..");
        }
        return redirect()->to(base_url('add-employee'));
    }
    public function deleteEmployee($id = null){
        $session = session();
		$UserModel = new UserModel();
		$UserModel->where('id',$id)->delete();
        $session->setFlashdata("successMsg","Employee Successfully Deleted..");
		return redirect()->to(base_url('employee-management'));
	}
    public function statusChangeEmployee($id = null){
        $session = session();
		$UserModel = new UserModel();
        $fixedUser = $UserModel->where("id",$id)->first();
        if(@$fixedUser['status'] == 'Active'){
            $data =  [
                'status' =>'Inactive'
            ];
            $session->setFlashdata("successMsg","Employee Successfully Locked..");
        } else{
            $data =  [
                'status' =>'Active'
            ];
            $session->setFlashdata("successMsg","Employee Successfully Unlocked..");
        }
        $UserModel->where('id', $id)->set($data)->update();
		return redirect()->to(base_url('employee-management'));
	}
    public function editEmployee($id = null){ 
        if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
        $userDetails  = $this->userDetails($uid);
        $data = [
            'title'    => 'Edit Employee',
            'active_menu' => 'employee-management',
            'userDetails'  => $userDetails,
            'fixedUser' => $this->getUserById($id),
        ];
        return view('_header', $data) . view('Employee/editEmployee', $data);
    }
    public function updateEmployee($id = null){
        $session = session();
        $data =  [
			'full_name' =>$this->request->getVar('full_name'),
            'email' =>$this->request->getVar('email'),
            'user_type' =>$this->request->getVar('user_type'),
		];
		$UserModel = new UserModel();
		$UserModel->where('id', $id)->set($data)->update();
        $this->session->setFlashdata("successMsg","Employee Successfully Updated..");
        return redirect()->to(base_url('edit-employee/'.$id));
    }
    public function medicalDetails(){ 
        if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
    	$userDetails  = $this->userDetails($uid);
        $data = [
            'title'    => 'Medical Details',
            'active_menu' => 'medical-details',
            'userDetails'  => $userDetails,
        ];
        return view('_header', $data) . view('Employee/medicalDetails', $data);
    }
    public function searchEmployee(){ 
        if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
    	$userDetails  = $this->userDetails($uid);
        $data = [
            'title'    => 'Search Employee',
            'active_menu' => 'search-employee',
            'userDetails'  => $userDetails,
        ];
        return view('_header', $data) . view('Employee/searchEmployee', $data);
    }
    public function reports(){ 
        if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
    	$userDetails  = $this->userDetails($uid);
        $data = [
            'title'    => 'Reports',
            'active_menu' => 'reports',
            'userDetails'  => $userDetails,
        ];
        return view('_header', $data) . view('Employee/reports', $data);
    }

    public function getDistricts($state_id)
    {
        $districtModel = new DistrictModel();

        $districtModel = $districtModel
            ->where('state_id', $state_id)
            ->where('gb_district_status', 1)
            ->orderBy('gb_district_name', 'ASC')
            ->findAll();

        echo json_encode(
            $districtModel
        );
    }

    public function getPoliceStation($district_id)
    {
        $policeStationModel = new PoliceStationModel();

        $policeStationModel = $policeStationModel
            ->where('gb_district_id', $district_id)
            ->where('gb_ps_status', 1)
            ->orderBy('gb_ps_name', 'ASC')
            ->findAll();

        echo json_encode(
            $policeStationModel
        );
    }

}