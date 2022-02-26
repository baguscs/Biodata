<?php
    // memulai sesi
    session_start();

    //include setting
    include('../connection/setting.php');

    // security XSS dan tangkap value
    $id = @$_POST['id'];
    $id = filter_var($id, FILTER_SANITIZE_STRIPPED);

    $save = @$_POST['save'];
    $save = filter_var($save, FILTER_SANITIZE_STRIPPED);

    if ($save == 'save') {
        $destroy = $connect->prepare('DELETE FROM pesan WHERE id=:id');

        //security SQL Injection
        $destroy->bindValue(':id', $id, PDO::PARAM_INT);
        
        try {
            $destroy->execute();
        } catch (Exeception $error) {
            die($error->getMessage());
        }

        //set session success
        $_SESSION['success'] = 'Data Berhasil Dihapus';

        header('Location:../view/dashboard.php');
    }
    else{
        //set session error
        $_SESSION['error'] = 'Akses Anda Dicekal';

        header('Location:../view/dashboard.php');
    }
?>