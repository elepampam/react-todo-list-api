<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_model extends CI_Model{
	public function GetAllTodoList(){
		$result = $this->db->get('todo');
		return $result->result();
	}
}
