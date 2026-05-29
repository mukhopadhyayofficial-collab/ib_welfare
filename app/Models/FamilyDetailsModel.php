<?php 
namespace App\Models;
use CodeIgniter\Model;
class FamilyDetailsModel extends Model{
	protected $table = 'user_family_details';
	protected $allowedFields = [
					'user_id',
					'family_member_name',
					'relationship',
					'contact_number',
					'dob',
					'blood_group_id',
					'dependency',
					'status',
					'created_at',
					'created_by',
					'updated_at',
					'updated_by',
				];
}

?>