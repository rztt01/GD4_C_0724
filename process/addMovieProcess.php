<?php

    if(isset($_POST['add'])){

        include('../db.php');

        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese  = $_POST['realese'];
        $season = $_POST['season'];
        $sypnopsis = $_POST['sypnopsis'];

        $query = mysqli_query($con,
            "INSERT INTO movies(name, genre, realese, season, sypnopsis)
                VALUES
            ('$name', '$genre', '$realese', '$season', '$sypnopsis')")
                or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Add Movie Success");
                window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Add Movie Failed");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }

?>