<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');
// use Restserver\Libraries\REST_Controller;

class TodoList extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        header("Access-Control-Allow-Origin: *");        
    }	

	public function todo_get(){
		$id = $this->get('id');
		$writer = $this->get('writer');
		$this->load->model('Todo_model','todolist');
		$list = $this->todolist->GetAllTodoList();		
		$this->response($list,200);	
	}
}
