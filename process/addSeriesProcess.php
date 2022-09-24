<?php

    if(isset($_POST['add'])){

        include('../db.php');

        $name = $_POST['name'];
        $genre = implode(",", $_POST['genre']);
        $realese  = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $sypnopsis = $_POST['sypnopsis'];

        

        $query = mysqli_query($con,
            "INSERT INTO series(name, genre, realese, episode, season, sypnopsis)
                VALUES
            ('$name', '$genre', '$realese', '$episode', '$season', '$sypnopsis')")
                or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Add Series Success");
                window.location = "../page/listSeriesPage.php"
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