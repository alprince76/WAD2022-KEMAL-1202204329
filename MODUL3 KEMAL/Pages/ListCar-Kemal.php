<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul3 Kemal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/style1.css">

</head>
<body>

<section>
    <div class="title-form">
        <h1><b>My Showroom</b></h1>
        <p>List Showroom Kemal-1202204329</p>
    </div>

    <div class="containerCard">
        <?php
            include_once("Config/Connector.php");

            $result = mysqli_query($conn, 'SELECT * FROM showroom_kemal_table');

            if ($result) {
                while ($selects = mysqli_fetch_array($result)) {
            ?>

                    <div class="card">
                        <img src="Asset/<?php echo $selects['foto_mobil']; ?>" class="card-img-top img-card" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $selects['nama_mobil'] ?></h5>
                        <p class="card-text"><?php echo $selects['deskripsi'] ?></p>
                        <div class="bg-light btn-container">
                            <a href="Kemal_index.php?page=detail&id=<?= $selects['id_mobil'] ?>" class="btn btn-primary rounded-pill">Detail</a>
                            <a href="Config/deleted.php?id=<?= $selects['id_mobil'] ?>" class="btn btn-danger rounded-pill">Deleted</a>
                        </div>
                        </div>
                </div>
        <?php
                }
            }
        ?>
    </div>
</section>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>