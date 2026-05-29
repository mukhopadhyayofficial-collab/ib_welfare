<?php 
namespace App\Models;
use CodeIgniter\Model;
class RelationshipModel extends Model{
	protected $table = 'master_relationship';
	protected $allowedFields = [
					'id',
					'relationship_name',
					'status',
				];
}

?>