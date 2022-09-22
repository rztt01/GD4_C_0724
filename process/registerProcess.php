<?php
// ini buat ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php'); 

        // tampung nilai yang ada di from ke variable
        // sesuaikan variabel name yang ada di registerPage.php di setiap input
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name  = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];

        if($email != "") {
            $result = mysqli_query($con,"SELECT * FROM users where email='".$email."'");
            $num_rows = mysqli_num_rows($result);

            if($num_rows >= 1){
                
            }else{
                // melakukan insert ke database dengan query di bawah ini 
                $query = mysqli_query($con,
                    "INSERT INTO users(email, password, name, phonenum, membership)
                        VALUES  
                    ('$email', '$password', '$name', '$phonenum', '$membership')")
                    or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            }
        }

        if($query){
            echo
                '<script>
                alert("Register Success");
                window.location = "../index.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Register Failed");
                window.history.back();
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }

?>