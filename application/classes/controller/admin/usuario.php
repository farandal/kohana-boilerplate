<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Usuario extends Controller_Website {

	private static $ERRORS = array(
            "EMAIL_EXISTS" => "Ya existe una cuenta asociada a este correo", 
			"NO_USERS" => "No encontramos usuario con su email y contraseña"
    );



	public function action_index()
	{
			
    			$this->view = View::factory('admin/template')->set('title', ' Adminsitrador');		
				$this->view->local_config = $this->local_config;
				
				$results = Model_User::get_all();
				
				$this->view->content = View::factory('admin/usuario')->set('users',$results);
				$this->view->content->navigation  = Request::factory('admin/navigation')->execute()->body();
				$this->view->content->navigationtop  = Request::factory('admin/navigationtop')->execute()->body();
				$this->view->content->navigationheader  = Request::factory('admin/navigationheader')->execute()->body();
				
	
			
		
		
	}
	
	
	
	
	
	

} 
