<?php

require 'koneksi.php';

$idFakultas = $_POST['id_fakultas'];

if (!$idFakultas){
	echo json_encode(array('message'=>'required field is empty'));
}
else {
	$query = mysqli_query($con, "DELETE FROM fakultas WHERE id_fakultas = '$idFakultas'");

	if($query) {
	echo json_encode(array('message'=>'fakultas data succesfully deleted.'));
	}
	else {
	echo json_encode(array('message'=>'fakultas data failed to delete.'));
	}
}
?>