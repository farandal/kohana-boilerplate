<?php 
defined('SYSPATH') or die('No direct script access.');
class Controller_Widgets extends Controller_Website
{
	
	public function action_index()  
	{
		parent::setUsetpl(false);
		$this->view = View::factory('widgets/main');						
	}
	
	public function action_navigation()  
	{
		parent::setUsetpl(false);
		$this->view  = View::factory('widgets/navigation');		
		$v = $this->request->param('id');
		if($v == "mobile") $this->view  = View::factory('widgets/navigation_mobile');				
	}
	
	
}

