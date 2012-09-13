<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Navigationtop extends Controller_Website {

	public function action_index()
	{
parent::setUsetpl(false);
		$usuario = Auth::instance()->get_user();
		$this->view = View::factory('admin/navigationtop')->set('logeado',$usuario);
	
	}
	
	

} 
