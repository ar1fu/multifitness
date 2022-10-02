<?php
    //Database Connection
    $conn = mysqli_connect("localhost","root","","multifitness") or die ("Connection failed: " . $conn->connect_error);

    //Get ID from Database
    if(isset($_GET['edit_id'])){
        $sql = "SELECT * FROM booking WHERE user_id =" .$_GET['edit_id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }

    //Update Information
    if(isset($_POST['btn-update'])){
        $date = $_POST['date'];
        
        $update = "UPDATE booking SET date='$date' WHERE user_id =". $_GET['edit_id'];
        $up = mysqli_query($conn, $update);

            if(!isset($sql)){
                die ("Error $sql" .mysqli_connect_error());
            }
            else{
                header("location: index.html");
            }
    }
?>

<!--Create Edit form -->
<html>
    <head>
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/edit.css">
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <form method="post">
                    <div>
                        <h1>Change Date</h1>
                    </div>
                    
                    <div>
                        <label>Date:</label>
                        <input class="form-control" type="date" name="date" value="<?php echo $row['date']; ?>"><br/><br/>
                    </div>
                    
                    <div>
                        <button class="button" type="submit" name="btn-update" onClick="update()"><strong>Update</strong></button>
                    </div>     
                </form>
            </div>
        </div>


        <!-- Alert for Updating -->
        <script>
            function update(){
            var x;
                if(confirm("Updated data Sucessfully") == true){
                    x= "update";
                }
            }
        </script>
    </body>
</html>