<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Inicio extends Controller_Website {


	public function action_index()
        {


 				$this->view = View::factory('admin/template')->set('title', ' Administrador');
                                $this->view->local_config = $this->local_config;
                                $this->view->content = View::factory('admin/inicio');
                                $this->view->content->navigation = Request::factory('admin/navigation')->execute()->body();
                                $this->view->content->navigationtop = Request::factory('admin/navigationtop')->execute()->body();
                                $this->view->content->navigationheader  = Request::factory('admin/navigationheader')->execute()->body();  


	}


}
