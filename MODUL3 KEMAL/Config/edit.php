<?php

include 'Connector.php';

 if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $namaMob = $_POST['Nama_Mobil'];
    $date = $_POST['Nama_Pem'];
    $brand = $_POST['Brand'];
    $tanggal_beli = $_POST['Tanggals'];
    $description = $_POST['Desc'];
    $file = $_FILES['File']['name'];
    $file_tmp = $_FILES['File']['tmp_name'];
    $status = $_POST['statusbayar'];

    if ($file_tmp) {
        move_uploaded_file($file_tmp, '../Asset/'.$file);
        $query = "UPDATE showroom_kemal_table SET nama_mobil = '$namaMob', pemilik_mobil = '$date', merk_mobil = '$brand', tanggal_beli = '$tanggal_beli', deskripsi = '$description', foto_mobil = '$file', status_pembayaran = '$status' id_mobil = $id";
        $result = mysqli_query($conn, $query);
    } else {
        $query = "UPDATE showroom_kemal_table SET nama_mobil = '$namaMob', pemilik_mobil = '$date', merk_mobil = '$brand', tanggal_beli = '$tanggal_beli', deskripsi = '$description', status_pembayaran = '$status' WHERE id_mobil = $id";
        $result = mysqli_query($conn, $query);
    }

    header('Location: ../Kemal_index.php?page=mycar');

}

