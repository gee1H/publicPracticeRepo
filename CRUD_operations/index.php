<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="row">
        <h1 style="text-align: left; margin-left: 20px;">List of Clients</h1>
    </div>
    <div class="row">
        <a href="create.html" class="btn btn-primary" style="margin-left: 20px;" >New Client</a>
    </div>
    <br>
    <hr>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
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

            $sql = "SELECT * FROM clients";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["id"]. "</td><td>".$row["name"]. "</td><td>" . $row["email"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td><td>".$row["created_at"]. "</td>" . "<td> <a href='edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>" ." ". "<a href='delete.php?id=".$row['id']." role='button' class='btn btn-danger'>Delete</a></td></tr>";
            }
            } else {
            echo "0 results";
            }

            mysqli_close($conn);
        ?>
    </table>
</body>
</html>