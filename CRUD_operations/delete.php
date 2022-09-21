<?php 
    $id = $_GET['id'];    

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

    $sql = "DELETE FROM clients WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header( "Location: index.php" );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
