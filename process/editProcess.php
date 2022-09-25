<?php

    session_start();
    if(isset($_POST['userEdit'])){

        include('../db.php');

        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $email = $_POST['email'];
        $job = $_POST['job'];


        $userSekarang = $_SESSION['user'];
        $id = $userSekarang['id'];

        $data = mysqli_query($con, "SELECT * FROM users WHERE ((email = '$email' OR phonenum = '$phonenum') AND id != '$id') ") or die(mysqli_error($con));

        $cariData = mysqli_fetch_assoc($data);

        if($cariData == null) {
            $update = mysqli_query($con, "UPDATE users SET name = '$name', phonenum = '$phonenum', email = '$email', job = '$job' WHERE id = '$id'") or die(mysqli_error($con));

            echo "<script>alert('Berhasil Edit Data!')</script>";
            echo "<script> window.history.back() </script>";
        }else{
            if ($cariData['email'] == $email) {
                echo "<script>alert('Email Tidak Boleh Sama!')</script>";
                echo "<script> window.history.back() </script>";
            }else{
                echo "<script>alert('Nomor Telp Tidak Boleh Sama!!')</script>";
                echo "<script> window.history.back() </script>";
            }

        }

    }




 ?>