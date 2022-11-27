<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul3 Kemal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/style1.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php
        include 'Config/Connector.php';

        function ColorNav($nilai) {
            echo $nilai;
        }

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark <?= ColorNav($_COOKIE['warna']) ?>" id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'login']) ? 'hide-nav' : '' ?>">
        <div class="container px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <a class="nav-link active"  aria-current="page" href="Kemal_index.php">Home</a>
                    <a class="nav-link" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" href="<?php
                  include 'Config/Connector.php';
                  include 'Config/Connector-User.php';
                  $query = "SELECT * FROM showroom_kemal_table";
                  $results = mysqli_query($conn, $query);

                  if (mysqli_num_rows($results) > 0) {
                     echo 'Kemal_index.php?page=mycar';
                  } else {
                     echo 'Kemal_index.php?page=additem';
                  }
                  ?>">Mycar</a>
                </div>
            </div>
            
            <div class="navbar-home">
                <div class="dropdown" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_COOKIE['nama'];?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Kemal_index.php?page=profil">Profile</a></li>
                        <li><a class="dropdown-item" href="Kemal_index.php?page=logout">Logout</a></li> 
                    </ul>
                </div>
                <div class="navcar">
                    <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link nav-login" href="Kemal_index.php?page=login">Login</a>
                </div>
            </div>
            <div>
             <a href="Kemal_index.php?page=additem" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="addcar-button">Add Car</a>
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
                case 'logout':
                    include "Config/logout.php";
                    break;
                case 'additem':
                    include "Pages/Add-Kemal.php";
                    break;
                case 'login':
                    include "Pages/Login-Kemal.php";
                    break;
                case 'register':
                    include "Pages/Register-Kemal.php";
                    break;
                case 'profil':
                    include "Pages/Profile-Kemal.php";
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
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E</script>
</body>
</html>