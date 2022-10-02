<?php
    $conn = mysqli_connect("localhost","root","","multifitness") or die ("Connection failed: " .$conn->connection_error);
?>

<html>
    <head>
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/print.css">
    </head>

    <body>
        <div class="container">
            <div class="form-container">
                <div>
                    <h2>Enter your phone number</h2>
                </div>
                <div class="form">
                    <form method="post" action="receipt.php">
                        <div class="col-1">
                            <input type="text" name="user_id" class="form-control">
                        </div>
                        
                            <?php
                                if(isset($_POST['user_id'])){
                                    $phone = $_POST['user_id'];

                                    $sql = "SELECT * FROM booking WHERE phone = '$phone'";
                                    $result = mysqli_query($conn,$sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                        }
                                    }
                                }
                            ?>
                        <div class="col-2">
                            <button class="button" type="submit" name="print" value="print">Print</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>