<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Website {

	public function action_index()
	{
		
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
				
				if($this->_login()){
					
						
					$this->request->redirect('admin');	
						

				
				}else{
				
					$this->request->redirect('admin/error/noencontrado');
					
				
				}; 
		

		
		}else{
			
		if (Auth::instance()->logged_in())
		{
    			// User is logged in, continue on
				$this->request->redirect('admin/inicio');
				
		}
		else
		{
    			// User isn't logged in, redirect to the login form.
				
				
				 
				$this->view = View::factory('admin/template')->set('title', ' Administrador');		
				$this->view->local_config = $this->local_config;
				$this->view->content = View::factory('admin/login');
				
				
				
		}			
			
		}
		
		
	}


	
	
	public function action_sendpass()
	{
		
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
		
				if($this->_sendpassword()){

					$this->request->redirect('admin/error/enviado');

				}else{
				
					$this->request->redirect('admin/error/noencontrado');

				}; 
				
		}
		else
		{
		
				$this->view = View::factory('admin/template')->set('title', 'Administrador');		
				$this->view->local_config = $this->local_config;
				$this->view->content = View::factory('admin/loginsend');
				
		
		}
				
		
	}
	
	
	
	
	
	public function _login(){
	
					$results = false;
	
					$post = Validation::factory($_POST)
                    ->rule('user', 'not_empty')
					->rule('password','not_empty');
						

         if($post->check()) {
			 		
					$post = $this->request->post();
					$user = $post['user'];
					$pass = $post['password'];
					
				
					$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
            		$user = Auth::instance()->login($user, $pass, $remember);
             		$usuario = Auth::instance()->get_user();
							// If successful, redirect user
							if($usuario){
							if ($usuario->role_id == 2)
							{
								
								$results = true;
							}
							else
							{
								Auth::instance()->logout();
								$this->request->redirect('admin/error/noencontrado');
							}
							}
					
         }
				
		 return $results;
	
	}
	
	public function action_logout()
	{
		Auth::instance()->logout();
		$this->request->redirect('admin');
	}


	
	
	public function _sendpassword(){
			
			$results = false;
	
					$post = Validation::factory($_POST)
                    ->rule('user', 'not_empty');
					
	

         	if($post->check()) {
			 		
					$post = $this->request->post();
					$user = $post['user'];
					
					$results = Model_User::send_pass($user);
					
					
					if(!$results->id){
						
						$results = false;
						
					}else{
						
						$random = rand(111,999);
						$time = time();
						$pwd = $random.$time;

						
						$item = ORM::factory('user',$results->id);
						$item->password = $pwd;
						$item->save();
						
						
						
						$para  = $results->email;//$results->email; // atención a la coma
	
						// subject
						$titulo = 'Password Nexans';
				
						// message
						$mensaje = '
								<html>
								<head>
								  <title>Ud. ha solicitado recuperer su contraseña</title>
								</head>
								<body>
								  <p>username o email: '.$results->email.'</p>
								  
								  <p>contraseña: '.$pwd.'</p>
								  
								  <p>Atte. Equipo Nexans</p>
								  
								</body>
								</html>
								';
			
						// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
						$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
						$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						
						// Cabeceras adicionales
						$cabeceras .= 'To: Contacto Nexans <'.$results->email.'>' . "\r\n";
						$cabeceras .= 'From: soporte@brandweb.cl <soporte@brandweb.cl>' . "\r\n";
						
						// Mail it
						mail($para, $titulo, $mensaje, $cabeceras);
						
						$results = true;
						
					}
         
			 }
				 return $results;

}
		
	
	

	

} 
