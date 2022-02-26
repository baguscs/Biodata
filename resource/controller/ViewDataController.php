<?php
    // memulai sesi
    session_start();

    //include setting
    include('../connection/setting.php');

    // security XSS dan tangkap value
    $id = @$_POST['id'];
    $id = filter_var($id, FILTER_SANITIZE_STRIPPED);

    $status = @$_POST['status'];
    $status = filter_var($status, FILTER_SANITIZE_STRIPPED);

    if ($status == 1) {
        $updateStatus = 0;
    }
    else{
        $updateStatus = 1;
    }

    $save = @$_POST['save'];
    $save = filter_var($save, FILTER_SANITIZE_STRIPPED);
    
    if ($status != null && $save == 'save') {
        $change = $connect->prepare('UPDATE pesan SET status=:status WHERE id=:id');

        //security SQL Injection
        $change->bindValue(':id', $id, PDO::PARAM_INT);
        $change->bindValue(':status', $updateStatus, PDO::PARAM_INT);
        
        try {
            $change->execute();
        } catch (Exeception $error) {
            die($error->getMessage());
        }

        //set session success
        if ($updateStatus == 1) {
            $_SESSION['success'] = 'Data Berhasil Ditampilkan';
        }
        else{
            $_SESSION['success'] = 'Data Berhasil Disembunyikan';
        }

        header('Location:../view/dashboard.php');
    }
    else{
        //set session error
        $_SESSION['error'] = 'Akses Anda Dicekal';

        header('Location:../view/dashboard.php');
    }
?>