<?php
    $conn = mysqli_connect("localhost","root","","multifitness") or die ("Connection failed: " .$conn->connection_erorr);

    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $sport = $_POST['sport'];
    $location = $_POST['location'];
    $date = $_POST['date'];

    //to insert data into table form from control
    $sql = "INSERT INTO booking(email, name, phone, sport, location, date) 
    VALUES('$email', '$name', '$phone', '$sport', '$location', '$date')";

    if(mysqli_query($conn, $sql)){
        header("location: print.php");
    }

    else{
        echo "Error " .$sql ."<br>" .mysqli_error($conn);
    }

    mysqli_close($conn);

?>