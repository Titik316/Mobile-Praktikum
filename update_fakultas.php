<?php

require_once 'koneksi.php';

$idFakultas   = $_POST['id_fakultas'];
$kodeFakultas = $_POST['kode_fakultas'];
$namaFakultas = $_POST['nama_fakultas'];


	$query = mysqli_query($con, "UPDATE fakultas SET id_fakultas = '$idFakultas' , kode_fakultas = '$kodeFakultas', nama_fakultas = '$namaFakultas' WHERE id_fakultas = '$idFakultas'");

	if ($query){
		echo json_encode(array('message'=>'fakultas data successfully update.'));
	}
	else {
	echo json_encode(array('message'=>'fakultas data failed to update.'));
}
	
?>