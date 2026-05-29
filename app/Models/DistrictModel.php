<?php 
namespace App\Models;
use CodeIgniter\Model;
class DistrictModel extends Model{
	protected $table = 'gb_district';
	protected $allowedFields = [
					'gb_district_name',
					'gb_district_status',
				];
}

?>