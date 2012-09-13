<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Navigationheader extends Controller_Website {

	public function action_index()
	{
parent::setUsetpl(false);
		
		$this->view = View::factory('admin/navigationheader');
	
	}
	
	

} 
