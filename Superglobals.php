<!How to start a session.-->
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      /* 1. $GLOBALS
         2. $_POST
         3. $_GET
         4. $_COOKIE
         5. $_SESSION*/

        /* $_GET is used to show the information in the URL.
          $_POST is used to hide the information in the URL. */
         $var = 10;
         function superglobals()
         {
           $v = 20;
           echo $GLOBALS['var'];
         }
         superglobals();

         // setcookie(name of the variable, value of the variable, time after which cookie should expire)
         setcookie("name","PHP",time() - 86400);
         $_SESSION['name'] = 10;

    ?>

  </body>
</html>
