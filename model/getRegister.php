<?php
    require 'koneksi.php';
    session_start();
    if($_POST['type']==1){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];
        date_default_timezone_set('Asia/Jakarta');
        $created_at = date("Y-m-d h:i:s A");
        $updated_at = date("Y-m-d h:i:s A");
        
        $duplicate = mysqli_query($conn,"select * from freshforces_user where username = '$username'");
        if (mysqli_num_rows($duplicate)>0)
        {
            echo json_encode(array("statusCode"=>201));
        }
        else{
            $sql = "select max(id)+1 as id from freshforces_user";
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);
            $id = $id = $row['id'];
            $sql = "INSERT INTO `freshforces_user`( `id`, `username`, `password`, `repeat_password`, `created_at`, `updated_at`) 
            VALUES ($id, '$username', '$password', '$repeat_password', '$created_at', '$updated_at')";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(array("statusCode"=>200));
            } 
            else {
                echo json_encode(array("statusCode"=>201));
            }
        }
        mysqli_close($conn);
    }
?>