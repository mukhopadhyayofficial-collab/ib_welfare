<?php 
namespace App\Models;
use CodeIgniter\Model;
class DistrictModel extends Model{
	protected $table = 'gb_district';
	protected $allowedFields = [
					'id',
					'state_id',
					'gb_district_name',
					'gb_district_status',
				];
}

?>