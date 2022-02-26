<?php
    // memulai sesi
    session_start();

    //include setting
    include('../connection/setting.php');

    // security XSS dan tangkap value
    $id = @$_POST['id'];
    $id = filter_var($id, FILTER_SANITIZE_STRIPPED);

    // tangkap nama file
    $nameImg = $_FILES['foto']['name'];

    //tangkap file temporary
    $tmp = $_FILES['foto']['tmp_name'];

    // tangkap ukuran file
    $size = $_FILES['foto']['size'];

    // tempat penyimpanan
    $targetDir = "../../assets/image/storage/";

    // ambil date
    $today = date('YmdHis');

    // nama file yang akan tersimpan
    $targetFile = $targetDir.basename($today."_".$nameImg);

    $sendImg = $today."_".$nameImg;

    // periksa extensi file
    if (!getimagesize($tmp)) {
        //set session error
        $_SESSION['error'] = 'File Bukan Foto';

        header('Location:../view/dashboard.php');
    }

    //batasi ukuran file
    if ($size>1000000) {
        //set session error
        $_SESSION['error'] = 'Ukuran File Melebihi 1 MB';

        header('Location:../view/dashboard.php');
    }

    if (!move_uploaded_file($tmp, $targetFile)) {
        //set session error
        $_SESSION['error'] = 'Gagal Diupload';

        header('Location:../view/dashboard.php');
    }else{
        if ($id && $targetFile) {
            $upload = $connect->prepare('UPDATE pesan SET foto=:fileFoto WHERE id=:id');

            //security SQL Injection
            $upload->bindValue(':fileFoto', $sendImg, PDO::PARAM_STR);
            $upload->bindValue(':id', $id, PDO::PARAM_STR);

            try {
                $upload->execute();
            } catch (Exeception $error) {
                die($error->getMessage());
            }
    
            //set session success
            $_SESSION['success'] = 'Upload Foto Data '.$title.' Telah Berhasil';
    
            header('Location:../view/dashboard.php');
        }
        else {
            //set session error
            $_SESSION['error'] = 'Upload Foto Gagal';

            header('Location:../view/dashboard.php');
        }
    }
?>