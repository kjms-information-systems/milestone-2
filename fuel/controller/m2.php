

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
		
		$b_psi90 = Security::strip_tags(Input::post('b_psi90'));
		
		if($b_psi90 == null){
            $b_psi90 = 1.482481;
		}
		
		$p_psi90 = Security::strip_tags(Input::post('p_psi90'));
		
		if($p_psi90 == null){
            $p_psi90 = 0.57255;
		}
		
		$data['psi90'] = Vbp::calculate(0.964542, 0.709498, $b_psi90, $p_psi90);
		
		$this->template->content = View::forge('m2/vbp_modeling', $data);
	}
	

	

}
