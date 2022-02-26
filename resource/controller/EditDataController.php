<?php
    // memulai sesi
    session_start();

    //include setting
    include('../connection/setting.php');

    // security XSS dan tangkap value
    $id = @$_POST['id'];
    $id = filter_var($id, FILTER_SANITIZE_STRIPPED);

    //menangkap value dari form
    $say = @$_POST['say'];
    $title = @$_POST['title'];
    $describe = @$_POST['describe'];
    $save = @$_POST['save'];

    //security XSS
    $say = filter_var($say, FILTER_SANITIZE_STRIPPED);
    $title = filter_var($title, FILTER_SANITIZE_STRIPPED);
    $describe = filter_var($describe, FILTER_SANITIZE_STRIPPED);
    $save = filter_var($save, FILTER_SANITIZE_STRIPPED);

    if ($say && $title && $describe && $save == 'save') {
        $prepare = $connect->prepare('UPDATE pesan SET sapaan=:sapaan, judul=:judul, deskripsi=:deskripsi WHERE id=:id');

        //security SQL Injection
        $prepare->bindValue(':sapaan', $say, PDO::PARAM_STR);
        $prepare->bindValue(':judul', $title, PDO::PARAM_STR);
        $prepare->bindValue(':deskripsi', $describe, PDO::PARAM_STR);
        $prepare->bindValue(':id', $id, PDO::PARAM_STR);

        try {
            $prepare->execute();
        } catch (Exeception $error) {
            die($error->getMessage());
        }

        //set session success
        $_SESSION['success'] = 'Data '.$title.' Berhasil Diedit';

        header('Location:../view/dashboard.php');
    }
    else{
        //set session error
        $_SESSION['error'] = 'Data Tidak Terisi Semua Mohon Cek Kembali';

        header('Location:../view/dashboard.php');
    }
?>