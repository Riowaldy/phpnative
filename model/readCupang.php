<?php
    require 'koneksi.php';

    $sql = 'SELECT id, nama FROM cupang';
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result))
    {
        echo
        '<tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["nama"].'</td>
            <td>
                <div class="text-center">
                    <div class="btn-group btn-group-solid">
                        <a href="#edit" class="btn btn-primary btn-raised btn-xs" data-toggle="modal" data-target="#form-edit" id="btn-edit" title="Ubah Data"><i class="fas fa-edit"></i></a>
                        <a href="#hapus" class="btn btn-danger btn-raised btn-xs" id="btn-hapus" title="Hapus Data"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </td>
        </tr>';
    }
?>