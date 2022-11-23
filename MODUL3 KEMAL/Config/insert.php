<?php

include 'Connector.php';
    $namaMob = $_POST['Nama_Mobil'];
    $date = $_POST['Nama_Pem'];
    $brand = $_POST['Brand'];
    $tanggal_beli = $_POST['Tanggals'];
    $description = $_POST['Desc'];
    $file = $_FILES['File']['name'];
    $file_tmp = $_FILES['File']['tmp_name'];
    $status = $_POST['statusbayar'];

    move_uploaded_file($file_tmp, '../Asset/'.$file);
    $query = "INSERT INTO showroom_kemal_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namaMob', '$date', '$brand', '$tanggal_beli', '$description', '$fi1e', '$status')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: ../Kemal_index.php?page=mycar');
    } else {
        echo 'Gagal';
    }

?>