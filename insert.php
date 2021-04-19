  
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
      
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        $sql = "INSERT INTO user_signup (FirstName, LastName, PhoneNumber, Email)
        VALUES ('$fname', '$lname', '$phone', '$email')";
        
        if ($conn->query($sql) === TRUE) 
            {

            $conn->close();
            header("Location: http://localhost/landingPG.php");
                        exit();
           
            } else {
          echo "Error updating record: " . $conn->error;

          $conn->close();
        }

       
    }
?>
</html>