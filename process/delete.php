<?php 
	
	require_once "../classes/config.php";
	require_once "../classes/crud.php";

	$obj= new crud();

	echo $obj->deletedata($_POST['id_arghu']);

 ?>