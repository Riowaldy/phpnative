<?php
    require 'koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $sql = "UPDATE `cupang` 
	SET `nama` = '$nama' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>