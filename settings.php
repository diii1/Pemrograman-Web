<?php

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

    $sql = "SELECT * FROM biodata WHERE id = 1";
    $result = $conn->query($sql);

    // title page
    $title = "19081010010 | Raviy Bayu Setiaji";

    // biodata
    $profil = "images/bayu.jpg";
    $fname = "Raviy Bayu Setiaji";
    $panggilan = "Bayu";
    $email = "bayu.setiaji709@gmail.com";
    $instagram = "https://www.instagram.com/raviy_bayu/";
    $address = "Prasung Tani RT 01. RW 01. Kec. Buduran Kab. Sidoarjo Jawa Timur";

    $descAbout = "Saya adalah anak ke 5 dari 5 bersaudara. Saya sekarang berumur 21 tahun, sedang berkuliah di UPN Veteran Jawa Timur. Saya menempuh semester 5 di program studi Informatika. Saya memiliki hobi, yaitu : bermain game, memancing, badminton, dan sepak bola. Saya bertempat tinggal di Sidoarjo Jawa Timur.";
    
    // array for study
    $studySD = array("Tempat" => "SDN Wadungasih I", "Lama Studi" => "6 Tahun", "Tahun Lulus" => "2013");
    $studySMP = array("Tempat" => "SMPN 1 Buduran", "Lama Studi" => "3 Tahun", "Tahun Lulus" => "2016");
    $studySMK = array("Tempat" => "SMKN 2 Buduran", "Lama Studi" => "3 Tahun", "Tahun Lulus" => "2019");

    $descSkill = "Bahasa pemrograman yang sebelumnya sudah saya pelajari. Saya belajar mulai dari jenjang sebelumnya di Sekolah Menengah Kejuruan dan Universitas. Saya juga belajar dari luar kegiatan akademik.";

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