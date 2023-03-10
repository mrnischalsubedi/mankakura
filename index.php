
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manka Kura</title>
    <link rel="stylesheet" href="./home.css">
</head>
<body>

    <nav>
        <div class="logo">
            MankaKura
        </div>

        <ul>
            <li><a href="./admin.php">Admin</a></li>
        </ul>
    </nav>

   <div class="container">
    <form action="submit.php" method="POST">
        <div class="title">
            Enter your confession.
        </div>

       <textarea name="message" placeholder="Your message"></textarea>

        <button>Submit</button>

    </form>
   </div>


   <footer>
    &copy; Nischal Subedi @ 2023
</footer>

</body>
</html>