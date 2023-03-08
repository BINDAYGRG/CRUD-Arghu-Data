<?php 
	
	require_once "../classes/config.php";
	require_once "../classes/crud.php";

	$obj= new crud();

	echo json_encode($obj->getData($_POST['id_arghu']));

 ?>