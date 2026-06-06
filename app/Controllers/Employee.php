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
use App\Models\FamilyDetailsModel;

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
        //echo "1"; die;

        // Upload Photo
        $userId="";
        $employeeId = trim($this->request->getPost('employee_id'));
        $photoName = null;
        $photoPath = null;
        $photo = $this->request->getFile('user_photo_path');

        if ($photo && $photo->isValid() && !$photo->hasMoved()) {
            $uploadPath = FCPATH . 'uploads/employees/' . $employeeId;

            // Create folder if not exists
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            //echo ''. $uploadPath .'';die();
            // Get extension
            $extension = $photo->getExtension();

            // Fixed file name
            $photoName = 'user_profile_photo.' . $extension;

            // Move file
            $photo->move($uploadPath, $photoName);

            // Store relative path in database
            $photoPath = 'uploads/employees/' . $employeeId . '/' . $photoName;
        }

        $sameAddress = $this->request->getPost('same_address') ? '1' : '2';

        $data = [

            'user_type'               => 'User',
            'full_name'               => $this->request->getPost('full_name'),
            'employee_id'             => $employeeId,
            'password'                => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",

            'designation_rank_id'     => $this->request->getPost('designation_rank_id'),
            'department_unit_id'      => $this->request->getPost('department_unit_id'),
            'liu_id'                  => $this->request->getPost('liu_id'),

            'mobile_number'           => $this->request->getPost('mobile_number'),
            'mobile_number_alternate' => $this->request->getPost('mobile_number_alternate'),
            'email_id'                => $this->request->getPost('email_id'),
            'emergency_contact'       => $this->request->getPost('emergency_contact'),

            'dob'                     => $this->request->getPost('dob'),
            'age'                     => $this->request->getPost('age'),
            'gender'                  => $this->request->getPost('gender'),

            'blood_group'          => $this->request->getPost('blood_group'),
            'height'                  => $this->request->getPost('height'),
            'weight'                  => $this->request->getPost('weight'),

            'joining_date'            => $this->request->getPost('joining_date'),
            'service_status'          => $this->request->getPost('service_status'),

            'pay_allowance_basic_pay' => $this->request->getPost('pay_allowance_basic_pay'),

            'known_ailment'           => $this->request->getPost('known_ailment'),
            'disability_allergy'      => $this->request->getPost('disability_allergy'),

            // Present Address
            'present_address_line1'   => $this->request->getPost('present_address_line1'),
            'present_address_line2'   => $this->request->getPost('present_address_line2'),
            'present_address_line3'   => $this->request->getPost('present_address_line3'),

            'present_district_id'     => $this->request->getPost('present_district_id'),
            'present_ps'              => $this->request->getPost('present_ps'),
            'present_state_id'        => $this->request->getPost('present_state_id'),
            'present_pincode'         => $this->request->getPost('present_pincode'),

            // Permanent Address
            'same_address'            => $sameAddress,

            'permanent_address_line1' => $this->request->getPost('permanent_address_line1'),
            'permanent_address_line2' => $this->request->getPost('permanent_address_line2'),
            'permanent_address_line3' => $this->request->getPost('permanent_address_line3'),

            'permanent_district_id'   => $this->request->getPost('permanent_district_id'),
            'permanent_ps'            => $this->request->getPost('permanent_ps'),
            'permanent_state_id'      => $this->request->getPost('permanent_state_id'),
            'permanent_pincode'       => $this->request->getPost('permanent_pincode'),

            'status'                  => 'Active',
            'is_password_change'                  => '2',

            // Only if you add this column later
            'user_photo_path' => $photoPath
        ];
        //echo var_dump($data); die();
		$UserModel = new UserModel();
        $user = $UserModel->where("email_id ",$this->request->getVar('email_id '))->first();


        if(@$user){
            $session->setFlashdata("errorMsg","Employee Already Exists..");
        } else{
            $UserModel->insert($data);  
            //echo $UserModel->db->getLastQuery();die;          
            $userId = $UserModel->getInsertID();

            $FamilyDetailsModel = new FamilyDetailsModel();

            $familyNames   = $this->request->getPost('family_member_name');
            $relationships = $this->request->getPost('relationship_id');
            $familyDobs    = $this->request->getPost('family_dob');
            $mobiles       = $this->request->getPost('contact_number');
            $bloodGroups   = $this->request->getPost('family_blood_group');

            if (!empty($familyNames)) {

                foreach ($familyNames as $key => $name) {

                    if (trim($name) == '') {
                        continue;
                    }

                    $familyData = [
                        'user_id'            => $userId,
                        'family_member_name' => $name,
                        'relationship_id'    => $relationships[$key] ?? null,
                        'family_dob'         => $familyDobs[$key] ?? null,
                        'contact_number'     => $mobiles[$key] ?? null,
                        'family_blood_group' => $bloodGroups[$key] ?? null,
                        'status'             => 'Active'
                    ];

                    $FamilyDetailsModel->insert($familyData);
                    //echo $FamilyDetailsModel->db->getLastQuery();die;        
                }
            }


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
    public function checkEmployee(){
        $session = session();
		$field = $this->request->getGet('field');
        $value = trim($this->request->getGet('value'));

        $allowedFields = [
            'employee_id',
            'email_id',
            'mobile_number',
            'mobile_number_alternate'
        ];

        if (!in_array($field, $allowedFields)) {
            return $this->response->setJSON([
                'exists' => false
            ]);
        }

        $UserModel = new UserModel();

        $exists = $UserModel
            ->where($field, $value)
            ->countAllResults();
        if ($exists > 0) {
            return $this->response->setJSON([
                'exists' => ($exists > 0),
                'message' => ucfirst(str_replace('_', ' ', $field)) . ' already exists'
            ]);
        } else {
            return $this->response->setJSON([   
                'exists' => ($exists > 0),
            ]);
	    }
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
    /*public function medicalDetails(){ 
        if ($r = $this->requireLogin()) return $r;
        $uid        = $this->uid();
    	$userDetails  = $this->userDetails($uid);
        $data = [
            'title'    => 'Medical Details',
            'active_menu' => 'medical-details',
            'userDetails'  => $userDetails,
        ];
        return view('_header', $data) . view('Employee/medicalDetails', $data);
    }*/

    public function medicalDetails($id = null)
    {
        if ($r = $this->requireLogin()) return $r;

        $uid = $this->uid();
        $userDetails = $this->userDetails($uid);

        $employee = $this->getUserById((int)$id);

        if (!$employee) {
            return redirect()->to(base_url('employee-management'))
                ->with('errorMsg', 'Employee not found.');
        }

        $data = [
            'title'       => 'Medical Details',
            'active_menu' => 'employee-management',
            'userDetails' => $userDetails,
            'employee'    => $employee,
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