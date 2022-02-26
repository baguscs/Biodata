<?php
    // memulai sesi
    session_start();

    //include setting
    include('../connection/setting.php');

    //menangkap value dari form
    $username = @$_POST['username'];
    $password = @$_POST['password'];

    //security XSS
    $username = filter_var($username, FILTER_SANITIZE_STRIPPED);
    $password = filter_var($password, FILTER_SANITIZE_STRIPPED);

    if ($username && $password) {
        $check = $connect->prepare('SELECT * FROM users WHERE username=:username AND password=:password');

        //security SQL Injection
        $check->bindValue(':username', $username, PDO::PARAM_STR);
        $check->bindValue(':password', $password, PDO::PARAM_STR);

        try {
            $check->execute();

            // tangkap hasil execute
            $data = $check->fetch(PDO::FETCH_ASSOC);
            if ($data === false) {
                //set session error
                $_SESSION['error'] = 'Akun Tidak Ditemukan, Cek Kembali Username dan Password Anda!';
                header('Location:../../index.php');
            }
            else{
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['id'] = $data['id'];
                
                $_SESSION['login'] = 'Hallo '.$data['nama']. ' Selamat Datang!!';
                header('Location:../view/dashboard.php');
            }

        } catch (Exeception $error) {
            die($error->getMessage());
        }
    }
?>