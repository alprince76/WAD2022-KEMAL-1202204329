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
        <div class="container">
            <div class="row home-banner">
                <div class="col home-title">
                    <h1 class="display-4"><b>Selamat Datang di Showroom Kemal</b></h1>
                    <p class="lead">Rasakan service terbaik dengan layanan kami.</p>
                    <a href="<?php
                  include 'config/connector.php';

                  $query = "SELECT * FROM showroom_kemal_table";
                  $results = mysqli_query($conn, $query);

                  if (mysqli_num_rows($results) > 0) {
                     echo 'Kemal_index.php?page=mycar';
                  } else {
                     echo 'Kemal_index.php?page=additem';
                  }
                  ?>">
                        <button type="button" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="btn btn-primary btn-lg">Mycar</button> 
                    </a>
                    <div class="rows-home d-flex">
                        <div>
                            <img src="Asset/logo-ead 1.png" alt="logo ead">
                        </div>
                        <div class="nim">
                            <p> Kemal Aziz_1202204329</p> 
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="Asset/Image.png" alt="Mycar" class="img-fluid">
                </div>
            </div>
        </div>

    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>