<?php
    require 'koneksi.php';
    $sql = "select max(id)+1 as id from cupang";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);

    $id = $row['id'];
    $nama = $_POST['nama'];
    date_default_timezone_set('Asia/Jakarta');
    $updated_at = date("Y-m-d h:i:s A");
    $created_at = date("Y-m-d h:i:s A");

    $sql = "INSERT INTO cupang (id, nama, updated_at, created_at)
    VALUES ($id, '$nama', '$updated_at', '$created_at')";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>