<?
class Model_User extends Model_Auth_User {
			
/* http://ygamretuta.me/2011/11/08/kohana-3-2-extending-the-user-model-to-support-custom-fields-and-uploading/ */


		public static function checkmail($user) {
					return ((bool) ORM::factory('user')->where('email','=',$user)->find());
		}
		
		public static function checkadmin($user) {
					return ((bool) ORM::factory('user')->where('email','=',$user)->where('role_id','=','2')->find());
		}
		
		public static function get_all()
        {
                $result = ORM::factory('user')->where('role_id','!=','0')->find_all();
                return $result;
        }
		
		public static function get($id)
        {
				$result = ORM::factory('user',$id);
                return $result;
        }
		
		public static function send_pass($user){
					
				$user = ORM::factory('user')->where('email','=',$user)->where('role_id','!=','0')->find();
                return $user;
																							   
		}
		
		public function get_by_field($field,$value)
		{
			$object = $this->where($field,'=',$value)->find();
		}
		
		


}
