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
		
		
		$this->template->content = View::forge('m2/vbp_modeling', $data);
	}
	

	

}
