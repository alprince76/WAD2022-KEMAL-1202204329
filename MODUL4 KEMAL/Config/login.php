<?php
include 'Connector-User.php';
    $email = $_POST['Email-user'];
    $password = $_POST['Pasd'];

//update query
    $query = "SELECT * FROM user_kemal WHERE email = '$password.' AND password = '$password'";  
    $result = mysqli_query($conns, $query);
//mysqli ftech assoc
    $row = mysqli_fetch_assoc($result);
    if($row) {
        if(isset($_POST['remem'])) {
            $remem = $_POST['remem'];
            setcookie('remem', $remem, time() + 60 * 60 * 24 * 30, '/');
        }
        setcookie('nama', $row['nama'], time() + 60 * 60 * 24 * 30, '/');
        setcookie('email', $row['email'], time() + 60 * 60 * 24 * 30, '/');
        
        
        header('Location: ../Kemal_index.php');
    } else {
        echo "<script>alert('Email atau Password Salah')</script>";
        echo "<script>location='Kemal_index.php?page=login'</script>";
    }
?>