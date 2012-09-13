<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Analytic_Logout extends Controller_Web {

	public function action_index()
	{
		Auth::instance()->logout();
		$this->request->redirect('analytic');
	}
}