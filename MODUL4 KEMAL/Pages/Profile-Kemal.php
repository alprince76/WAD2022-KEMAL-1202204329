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
    include 'Config/Connector-User.php';

    $email = $_COOKIE['email'];
    $query = mysqli_query($conns, "SELECT * FROM user_kemal WHERE email = '$email'");
    $result = mysqli_fetch_assoc($query);
?>
      <section class="profile">
        <div class="">
            <form action="Config/edit-profil.php" method="post">
              <div class="container mt-5">
                <div class="judul-kategori">
                  <h5 class="text-center">Profile</h5>
              </div>
              <div class="form-group mb-3 wit row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" name="Email-user" id="staticEmail" value="<?=$email?>">
                </div>
              </div>
              <div class="form-group mb-3 wit row">
                  <label for="profilename" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="profilename" name="Nama_Pem" value="<?=$result['nama']?>">
                  </div>
              </div>
              <div class="form-group mb-4 wit row">
                  <label for="profileno" class="col-sm-2 col-form-label">No Handphone</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="profileno" name="Numb" value="<?=$result['no_hp']?>">
                  </div>
              </div>
              <hr class="mb-4">
              <div class="form-group mb-4 wit row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" name="Pasd" value="">
              </div>
              <div class="form-group mt-2 wit row">
              <label for="confirmpassword" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
              <input type="password" class="form-control" id="confirmpassword" name="Pass" value="">
              </div>

              <div class="form-group mt-2 wit row">
              <label for="car" class="col-sm-2 col-form-label">Navbar</label>
              <div class="col-sm-10">
                        <select name="warna" id="warna" class="form-select">
                            <option value="" disabled>Pilih Warna</option>
                            <option value="" <?= !isset($_COOKIE['warna']) ? 'selected' : ''  ?>>Default</option>
                            <option value="pink" <?= isset($_COOKIE['warna']) && $_COOKIE['warna'] == 'pink' ? 'selected' : '' ?>>Pink</option>
                            <option value="black" <?= isset($_COOKIE['warna']) && $_COOKIE['warna'] == 'black' ? 'selected' : '' ?>>Black</option>
                            <option value="purple" <?= isset($_COOKIE['warna']) && $_COOKIE['warna'] == 'purple' ? 'selected' : '' ?>>Purple</option>
                        </select>
              </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
            </div>
                        <div class="rows-home d-flex">
                            <div>
                                <img src="Asset/logo-ead 1.png" alt="logo ead">
                            </div>
                            <div class="nim">
                                <p> Kemal Aziz_1202204329</p> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
