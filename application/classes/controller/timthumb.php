<?php /**/ ?><?php defined('SYSPATH') or die('No direct script access.');

class Controller_Timthumb extends Controller {
    
    public function action_index(){
        
        define('FILE_CACHE_DIRECTORY', Kohana::$config->load('timthumb')->get("file_cache_directory"));
        
		$params_arr = array();
		$params = explode("|",$this->request->param('params'));
		foreach($params as $param) {
			$param_tmp = explode("=",$param);
			$params_arr[$param_tmp[0]] = $param_tmp[1];							 
		}
		
		
		//src=/nexans/assets/images/productos/EN001.jpg|w=100|h=100|zc=1
        require Kohana::find_file('vendor', 'timthumb/timthumb');
        timthumb::start($params_arr);
		
		
        
    }
    
    
}