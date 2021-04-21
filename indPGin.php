<html>

<?php


    include 'ConnectionDB.php';
    

    $credentials = davidsonrentalsdb();
    extract($credentials);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      
           $make = $_POST["make"];
          $model = $_POST["model"];
           $year = $_POST["year"];
        $mileage = $_POST["mileage"];
          $price = $_POST["price"];

        $sql = "INSERT INTO car_info (Make, Model, Year, Mileage, Price)
        VALUES ('$make', '$model', '$year', '$mileage', '$price')";
        
        if ($conn->query($sql) === TRUE) 
            {

            $conn->close();
            header("Location: http://localhost/newcar.php");
                        exit();;
           
            } else {
          echo "Error updating record: " . $conn->error;

          $conn->close();
        }

       
    }
?>
</html>