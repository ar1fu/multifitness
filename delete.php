<?php
    //Database Connection
    $conn = mysqli_connect("localhost","root","","multifitness") or die ("Connection failed: " . $conn->connect_error) ;
    
    //Get ID from Database
    if(isset($_GET['delete_id'])){
        $sql = "DELETE From booking WHERE user_id =" .$_GET['delete_id'];

        if (mysqli_query($conn, $sql)){
            echo "Delete successfully";
            header("location: index.html");
        }

        else{
            echo "No Data Found";
        }
    } 
    mysqli_close($conn);
?>