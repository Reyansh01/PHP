<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      //variable.
      $n = "PHP";
      echo "Iam learning ".$n;
    ?>


    <!FORM>
    <form method = "GET">
      <input type = "text" name = "person">
      <button>SUBMIT</button>
    </form>


    <?php
      $name = $_GET['person'];
      echo $name. " will be my 2nd language. ";
    ?>


  </body>
</html>
