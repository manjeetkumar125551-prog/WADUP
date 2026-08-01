<?php
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = " ";
    $name = "myproject";

    include 'db.php';

    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row['username']."<br>";
            echo $row['password']."<br>";
            echo $row['email']."<br>";
            echo $row['phone']."<br>";
        }
    }else {
        echo "No data found.!!";
    }
?>