<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $name = "This is String";
      echo $name;
      echo "<br>";
      echo strlen($name);
      echo "<br>";
      echo str_word_count($name);
      echo "<br>";
      echo strrev($name);
      echo "<br>";
      echo strpos($name,"is");
      echo "<br>";
      echo str_replace("PHP","string",$name);
      echo "<br>";

      /*For some more predefined functions go through the below mentioned link :-
      https://www.webtrickshome.com/content/php-predefined-functions */
    ?>

  </body>
</html>
