<?php
    if(isset($_POST['edit'])){

        include('../db.php');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = implode(",", $_POST['genre']);
        $realese  = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $sypnopsis = $_POST['sypnopsis'];

        

        $query = mysqli_query($con,
            "UPDATE series SET name = '$name', genre = '$genre', realese = '$realese' , episode = '$episode', season = '$season', sypnopsis = '$sypnopsis' WHERE id = '$id' ")
            or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Edit Series Success");
                window.location = "../page/listSeriesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Series Failed");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }

?>