<?php 

    $servername = "localhost";
    $username = "owner";
    $password = "testing123$";
    $dbname = "myshop";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $name = $_POST['nameIn'];
    $email = $_POST['emailIn'];
    $phone = $_POST['phoneIn'];
    $address = $_POST['addressIn'];

    $sql = "INSERT INTO clients (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
    
    if (mysqli_query($conn, $sql)) {
        header( "Location: index.php" );
    } else {
      echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>