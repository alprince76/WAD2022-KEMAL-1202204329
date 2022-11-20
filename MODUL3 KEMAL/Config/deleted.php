<?php 

include "Connector.php";

 $id = $_GET['id'];

    $image = mysqli_query($conn, "SELECT foto_mobil FROM showroom_kemal_table WHERE id_mobil = $id");
    $row = mysqli_fetch_assoc($image);

    unlink("../Asset/".$row['foto_mobil']);

    $query = "DELETE FROM showroom_kemal_table WHERE id_mobil = $id";
    $result = mysqli_query($conn, $query);

    header('Location: ../Kemal_index.php?page=mycar');

?>