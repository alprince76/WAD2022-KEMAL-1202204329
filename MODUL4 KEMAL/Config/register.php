<?php

include 'Connector-User.php';
   $email = $_POST['Email-user'];
   $nama = $_POST['Nama_Pem'];
   $password = $_POST['Pasd'];
   $Numb = $_POST['Numb'];
   $confirm = $_POST['Pass'];

   if ($password == $confirm) {
       $query = "INSERT INTO user_kemal(nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$Numb')";
       $result = mysqli_query($conns, $query);

    if ($query) {
       setcookie('nama', $nama, time() + 60 * 60 * 24 * 30, '/');
       setcookie('email', $email, time() + 60 * 60 * 24 * 30, '/');
       setcookie('password', $password, time() + 60 * 60 * 24 * 30, '/');
       setcookie('no_hp', $Numb, time() + 60 * 60 * 24 * 30, '/');       

       header('Location: ../Kemal_index.php?page=login');
    }else {
        echo 'Gagal';
    }
} else {
    echo 'Password tidak sama';
}