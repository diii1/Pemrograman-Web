<?php
    include ('../../conn.php');

    $status = '';
    $result = '';
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            //query SQL
            $query = "SELECT * FROM description WHERE id = '$id'";
  
            //eksekusi query
            $result = mysqli_query(connection(),$query);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $profil = $_POST['profil'];
        $name = $_POST['name'];
        $shortName = $_POST['shortName'];
        $email = $_POST['email'];
        $instagram = $_POST['instagram'];
        $alamat = $_POST['alamat'];
        //query SQL
        $sql = "UPDATE biodata SET profil='$profil', name='$name', short_name='$shortName', email='$email', instagram='$instagram', alamat='$alamat' WHERE id='$id'"; 

        //eksekusi query
        $result = mysqli_query(connection(),$sql);
        if ($result) {
            $status = 'update';
        }
        else{
            $status = 'err';
        }
        header('Location: ../../biodata.php?status='.$status);
        die();
    }
?>