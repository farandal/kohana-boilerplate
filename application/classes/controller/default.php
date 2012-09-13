<?php 
defined('SYSPATH') or die('No direct script access.');
class Controller_Default extends Controller_Website
{
	
     public function before()
     {
			//$this->template = false;
			parent::before();
     }
		
     public function after()
     {
			parent::after();
     }

	
     public function action_index()  {
			
		
				$this->view = View::factory('default/index');
				//$this->extra_css[] =  "link_to_css_file";
				//$this->extra_js[] =  "link_to_js_file";
				//$this->extra_code[] = "string_including_script_tags";

	 }
	
	
		
}

