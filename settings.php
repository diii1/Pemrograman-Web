<?php

    // title page
    $title = "19081010010 | Raviy Bayu Setiaji";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pemweb";

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

    // univ UPN 
    $univ = "UPN Veteran Jawa Timur";

    // array for my friends 
    $dz = array("foto" => "images/dz.jpeg", "name" => "M. Ilham Dzulfikar", "univ" => "Universitas Muhammadiyah Sidoarjo", "asal" => "Sidoarjo");
    $aan = array("foto" => "images/aan.jpg", "name" => "Aan Evian Nanda", "univ" => $univ, "asal" => "Magetan");
    $alwin = array("foto" => "images/alwin.jpg", "name" => "M. Izdihar Alwin", "univ" => $univ, "asal" => "Kupang");
    $nando = array("foto" => "images/nando.jpeg", "name" => "Muhammad Alfyando", "univ" => $univ, "asal" => "Nganjuk");
    $indra = array("foto" => "images/indra.jpeg", "name" => "Indra Arsy Kaloka", "univ" => "UNTAG Surabaya", "asal" => "Sidoarjo");
    $diva = array("foto" => "images/diva.jpg", "name" => "Fatwa Zuhri D. P.", "univ" => $univ, "asal" => "Lamongan");
?>