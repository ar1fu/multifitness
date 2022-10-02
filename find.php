<?php
    $conn = mysqli_connect("localhost","root","","multifitness") or die ("Connection failed: " .$conn->connection_error);
?>

<html>
    <head>
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/find.css">
    </head>

    <body>
    <div class="container">
            <div class="form-container">
                <form method="post">
                    <div>
                        <h2>Enter your phone number</h2>
                    </div>
                    <input class="form-control" type="text" name="user_id" class="search">
                    <input class="button" type="submit" name="search" value="Print">
                </form>
        
                <table>

        <?php
            if(isset($_POST['search'])){
                $phone = $_POST['user_id'];

                $sql = "SELECT * FROM booking WHERE phone = '$phone'";
                $result = mysqli_query($conn,$sql);

                while($row=mysqli_fetch_assoc($result)){
            ?>
            
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Sport</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th></th>
                        <th></th>
                        
                    </tr>
                    <tr>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['sport'];?></td>
                        <td><?php echo $row['location'];?></td>
                        <td><?php echo $row['date'];?></td>

                        <!--Edit option -->
                        <td><a href="edit.php?edit_id=<?php echo $row['user_id']; ?>" alt="edit">Change Date</a></td>
                                
                        <!--Delete option -->
                        <td><a href="delete.php?delete_id=<?php echo $row['user_id']; ?>" alt="Delete">Cancel Book</a></td>
                    </tr>
        <?php
                }
            }
        ?>
                </table>
            </div>
        </div>
    </body>
</html>