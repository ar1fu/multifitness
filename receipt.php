<?php
    $conn = mysqli_connect("localhost","root","","multifitness") or die ("Connection failed: " .$conn->connection_error);
?>

<html>
    <head>
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/recept.css">
    </head>

    <body>
        <div class="container">
            <div class="form-container">
                <div>
                    <img src="img/logo5.png">
                </div>
                <div>
                    <h2>Thank You</h2>
                </div>
                <div class="form">
                    <?php
                        if(isset($_POST['print'])){
                            $sql = "SELECT * FROM booking WHERE phone = " .$_POST['user_id'];
                            $result = mysqli_query($conn,$sql);

                            if($result->num_rows > 0){
                                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-1">
                        <div>
                            <h3>Email</h3>
                            <p><?php echo $row['email'];?></p>
                        </div>
                        
                        <div>
                            <h3>Name</h3>
                            <p><?php echo $row['name'];?></p>
                        </div>

                        <div>
                            <h3>Phone No</h3>
                            <p><?php echo $row['phone'];?></p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <h3>Sport</h3>
                            <p><?php echo $row['sport'];?></p>
                        </div>

                        <div>
                            <h3>location</h3>
                            <p><?php echo $row['location'];?></p>
                        </div>

                        <div>
                            <h3>Date</h3>
                            <p><?php echo $row['date'];?></p>
                        </div>
                    </div>
                    <?php
                                }
                            }
                        }
                    ?>
                </div>
                <div class="btn-form">
                    <button onclick=window.print() class="button">Print</button>
                    <button onclick="window.location.href='index.html';" class="button">Back</button>
                </div>                
            </div>
        </div>
    </body>
</html>