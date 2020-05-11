<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor = 'cyan'>
    <form>
        <input type="text" name="num1" placeholder="Enter 1st number Here.">
        <input type="text" name="num2" placeholder="Enter 2nd number Here.">
        <select name="operator">
          <option>None</option>
          <option>Add</option>
          <option>Subtract</option>
          <option>Multiply</option>
          <option>Divide</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submit">Calculate</button>
    </form>
    <br>
    The Answer is :

    <?php
      if(isset($_GET['submit']))
      {
        $res1 = $_GET['num1'];
        $res2 = $_GET['num2'];
        $op = $_GET['operator'];
        switch ($op) {
          case 'None':
            echo "You have not selected any method.";
            break;
          case 'Add':
            echo $res1 + $res2;
            break;
          case 'Subtract':
            echo $res1 - $res2;
            break;
          case 'Multiply':
            echo $res1 * $res2;
            break;
          case 'Divide':
            echo $res1 / $res2;
            break;
        }
      }
    ?>

  </body>
</html>
