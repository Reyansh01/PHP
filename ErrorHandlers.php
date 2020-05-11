<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $first = $_POST['first'];
      $last = $_POST['last'];
      $email = $_POST['email'];
      $userid = $_POST['userid'];
      $pwd = $_POST['pwd'];

      //ERROR HANDLES in PHP.
      if(empty($first) || empty($last) || empty($email) || empty($userid) || empty($pwd))
      {
        header("Location : ../index.php?signup=empty");
      } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location : ../index.php?signup=invalidemailid");
        } else {
          echo "You are Signed up.";
        }
      } else {
        header("Location : ../index.php?signup=error");
      }

      //How to Display the Error Handlers.
      $fullUrl = "http://$_SERVER[HTTP HOST]$_SERVER[REQUEST_URI]";
      if(strpos($fullUrl, "signup=empty") == true)
      {
        echo "You did not fill in all the fields.";
        exit();
      }
      elseif(strpos($fullUrl, "signup=invalidemailid") == true)
      {
        echo "E-Mail format is incorrect.";
        exit();
      }
      elseif(strpos($fullUrl, "signup=success") == true)
      {
        echo "Welcome! You are signed in.";
        exit();
      }

    ?>

  </body>
</html>
