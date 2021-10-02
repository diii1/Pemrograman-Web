<?php
    // title page
    $title = "19081010010 | Raviy Bayu Setiaji";

    $servername = "localhost";
    $username = "dev_web";
    $password = "masukaja12";
    $dbname = "dev_web";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sqlBiodata = "SELECT * FROM biodata WHERE id=1";
    $resultBiodata = $conn->query($sqlBiodata);

    if ($resultBiodata->num_rows > 0){
        while($row = $resultBiodata->fetch_assoc()){
            $name = $row['name'];
            $profile = $row['profil'];
            $sName = $row['short_name'];
            $email = $row['email'];
            $instagram = $row['instagram'];
            $alamat = $row['alamat'];
        }
    }
    
    $sqlAbout = "SELECT * FROM description WHERE id=1";
    $resultAbout = $conn->query($sqlAbout);

    if ($resultAbout->num_rows > 0){
        while($row = $resultAbout->fetch_assoc()){
            $descAbout = $row['description'];
        }
    }

    $sqlSkill = "SELECT * FROM description WHERE id=2";
    $resultSkill = $conn->query($sqlSkill);

    if ($resultSkill->num_rows > 0){
        while($row = $resultSkill->fetch_assoc()){
            $descSkill = $row['description'];
        }
    }

    $sqlStudi = "SELECT * FROM studi";
    $resultStudi = $conn->query($sqlStudi);

    $sqlFriends = "SELECT * FROM teman";
    $resultFriends = $conn->query($sqlFriends);

    $sqlCreativeSkill = "SELECT * FROM skill";
    $resultCreativeSkill = $conn->query($sqlCreativeSkill);
?>