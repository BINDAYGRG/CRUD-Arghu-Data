<?php 

	class connectdatabase{
		public function connectiondb(){
			$connectiondb=mysqli_connect('localhost',
										'root',
										'',
										'merodata');
			return $connectiondb;
		}
	}


 ?>