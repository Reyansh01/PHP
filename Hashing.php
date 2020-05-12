<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      //Hasing :-
      $input = "this is password";
      echo $input;
      $hashedpwd = password_hash($input, PASSWORD_DEFAULT);
      <br>
      echo $hashedpwd;

      //De-Hashing :-
      echo password_verify($input, $hashedpwd);

    ?>

  </body>
</html>
