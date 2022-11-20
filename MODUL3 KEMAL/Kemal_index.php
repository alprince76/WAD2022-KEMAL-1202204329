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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Kemal_index.php">Home</a>
                    <a class="nav-link" href="<?php
                  include 'Config/Connector.php';

                  $query = "SELECT * FROM showroom_kemal_table";
                  $results = mysqli_query($conn, $query);

                  if (mysqli_num_rows($results) > 0) {
                     echo 'Kema_index.php?page=mycar';
                  } else {
                     echo 'Kemal_index.php?page=additem';
                  }
                  ?>">Mycar</a>
                </div>
            </div>
            <div>
            <?php
            if (isset($_GET['page']) && $_GET['page'] == 'mycar') {
               echo '<a href="Kemal_index.php?page=additem" class="addcar-button">Add Car</a>';
            }
            ?>
            </div>
        </div>
    </nav>

    <?php
        if (isset($_GET['page']) && isset($_GET['id'])) {
            $page = $_GET['page'];
            $id = $_GET['id'];

            switch ($page) {
                case 'detail':
                    include "Pages/Detail-Kemal.php";
                    break;
                case 'edit':
                    include "Pages/Edit-Kemal.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman yang anda cari tidak di temukan !</h3></center>";
                    break;
            }
        } else if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'mycar':
                    include "Pages/ListCar-Kemal.php";
                    break;
                case 'additem':
                    include "Pages/Add-Kemal.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman yang anda cari tidak di temukan !</h3></center>";
                    break;
            }
        }
        else {
            include "Pages/Home-Kemal.php";
        }
    ?>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>