<?php 
	require_once "../classes/config.php";
	require_once "../classes/crud.php";
	$obj= new crud();

	$datas=array(
		$_POST['nameeng'],
		$_POST['namenep'],
		$_POST['oldaddresseng'],
		$_POST['oldaddressnep'],
		$_POST['currentaddresseng'],
		$_POST['currentaddressnep'],
		$_POST['vetieng'],
		$_POST['vetinep'],
		$_POST['syaieng'],
		$_POST['syainep'],
		$_POST['category'],
		$_POST['reference2']);
	

	echo $obj->adddata($datas);
	

 ?>