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
    
    $id = $_POST['IDin'];
    $name = $_POST['nameIn'];
    $email = $_POST['emailIn'];
    $phone = $_POST['phoneIn'];
    $address = $_POST['addressIn'];

    $sql = "UPDATE clients SET name='$name', email='$email', phone='$email', address='$address' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
       header( "Location: index.php" );
    } else {
      echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);


?>