<?php
    set($_COOKIE['nama']);
    unset($_COOKIE['email']);
    unset($_COOKIE['password']);
    unset($_COOKIE['Numb']);
    unset($_COOKIE['warna']);
    setcookie('nama', '', time()-3600, '/');
    setcookie('email', '', time()-3600, '/');
    setcookie('password', '', time()-3600, '/');
    setcookie('no_hp', '', time()-3600, '/');
    setcookie('warna', '', time()-3600, '/');
    
    header('location: Kemal_index.php');
?>