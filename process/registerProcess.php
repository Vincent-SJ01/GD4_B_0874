<?php
    if(isset($_POST['register'])){

        include('../db.php');

        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];
        $job = $_POST['job'];

        $validPhone = true;
        $validEmail = true;


        $dataUser = mysqli_query($con, "SELECT * FROM users WHERE (email = '$email' OR phonenum = '$phonenum')") OR die(mysqli_error($con));


        $data = mysqli_fetch_assoc($dataUser);

        if($data == null){

            $query = mysqli_query($con, "INSERT INTO users(email, password, name, phonenum, membership, job) VALUES ('$email', '$password', '$name', '$phonenum', '$membership', '$job')") or die(mysqli_error($con));

            if($query){
                echo '<script>alert("Register Success");
                    window.location = "../index.php"
                    </script>';
            }else{
                echo '<script>alert("Register Failed");
                </script>';
            }
        }else if($email == $data['email']){
            echo '<script>alert("Email Harus Unik");
            </script>';
            echo
            '<script> window.history.back() </script>';
        }else {
            echo '<script>alert("No Telp Harus Unik");
            </script>';
            echo
            '<script> window.history.back() </script>';
        }


    }else{
        echo
        '<script> window.history.back() </script>';
    }
?>