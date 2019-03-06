<?php

use \Model\Form;

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

}
