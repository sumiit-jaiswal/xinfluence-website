<?php
$insert = false;
if(isset($_POST['Name'])){
    // Set connection variables
    $server = "127.0.0.1:3306";
    $username = "u141519867_xinfluencedb";
    $password = "9Thejaiswal100#2";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];

    $sql = "INSERT INTO `u141519867_xinfluencedb`.`query` (`Name`, `Email`, `Message`) VALUES ('$Name', '$Email', '$Message');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
     
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        echo "some error occured";
    }

    // Close the database connection
    $con->close();
}
