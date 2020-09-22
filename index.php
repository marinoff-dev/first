<?php

 if(isset($_POST['user']) && isset($_POST['mail']) && isset($_POST['pass1']) && isset($_POST['pass2']))

    {
         include('connect_db.php');
         if($_POST['pass1']!=$_POST['pass2'])
         {
             echo("Error");
         }
         else
         {
             $user = $_POST['user'];
             $mail = $_POST['mail'];
             $pass1 = $_POST['pass1'];

             $req = $sql->prepare('INSERT INTO users(name, mail, pass) VALUES(?,?,?)');
             $req->execute(array($user,$mail,$pass1));
         }
    }
    else
    {
        echo"<script> alert(\"all fields are required\")</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <div>
    
    <form style="margin:0%;padding-left: 500px;padding-top: 50px;" method="POST" action="index.php">
        <h1 style="text-decoration: overline;">Sign-up</h1>
        <input type="text" name="user" id="user" placeholder="Username"> <br><br>
        <input type="email" name="mail" id="mail" placeholder="E-mail" required="true"><br><br>
        <input type="password" name="pass1" id="pass1" placeholder="password" required="true"><br><br>
        <input type="password" name="pass2" id="pass2" placeholder="confirm password" required="true"><br><br>
        <input type="submit" value="Sign up">
    </form>
</div>


</head>
<body>
    
</body>
</html>