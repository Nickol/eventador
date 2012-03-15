<?php
class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this -> load -> helper(array('url', 'form'));
	}

	public function index() {
		$this -> load -> view('/admin/index');
		
		
		
	}

	public function add() {
		$tablename = 'theme';	
		$this -> load -> library('form_validation');
		$this -> load -> model('admin_model');

		$this -> form_validation -> set_rules('theme_name', 'theme_name', 'required');
		$this -> form_validation -> set_rules('room', 'room', 'required');
		$this -> form_validation -> set_rules('time', 'time', 'required');
		$this -> form_validation -> set_rules('duration', 'duration', 'required');
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('admin/add');
		} else {
			$data['name'] = $this -> input -> post('theme_name');
			$data['room'] = $this -> input -> post('room');
			$data['time'] = $this -> input -> post('time');
			$data['duration'] = $this -> input -> post('duration');

			$this -> admin_model -> put($tablename, $data);
			$this -> load -> view('admin/add');
		}

	}

	
	

	public function add_lecturer() {
		
		$tablename = 'lecturers';	
			
		$this -> load -> library('form_validation');
			
		$this -> form_validation -> set_rules('first_name', 'first_name', 'required');
		$this -> form_validation -> set_rules('second_name', 'second_name', 'required');
		$this -> form_validation -> set_rules('middle_name', 'middle_name', 'required');
		$this -> form_validation -> set_rules('degree', 'degree', 'required');
		
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('admin/add_lecturer');
		} else {
			$data['first_name'] = $this -> input -> post('first_name');
			$data['second_name'] = $this -> input -> post('second_name');
			$data['middle_name'] = $this -> input -> post('middle_name');
			$data['degree'] = $this -> input -> post('degree');

			$this -> admin_model -> put($tablename, $data);
			$this -> load -> view('admin/add_lecturer');
		
	}
	}
	
		public function add_subject() {
		
		$tablename = 'subjects';	
			
		$this -> load -> library('form_validation');
			
		$this -> form_validation -> set_rules('subject', 'subject', 'required');
				
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('admin/add_subject');
		} else {
			$data['subject'] = $this -> input -> post('name');
			
			$this -> admin_model -> put($tablename, $data);
			$this -> load -> view('admin/add_subject');
		
	}
	}
	
	
	
	
	
		
	public function edit() {

	}





}
?>	