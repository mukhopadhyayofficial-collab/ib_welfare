<?php 
namespace App\Models;
use CodeIgniter\Model;
class MedicalHistoryModel extends Model{
	protected $table = 'user_medical_history';
	protected $allowedFields = [
					'user_id',
					'date_of_checkup',
                    'bmi',
					'pulse',
					'blood_pressure',
					'general_clinical_examination',
					'hb',
					'tc',
					'dc',
					'esr',
					'sugar_pp',
					'sugar_fasting',
					'urea_creatinine',
					'tsf',
					'lfi',
					'lipid_profile',
					'ecg',
					'eye_checkup',
					'xray_chest',
					'ent',
					'other_examination',
					'significant_findings',
					'remarks_advice_corrective_action',
					'employee_health_status',
					'medical_officer_name',
					'general_clinical_examination_file',
					'blood_test_report_file',
					'ecg_file',
					'xray_chest_file',
					'ent_file',
					'other_examination_file',
					'medical_checkup_report_file',
					'status',
					'created_at',
					'created_by',
					'updated_at',
					'updated_by',
				];
}

?>