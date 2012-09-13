<?
class Model_Analytic_Reporte extends ORM {
	 
	
		public static function get_all()
        {
                $result = ORM::factory('analytic')->find_all();
                return $result;
        }
		
		public static function get($id)
        {
				$result = ORM::factory('analytic',$id);
                return $result;
        }
		
		public static function get_new($month,$year,$cat)
        {
			$date = $year."-".$month;
			if($cat == "all"){
				$result = ORM::factory('analytic')->where('date','LIKE','%'.$date.'%')->count_all();
			}else{
				$result = ORM::factory('analytic')->where('date','LIKE','%'.$date.'%')->where('category','=',$cat)->count_all();
			}
                return $result;
        
		}
		

}