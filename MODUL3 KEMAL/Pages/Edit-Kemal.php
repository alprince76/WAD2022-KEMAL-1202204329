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
    <?php 
        include 'Config/Connector.php';

        $id = $_GET['id'];

        $result = mysqli_query($conn, "SELECT * FROM showroom_kemal_table WHERE id_mobil=$id");
        $data = mysqli_fetch_assoc($result);
    ?>
    <section">
        <div class="title-form">
            <h1><b>Edit</b></h1>
            <p><?= $data['nama_mobil'] ?></p>
        </div>
        <div class="gridtong">
            <div class="img-detail">
                <img src="Asset/<?= $data['foto_mobil']?>" alt="">
            </div>
            <form action="Config/edit.php" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="Name1" class="form-label"><b>Nama Mobil</b></label>
                        <input type="text" value="<?=$data['nama_mobil']?>" placeholder="BMW i4" name="Nama_Mobil" class="form-control" id="Name1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="Date1" class="form-label"><b>Nama Pemilik</b></label>
                        <input type="text" value="<?=$data['pemilik_mobil']?>" name="Nama_Pem" class="form-control" id="Uname1">
                    </div>
                    <div class="mb-3">
                        <label for="Time1" class="form-label"><b>Merk</b></label>
                        <input type="text" value="<?=$data['merk_mobil']?>" placeholder="BMW" name="Brand" class="form-control" id="brand1">
                    </div>
                    <div class="mb-3">
                        <label for="DaysDur" class="form-label"><b>Tanggal Beli</b></label>
                        <input type="date" value="<?=$data['tanggal_beli']?>" name="Tanggals" class="form-control" id="DaysDur">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
                        <textarea class="form-control" value=">"  name="Desc" placeholder="Kita disini menjaga sesama perasaan seluruh kustomer kami" id="exampleFormControlTextarea1" rows="3"><?=$data['deskripsi']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Time1" class="form-label"><b>Foto</b></label>
                        <input type="file" value="" name="File" class="form-control" id="file1">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusbayar"  <?php echo $data['status_pembayaran'] == 'lunas' ? 'checked' : '' ?> <?php echo $data['status_pembayaran'] == 'belum lunas' ? 'disabled' : '' ?>id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusbayar" <?php echo $data['status_pembayaran'] == 'belum lunas' ? 'checked' : '' ?> <?php echo $data['status_pembayaran'] == 'lunas' ? 'disabled' : '' ?> id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum Lunas
                        </label>
                    </div>
                        <input type="submit" class="btn btn-primary booking-cta" name="edit" value="save">
                        <input type="hidden" name="id" value="<?= $data['id_mobil'] ?>">
                    </div>
                    
            </form>
        </div>

    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>