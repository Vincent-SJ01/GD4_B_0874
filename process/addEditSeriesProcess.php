<?php

    if(isset($_POST['addSeries'])){

        include('../db.php');

        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $release = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $genreInput = implode(" - ", $genre);

        if($_POST['action'] == "tambah"){
            $query = mysqli_query($con, "INSERT INTO series(name, genre, realease, episode, season, synopsis)
                VALUES ('$name', '$genreInput', '$release', '$episode', '$season', '$synopsis')") or die(mysqli_error($con));

            if($query){
                echo '<script>alert("Add Series Success");
                    window.location = "../page/listSeriesPage.php";
                    </script>';
            }else{
                echo '<script>alert("Add Series Failed");
                window.history.back();
                </script>';
            }
        }else if($_POST['action'] == "edit"){

            $idUser = $_POST['idUser'];

            $query = mysqli_query($con,
                "UPDATE series SET name = '$name', genre= '$genreInput', realease = '$release', episode = '$episode', season = '$season', synopsis = '$synopsis' WHERE id = '$idUser';
            ") or die(mysqli_error($con));

            if($query){
                echo '<script>alert("Update Series Success");
                    window.location = "../page/listSeriesPage.php";
                    </script>';
            }else{
                echo '<script>alert("Update Series Failed");
                window.history.back();
                </script>';
            }
        }



    }


 ?>