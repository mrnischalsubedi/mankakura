<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>

    <nav>
        <div class="logo">
            MankaKura
        </div>

        <ul>
            <li><a href="/">Logout</a></li>
        </ul>
    </nav>

   <div class="container" id="container">
        <div class="confessions">
            <h1>Your confessions</h1>

            <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "confessions";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the confessions from the database
$sql = "SELECT message FROM confessions";
$result = mysqli_query($conn, $sql);

// Output the confessions in HTML
if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="confession">' . $row["message"] . '<div class="delete">X</div></div>';
    }

} else {
    echo "No confessions yet.";
}

// Close the database connection
mysqli_close($conn);
?>

            

        </div>

        

   </div>

</body>
<script src="./authenticate.js"></script>
</html>