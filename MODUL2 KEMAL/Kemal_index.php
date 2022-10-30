<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Kemal_index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Kemal_index.php?page=booking">Booking</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <?php 
            if(isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'booking':
                        include "Kemal_booking.php";
                        break;
                    case 'mybooking':
                        include "Kemal_mybooking.php";
                        break;
                }

            }else if (isset($_GET['type'])) {
                $type = $_GET['type'];

                if(in_array($type, ['alpard', 'pajero1', 'BMW'])) {
                    include "Kemal_booking.php";
                }
            }  else {
                include "Kemal_home.php";
            }
     ?>
     

    <footer  class="text-center bg-light py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Dibuat oleh Kemal Aziz_1202204329
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>