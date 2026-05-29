<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'user_type',
        'full_name',
        'employee_id',
        'designation_rank_id',
        'department_unit_id',
        'password',
        'mobile_number',
        'mobile_number_alternate',
		'email_id',
        'emergency_contact',
        'dob',
        'age',
        'gender',
        'blood_group_id',
        'height',
		'weight',
        'joining_date',
        'pay_allowance_basic_pay',
        'known_ailment',
        'disability_allergy',
        'present_address_line1',
        'present_address_line2',
		'present_address_line3',
        'present_district_id',
        'present_ps',
        'present_state_id',
        'present_pincode',
        'same_address',
        'permanent_address_line1',
		'permanent_address_line2',
        'permanent_address_line3',
        'permanent_district_id',
        'permanent_ps',
        'permanent_state_id',
        'permanent_pincode',
        'status',
    ];

    // Password hashing callbacks
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data): array
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }

        $pwd = (string) $data['data']['password'];
        if ($pwd === '') {
            return $data;
        }

        // If it already looks like a bcrypt hash, keep as-is
        if (preg_match('/^\$2y\$\d{2}\$/', $pwd)) {
            return $data;
        }

        $data['data']['password'] = password_hash($pwd, PASSWORD_BCRYPT);
        return $data;
    }
}
