<?php 
namespace App\Models;
use CodeIgniter\Model;
class PoliceStationModel extends Model{
	protected $table = 'gb_ps';
	protected $allowedFields = [
					'gb_ps_name',
					'gb_district_id',
					'gb_ps_status',
				];
	/*public function getRecord($sql){
		echo $sql; exit();
		$res = $this->db->query($sql);
		return $res->result_array();
	}*/
}

?>