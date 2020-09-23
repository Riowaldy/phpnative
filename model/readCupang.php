<?php
    require 'koneksi.php';

    $sql = 'SELECT id, nama FROM cupang';
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result))
    {
        $data[] = $row;
    }
    echo json_encode($data);
?>