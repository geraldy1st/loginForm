<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User page</title>
</head>
<body>

   <?php 
    if  (isset($_POST['username']) && isset ($_POST['password']) && $_POST["password"] == "ocelot" && $_POST["username"] == "root"){   
        echo "<h1>you're pretty good!</h1>";
        echo '<iframe width="643" height="362" src="https://www.youtube.com/embed/rDW5epw8c3g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            echo "<p>" . $_POST["password"] . " was the password.</p>";
    }else{
        echo "<p>Login fail..! <br>try root as an username...</p>";
   }
     ?>

<hr>
<p><a href="formulaire.php">Home</a></p>
</body>
</html>