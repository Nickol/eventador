<?php
class Index extends CI_Controller {
	function __construct() {parent::__construct();
	}

	function index() {
		$this -> load -> model('admin_model');

		$q['qwe'] = $this -> admin_model -> get_all_themes();

		$this -> load -> view('index', $q);

	}

}
?>