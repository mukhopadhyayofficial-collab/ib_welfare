<?php 
namespace App\Models;
use CodeIgniter\Model;
class UnitModel extends Model{
	protected $table = 'master_unit';
	protected $allowedFields = [
					'unit_name',
					'status',
				];
}

?>