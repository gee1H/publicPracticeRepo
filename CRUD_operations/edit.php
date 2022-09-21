<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Entry</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
</head>
<body>
    <h1 style="padding: 10px">Edit Client</h1>
    <hr>

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

            $sql = "SELECT * FROM clients WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);

                $name = $row["name"];
                $email = $row["email"];
                $phone = $row["phone"];
                $address = $row["address"];

            } else {
                echo "0 results";
            }
    
            mysqli_close($conn);
    ?>

    <form action="update.php" method="POST">
        <table class="table">
            <tr><td> <label for="IDin">ID: </label></td><td> <input id="IDin" name="IDin" value='<?php echo  $id?>' readonly /></td></tr>
            <tr><td> <label for="nameIn">Name: </label></td><td> <input id="nameIn" name="nameIn" value='<?php echo  $name?>' /></td></tr>
            <tr><td><label for="emailIn">Email: </label></td><td><input id="emailIn" name="emailIn" value='<?php echo  $email?>' /></td></tr>
            <tr><td> <label for="phoneIn">Phone: </label></td><td> <input id="phoneIn" name="phoneIn" value='<?php echo  $phone?>' /></td></tr>
            <tr><td> <label for="addressIn">Address: </label></td><td><input id="addressIn" name="addressIn" value='<?php echo  $address?>' /></td></tr>
        </table>

        <input type="submit" value="Update" class="btn btn-success"/> 
    </form>
</body>
</html>