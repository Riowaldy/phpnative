<?php
    require 'koneksi.php';
    $sql = "select max(id)+1 as id from cupang";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);

    $id = $row['id'];
    $nama = $_POST['nama'];

    $sql = "INSERT INTO cupang (id, nama)
    VALUES ($id, '$nama')";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>