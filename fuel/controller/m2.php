<?php
use \Model\Vbp;

class Controller_M2 extends Controller_Template {
#pages belong her and live inside of the view folder
	public function action_index() {
		$data = array();
		$this->template->title = 'KJMS';
		$this->template->subtitle = 'Home';
		$this->template->content = View::forge('m2/index', $data);
	}
	public function action_about() {
        $data = array();
		$this->template->title = 'KJMS';
		$this->template->subtitle = 'About';
		$this->template->content = View::forge('m2/about', $data);
	}
	
    public function action_moreinformation() {
        $data = array();
		$this->template->title = 'KJMS';
		$this->template->subtitle = 'More Information';
		$this->template->content = View::forge('m2/moreinformation', $data);
	}
	public function action_bg() {
	}
	
	
	
// FORM EXAMPLE -------------------------------------------
	public function action_list() {
	}
// --------------------------------------------------------


//VBP Modeling
public function action_vbp_modeling() {
		$data = array();
		$this->template->title = 'KJMS';
		$this->template->subtitle = 'Home';
		
		//SAFETY DOMAIN
		
		//Calculating PSI90
		$b_psi90 = Security::strip_tags(Input::post('b_psi90'));
		if($b_psi90 == null){
            $b_psi90 = 1.482481;
		}
		$p_psi90 = Security::strip_tags(Input::post('p_psi90'));
		
		if($p_psi90 == null){
            $p_psi90 = 0.57255;
		}
		$data['psi90'] = Vbp::calculate(0.964542, 0.709498, $b_psi90, $p_psi90);
		
		//Calculating HA1
		$b_ha1 = Security::strip_tags(Input::post('b_ha1'));
		if($b_ha1 == null){
            $b_ha1 = 0.479;
		}
		$p_ha1 = Security::strip_tags(Input::post('p_ha1'));
		
		if($p_ha1 == null){
            $p_ha1 = 0.9;
		}
		$data['ha1'] = Vbp::calculate(0.369, 0.0, $b_ha1, $p_ha1);
		
    
		//Calculating HA2
		$b_ha2 = Security::strip_tags(Input::post('b_ha2'));
		if($b_ha2 == null){
            $b_ha2 = 0.461;
		}
		$p_ha2 = Security::strip_tags(Input::post('p_ha2'));
		
		if($p_ha2 == null){
            $p_ha2 = 0.691;
		}
		$data['ha2'] = Vbp::calculate(0.906, 0.0, $b_ha2, $p_ha2);
    
    
		//Calculating ha3
		$b_ha3 = Security::strip_tags(Input::post('b_ha3'));
		if($b_ha3 == null){
            $b_ha3 = 0.917;
		}
		$p_ha3 = Security::strip_tags(Input::post('p_ha3'));
		
		if($p_ha3 == null){
            $p_ha3 = 1.17;
		}
		$data['ha3'] = Vbp::calculate(0.824, 0.0, $b_ha3, $p_ha3);
		
		
		//Calculating ha4
		$b_ha4 = Security::strip_tags(Input::post('b_ha4'));
		if($b_ha4 == null){
            $b_ha4 = 0.711;
		}
		$p_ha4 = Security::strip_tags(Input::post('p_ha4'));
		
		if($p_ha4 == null){
            $p_ha4 = 0.0;
		}
		$data['ha4'] = Vbp::calculate(0.71, 0.0, $b_ha4, $p_ha4);
		
		
		//Calculating ha5
		$b_ha5 = Security::strip_tags(Input::post('b_ha5'));
		if($b_ha5 == null){
            $b_ha5 = 1.129;
		}
		$p_ha5 = Security::strip_tags(Input::post('p_ha5'));
		
		if($p_ha5 == null){
            $p_ha5 = 1.632;
		}
		$data['ha5'] = Vbp::calculate(0.767, 0.0, $b_ha5, $p_ha5);
		
		
		//Calculating ha6
		$b_ha6 = Security::strip_tags(Input::post('b_ha6'));
		if($b_ha6 == null){
            $b_ha6 = 2.113;
		}
		$p_ha6 = Security::strip_tags(Input::post('p_ha6'));
		
		if($p_ha6 == null){
            $p_ha6 = 1.103;
		}
		$data['ha6'] = Vbp::calculate(0.805, 0.004, $b_ha6, $p_ha6);
		
		
		//Calculating pc01
		$b_pc01 = Security::strip_tags(Input::post('b_pc01'));
		if($b_pc01 == null){
            $b_pc01 = 0.016949;
		}
		$p_pc01 = Security::strip_tags(Input::post('p_pc01'));
		
		if($p_pc01 == null){
            $p_pc01 = 0.017241;
		}
		$data['pc01'] = Vbp::calculate(0.020408, 0.0, $b_pc01, $p_pc01);
		
		//Calculating TPS scores for Safety
		$safety_tps = [$data['psi90'][6], $data['ha1'][6], $data['ha2'][6], $data['ha3'][6], $data['ha4'][6], $data['ha5'][6], $data['ha6'][6], $data['pc01'][6], 2];
		
		$data['safety_tps'] = Vbp::tps_domain($safety_tps);
		
		
		//CLINICAL CARE DOMAIN
		
		//Calculating mortAMI
		$b_mortAMI = Security::strip_tags(Input::post('b_mortAMI'));
		if($b_mortAMI == null){
            $b_mortAMI = 0.859249;
		}
		$p_mortAMI = Security::strip_tags(Input::post('p_mortAMI'));
		
		if($p_mortAMI == null){
            $p_mortAMI = 0.855281;
		}
		$data['mortAMI'] = Vbp::calculate(0.850916, 0.873053, $b_mortAMI, $p_mortAMI);
		
		//Calculating mortHF
		$b_mortHF = Security::strip_tags(Input::post('b_mortHF'));
		if($b_mortHF == null){
            $b_mortHF = 0.898113;
		}
		$p_mortHF = Security::strip_tags(Input::post('p_mortHF'));
		
		if($p_mortHF == null){
            $p_mortHF = 0.877034;
		}
		$data['mortHF'] = Vbp::calculate(0.883421, 0.907656, $b_mortHF, $p_mortHF);
		
		//Calculating mortPN
		$b_mortPN = Security::strip_tags(Input::post('b_mortPN'));
		if($b_mortPN == null){
            $b_mortPN = 0.885943;
		}
		$p_mortPN = Security::strip_tags(Input::post('p_mortPN'));
		
		if($p_mortPN == null){
            $p_mortPN = 0.890228;
		}
		$data['mortPN'] = Vbp::calculate(0.88286, 0.9079, $b_mortPN, $p_mortPN);
		
		//Calculating TPS scores for Clinical Care
		$cc_tps = [$data['mortAMI'][6], $data['mortHF'][6], $data['mortPN'][6]];
		
		$data['cc_tps'] = Vbp::tps_domain($cc_tps);
		
		
		//EFFICIENCY DOMAIN
		
		//Calculating MSPB
		$b_MSPB = Security::strip_tags(Input::post('b_MSPB'));
		if($b_MSPB == null){
            $b_MSPB = 1.035657;
		}
		$p_MSPB = Security::strip_tags(Input::post('p_MSPB'));
		
		if($p_MSPB == null){
            $p_MSPB = 1.047507;
		}
		$data['MSPB'] = Vbp::calculate(0.985777, 0.832678, $b_MSPB, $p_MSPB);	
		
		//Calculating TPS scores for Clinical Care
		$efficiency_tps = [$data['MSPB'][6]];
		
		$data['efficiency_tps'] = Vbp::tps_domain($efficiency_tps);
		
		
		//HCAHPS DOMAIN
		
		//Calculating nurses
		$b_nurses = Security::strip_tags(Input::post('b_nurses'));
		if($b_nurses == null){
            $b_nurses = 76.36;
		}
		$p_nurses = Security::strip_tags(Input::post('p_nurses'));
		
		if($p_nurses == null){
            $p_nurses = 77.68;
		}
		$data['nurses'] = Vbp::calculate(78.52, 86.68, $b_nurses, $p_nurses);	
		
		//Calculating doctors
		$b_doctors = Security::strip_tags(Input::post('b_doctors'));
		if($b_doctors == null){
            $b_doctors = 74.73;
		}
		$p_doctors = Security::strip_tags(Input::post('p_doctors'));
		
		if($p_doctors == null){
            $p_doctors = 75.49;
		}
		$data['doctors'] = Vbp::calculate(80.44, 88.51, $b_doctors, $p_doctors);
		
		//Calculating staff
		$b_staff = Security::strip_tags(Input::post('b_staff'));
		if($b_staff == null){
            $b_staff = 58.94;
		}
		$p_staff = Security::strip_tags(Input::post('p_staff'));
		
		if($p_staff == null){
            $p_staff = 64.24;
		}
		$data['staff'] = Vbp::calculate(65.08, 80.35, $b_staff, $p_staff);
		
		//Calculating care
		$b_care = Security::strip_tags(Input::post('b_care'));
		if($b_care == null){
            $b_care = 51.44;
		}
		$p_care = Security::strip_tags(Input::post('p_care'));
		
		if($p_care == null){
            $p_care = 52.3;
		}
		$data['care'] = Vbp::calculate(51.45, 62.44, $b_care, $p_care);
		
		//Calculating medicine
		$b_medicine = Security::strip_tags(Input::post('b_medicine'));
		if($b_medicine == null){
            $b_medicine = 62.91;
		}
		$p_medicine = Security::strip_tags(Input::post('p_medicine'));
		
		if($p_medicine == null){
            $p_medicine = 61.47;
		}
		$data['medicine'] = Vbp::calculate(63.37, 73.66, $b_medicine, $p_medicine);
		
		//Calculating cleanliness
		$b_cleanliness = Security::strip_tags(Input::post('b_cleanliness'));
		if($b_cleanliness == null){
            $b_cleanliness = 62.77;
		}
		$p_cleanliness = Security::strip_tags(Input::post('p_cleanliness'));
		
		if($p_cleanliness == null){
            $p_cleanliness = 62.27;
		}
		$data['cleanliness'] = Vbp::calculate(65.6, 79, $b_cleanliness, $p_cleanliness);
		
		//Calculating discharge
		$b_discharge = Security::strip_tags(Input::post('b_discharge'));
		if($b_discharge == null){
            $b_discharge = 87.29;
		}
		$p_discharge = Security::strip_tags(Input::post('p_discharge'));
		
		if($p_discharge == null){
            $p_discharge = 88.3;
		}
		$data['discharge'] = Vbp::calculate(86.6, 91.63, $b_discharge, $p_discharge);
		
		//Calculating overall
		$b_overall = Security::strip_tags(Input::post('b_overall'));
		if($b_overall == null){
            $b_overall = 69.34;
		}
		$p_overall = Security::strip_tags(Input::post('p_overall'));
		
		if($p_overall == null){
            $p_overall = 72.73;
		}
		$data['overall'] = Vbp::calculate(70.23, 84.58, $b_overall, $p_overall);
		
		//Calculating TPS scores for HCAHPS
		$hcahps_tps = [$data['nurses'][6], $data['doctors'][6], $data['staff'][6], $data['care'][6], $data['medicine'][6], $data['cleanliness'][6], $data['discharge'][6], $data['overall'][6]];
		
		$data['hcahps_tps'] = Vbp::tps_HCAHPS($hcahps_tps);
		
		
		//TOTAL TPS
		$domain_scores = [$data['cc_tps'][2], $data['hcahps_tps'][2], $data['safety_tps'][2], $data['efficiency_tps'][2]];
		$data['tps'] = Vbp::tps($domain_scores);
		
		//REIMBURSEMENT
		
		$b_reim = Security::strip_tags(Input::post('b_reim'));
		if($b_reim == null){
            $b_reim = 38145589.18;
		}
		
		$reimbursement_data = [$b_reim, $data['tps'][0]];
		$data['reimbursement'] = Vbp::reimbursement($reimbursement_data);
		
		Vbp::put_data("test.csv", $data);
		echo json_encode(Vbp::get_data("test.csv"));
		
		//Output data to site
		$this->template->content = View::forge('m2/vbp_modeling', $data);
	}
	

	

}
