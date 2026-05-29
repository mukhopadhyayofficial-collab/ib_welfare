<?php 
namespace App\Models;
use CodeIgniter\Model;
class DesignationModel extends Model{
	protected $table = 'master_designation_rank';
	protected $allowedFields = [
					'id',
					'rank_name',
					'status',
				];
}

?>