<?php 

    include('../../conn.php');

    $status = '';
    $result = '';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            //query SQL
            $id = $_GET['id'];
            $query = "DELETE FROM studi WHERE id = '$id'"; 
  
            //eksekusi query
            $result = mysqli_query(connection(),$query);
  
            if ($result) {
              $status = 'delete';
            }
            else{
              $status = 'errDelete';
            }
  
            //redirect ke halaman lain
            header('Location: ../../studi.php?status='.$status);
            die();
        }  
    }

?>