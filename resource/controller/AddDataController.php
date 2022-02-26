<?php
    // memulai sesi
    session_start();

    //include setting
    include('../connection/setting.php');

    //menangkap value dari form
    $say = @$_POST['say'];
    $title = @$_POST['title'];
    $describe = @$_POST['describe'];
    $save = @$_POST['save'];
    $request = @$_POST['request'];

    //security XSS
    $say = filter_var($say, FILTER_SANITIZE_STRIPPED);
    $title = filter_var($title, FILTER_SANITIZE_STRIPPED);
    $describe = filter_var($describe, FILTER_SANITIZE_STRIPPED);
    $save = filter_var($save, FILTER_SANITIZE_STRIPPED);

    if ($say && $title && $describe && $request && $save == 'save') {
        $prepare = $connect->prepare('INSERT INTO pesan(`sapaan`, `judul`, `deskripsi`) VALUES (:sapaan, :judul, :deskripsi)');

        //security SQL Injection
        $prepare->bindValue(':sapaan', $say, PDO::PARAM_STR);
        $prepare->bindValue(':judul', $title, PDO::PARAM_STR);
        $prepare->bindValue(':deskripsi', $describe, PDO::PARAM_STR);

        try {
            $prepare->execute();
        } catch (Exeception $error) {
            die($error->getMessage());
        }

        //set session success
        if ($request == 'user') {
            $_SESSION['success'] = 'Data Berhasil Disimpan';
            header('Location:../../index.php');
        } else if($request == 'admin'){
            $_SESSION['success'] = 'Data Berhasil Disimpan';
            header('Location:../view/dashboard.php');
        }
        
    }
    else{
        //set session error
        if ($request == 'user') {
            $_SESSION['error'] = 'Data Tidak Terisi Semua Mohon Cek Kembali';
            header('Location:../../index.php');
        } else if($request == 'admin'){
            $_SESSION['error'] = 'Data Tidak Terisi Semua Mohon Cek Kembali';
            header('Location:../view/dashboard.php');
        }
        
    }
?>