<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Website extends Controller {

				public $view;
				public $final_view;
				public $mobile;
				public $template = 'template';
				public $host = "";
				public $protocol;
				
				public $extra_scripts = array();
				public $extra_js = array();
				public $extra_css = array();

				public $debug = false;

				public function before() {
					
								/*--------------------------------------------
								DEBUG 
								--------------------------------------------*/
								$debug          = Kohana::$config->load('local')->get('debug');
								$debug_arr      = array();
								/*--------------------------------------------
								PROTOCOLO 
								--------------------------------------------*/
								
								if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1)                                                                                                       
								|| isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'                                                                                             
								) {                                                                                                                                                                                         
								$protocol = 'https://';                                                                                                                                                                   
								}                                                                                                                                                                                           
								else {                                                                                                                                                                                      
								$protocol = 'http://';                                                                                                                                                                    
								}      
								
								
								$this->protocol = $protocol;
								$primary_domain = Kohana::$config->load('local')->get('primary_domain');
								$app_directory  = Kohana::$config->load('local')->get('app_directory');
								$host           = $protocol . $primary_domain . $app_directory . "/";
								$this->host     = $host;

								 $this->mobile       = Request::user_agent('mobile');

								if ($debug) {
												print_r($debug_arr);
								} //$debug
								
								
				}
				public function after() {

								
                                                                if ($this->template) {
                                                                  $this->final_view = View::factory($this->template)->set('title', Kohana::$config->load('local')->get('site_desc') );
								  $this->final_view->content = $this->view;
                                                                } else {
								  $this->final_view = $this->view;
								}

                                                                $this->final_view->mobile = $this->mobile;
                                                                $this->final_view->assets = $this->host . Kohana::$config->load('local')->get('asset_dir');
                                                                $this->final_view->extra_js = $this->extra_js;
                                                                $this->final_view->extra_css = $this->extra_css;
                                                                $this->final_view->extra_scripts = $this->extra_scripts;

								$this->response->body($this->final_view);
				}
}




