<?php 
namespace App\Models;
use CodeIgniter\Model;
class StateModel extends Model{
	protected $table = 'master_state';
	protected $allowedFields = [
					'id',
					'state_name',
					'status',
				];
}

?>