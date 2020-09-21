<?php
$login1 = "Wesley";
$login2 = "Xavier";
$login3 = "Wissem";

$password1 = password_hash("1234");
$password2 = password_hash("12345");
$password3 = password_hash("12346");

if(isset($_POST["login"]) && isset($_POST["email"]))
{
  if($_POST["login"] == $login1 || $_POST["login"] == $login2 || $_POST["login"] == $login3)
  {
    if($_POST["password"] == $email1 || $_POST["password"] == $email2 || $_POST["password"] == $email3)
    {
      if($_POST["login"] == $login1 && $_POST["password"] == $password1)
      {
        header("Location: my_navigator.html");
        session_start();
        $_POST["login"] = $_SESSION["login"];
      }

      elseif($_POST["login"] == $login2 && $_POST["password"] == $password2)
      {
        header("Location: my_navigator.html");
        session_start();
        $_POST["login"] = $_SESSION["login"];
        $_POST["password"] = $_SESSION["password"];
      }

      elseif($_POST["login"] == $login3 && $_POST["password"] == $password3)
      {
        header("Location: my_navigator.html");
        session_start();
        $_POST["login"] = $_SESSION["login"];
        $_POST["password"] = $_SESSION["password"];
      }
    }
  }

}

?>
<!DOCTYPE html>
<html>

  <head>
    <title>Connexion</title>
    <meta charset="utf-8"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
  </head>


  <body>

    <div id="containform">
      <form method="POST" action="my_navigator.html" class="formulaire">
        <div class="champs">
          <label for="login">Login</label><input type="text" name="login" id="login"/><br /><br />
          <label for="password">Email</label><input type="password" name="password" id="password"/><br /><br />
          <input type="submit" class="validation" value="Connexion"/>
        </div>
      </form>
    </div>

  </body>


</html>
