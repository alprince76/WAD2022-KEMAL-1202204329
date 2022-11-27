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

    <section class="register">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>


        <div class="bg-gridtong">
        <div class="card-body px-4 py-5 px-md-5">
            <form action="Config/register.php" method="post">
                    <div> <h1>Register</h1></div>
                    <div class="mb-3">
                        <label for="Name1" class="form-label"><b>Email</b></label>
                        <input type="email" value="" placeholder="Email" name="Email-user" class="form-control" id="Email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="Date1" class="form-label"><b>Nama</b></label>
                        <input type="text" value="" placeholder="Nama" name="Nama_Pem" class="form-control" id="Uname1">
                    </div>
                    <div class="mb-3">
                        <label for="Time1" class="form-label"><b>Nomor Handphone</b></label>
                        <input type="text" value=""  name="Numb" class="form-control" id="Numb1">
                    </div>
                    <div class="mb-3">
                        <label for="DaysDur" class="form-label"><b>Kata Sandi</b></label>
                        <input type="password" value="" placeholder="Password" name="Pasd" class="form-control" id="DaysDur">
                    </div>
                    <div class="mb-3">
                        <label for="DaysDur" class="form-label"><b>Konfirmasi Kata Sandi</b></label>
                        <input type="password" value="" name="Pass" class="form-control" id="DaysDur">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary booking-cta" value="Daftar">
                    </div>
                    <div class="notedS">
                        <p>Anda sudah punya akun? <a href="Kemal_index.php?page=login">Login</a></p>
                    </div>
            </form>
        </div>
        </div>

    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>