<?php
    include("dbConn.php");

    if(isset($_POST['submit']))
    {		
        $postName = $_POST['name'];
        $postEmail = $_POST['email'];
        $postSubject = $_POST['subject'];
        $postMessage = $_POST['message'];

        $query = "INSERT INTO messages(name, email, subject, message) VALUES ('$postName','$postEmail','$postSubject','$postMessage')";
        $insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if(!$insert)
        {
            echo mysqli_error();
        }
        else
        {
            header("Location: http://localhost/Bayu/Pemrograman-Web");
            die();
        }
    }
    $conn->close();
?>