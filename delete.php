<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "bhgvat_contact";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

    $delete_id = $_GET['rn'];
    $query= "update `contactus` SET status='deactive' WHERE id = '$delete_id'";
    $data1=mysqli_query($conn,$query);
    if($data1){
        header('location:displayInfo.php');  
    }  
    else {
        echo "Not deleted";
    }
 ?>