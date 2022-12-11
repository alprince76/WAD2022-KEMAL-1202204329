<?php




// Path: Config\edit-profil.php
 include 'Connector-User.php';
    $email = $_POST['Email-user'];
    $nama = $_POST['Nama_Pem'];
    $update_pass = $_POST['Pasd'];
    $Numb = $_POST['Numb'];
    $confirm_pass = $_POST['Pass'];
    $warna = $_POST['warna'];

    if(!empty($update_pass) && !empty ($confirm_pass)) {
        if ($update_pass == $confirm_pass) {
            $query = "UPDATE user_kemal SET nama = '$nama', email = '$email', password = '$update_pass', no_hp = '$Numb' WHERE email = '$email'";
            $result = mysqli_query($conns, $query);

            if ($query) {
                setcookie('nama', $nama, time() + 60 * 60 * 24 * 30, '/');
                setcookie('email', $email, time() + 60 * 60 * 24 * 30, '/');
                setcookie('password', $password, time() + 60 * 60 * 24 * 30, '/');
                setcookie('no_hp', $Numb, time() + 60 * 60 * 24 * 30, '/');
                setcookie('warna', $warna, time() + 60 * 60 * 24 * 30, '/');    

                header('Location: ../Kemal_index.php');
            }else {
                echo 'Gagal';
            }
        } else {
            echo 'Password tidak sama';
        }
    } else {
        $query = "UPDATE user_kemal SET nama = '$nama', email = '$email', no_hp = '$Numb' WHERE email = '$email'";
        $result = mysqli_query($conns, $query);

        if ($query) {
            setcookie('nama', $nama, time() + 60 * 60 * 24 * 30, '/');
            setcookie('email', $email, time() + 60 * 60 * 24 * 30, '/');
            setcookie('no_hp', $Numb, time() + 60 * 60 * 24 * 30, '/');
            setcookie('warna', $warna, time() + 60 * 60 * 24 * 30, '/');       

            header('Location: ../Kemal_index.php');
        }else {
            echo 'Gagal';
        }
    }