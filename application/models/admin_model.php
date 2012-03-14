<?php
class Admin_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	function put($table, $data) {
		$this -> db -> insert($table, $data);
	}

	function get_all_themes() {
		$query = $this -> db -> get('theme');
		return $query;
	}

	
}
?>