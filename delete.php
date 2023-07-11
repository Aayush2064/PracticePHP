<?php include 'connection.php'?>

<?php
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        // echo $id;
          $delete = "DELETE FROM `practice3` WHERE `id` = '$id'" ;
          if ($con->query($delete) === True) {
            header('location:tpractice.php');
         
         } 
    }
