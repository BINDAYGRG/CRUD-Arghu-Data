<?php 

	class crud{
		public function adddata($datas){
			$obj= new connectdatabase();
			$connectiondb=$obj->connectiondb();

			$sql="INSERT INTO data_arghu(nameeng, namenep, oldaddresseng, oldaddressnep, currentaddresseng, currentaddressnep, vetieng, vetinep, syaieng, syainep, category, reference) values ('$datas[0]',
											'$datas[1]',
											'$datas[2]',
											'$datas[3]',
											'$datas[4]',
											'$datas[5]',
											'$datas[6]',
											'$datas[7]',
											'$datas[8]',
											'$datas[9]',
											'$datas[10]',
											'$datas[11]')";
			return mysqli_query($connectiondb,$sql);
		}

		public function getdata($id_arghu){
			$obj= new connectdatabase();
			$connectiondb=$obj->connectiondb();

			$sql="SELECT *
					from data_arghu 
					where id_arghu='$id_arghu'";
			$result=mysqli_query($connectiondb,$sql);
			$ver=mysqli_fetch_row($result);

			$datas=array(
				'id_arghu' => $ver[0],
				'nameeng' => $ver[1],
				'namenep' => $ver[2],
				'oldaddresseng' => $ver[3],
				'oldaddressnep' => $ver[4],
				'currentaddresseng' => $ver[5],
				'currentaddressnep' => $ver[6],
				'vetieng' => $ver[7],
				'vetinep' => $ver[8],
				'syaieng' => $ver[9],
				'syainep' => $ver[10],
				'username' => $ver[11],
				'category' => $ver[12],
				'reference' => $ver[13]
				);
			return $datas;
		}

		public function updateData($datas){
			$obj= new connectdatabase();
			$connectiondb=$obj->connectiondb();

			$sql="UPDATE data_arghu set nameeng='$datas[0]',
										namenep='$datas[1]',
										oldaddresseng='$datas[2]',
										oldaddressnep='$datas[3]',
										currentaddresseng='$datas[4]',
										currentaddressnep='$datas[5]',
										vetieng='$datas[6]',
										vetinep='$datas[7]',
										syaieng='$datas[8]',
										syainep='$datas[9]',
										category='$datas[10]',
										reference='$datas[11]'
						where id_arghu='$datas[12]'";
			return mysqli_query($connectiondb,$sql);
		}
		public function deletedata($id_arghu){
			$obj= new connectdatabase();
			$connectiondb=$obj->connectiondb();

			$sql="DELETE from data_arghu where id_arghu='$id_arghu'";
			return mysqli_query($connectiondb,$sql);
		}
	}

 ?>