<?php 
namespace App\Models;
use CodeIgniter\Model;
class LiuModel extends Model{
	protected $table = 'master_liu';
	protected $allowedFields = [
					'id',
					'liu_name',
					'status',
				];
}

?>