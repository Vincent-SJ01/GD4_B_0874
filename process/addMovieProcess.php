<?php

    if(isset($_POST['addMovie'])){

        include('../db.php');

        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];


        $query = mysqli_query($con, "INSERT INTO movies(name, genre, realese, season, synopsis)
            VALUES ('$name', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con));

        if($query){
            echo '<script>alert("Add Movie Success");
                window.location = "../page/listMoviesPage.php";
                </script>';
        }else{
            echo '<script>alert("Add Movie Failed");
            window.history.back();
            </script>';
        }

    }



 ?>