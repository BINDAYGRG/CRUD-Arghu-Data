<?php 
	require_once "../classes/config.php";
	require_once "../classes/crud.php";
	$obj= new crud();

	$datas=array(
		$_POST['nameeng2'],
		$_POST['namenep2'],
		$_POST['oldaddresseng2'],
		$_POST['oldaddressnep2'],
		$_POST['currentaddresseng2'],
		$_POST['currentaddressnep2'],
		$_POST['vetieng2e'],
		$_POST['vetinep2e'],
		$_POST['syaieng2e'],
		$_POST['syainep2e'],
		$_POST['category2e'],
		$_POST['reference2e2'],
		$_POST['id_arghu']
				);

	echo $obj->updateData($datas);
	

 ?>