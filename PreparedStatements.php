<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!This Code is just for learning purpose. proper loginSystem code will be submitted later -->

    <form method="POST">
      <input type="text" name="user_first" placeholder="Enter First Name"><br>
      <input type="text" name="user_last" placeholder="Enter Last Name"><br>
      <input type="text" name="user_email" placeholder="Enter E-Mail"><br>
      <input type="text" name="user_userid" placeholder="Enter UserName"><br>
      <input type="password" name="user_pwd" placeholder="Enter Password"><br>
      <button type="submit" name="submit">SUBMIT</button>
    </form>


    <?php
      // Conncetion of Database.
      $dbservername = 'localhost';
      $dbusername = 'root';
      $dbpassword = '';
      $dbname = 'loginsystem  ';

      $connn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

      //Variable initializatoin.
      $first = mysqli_real_escape_string($conn, $_POST['first']);
      $last = mysqli_real_escape_string($conn, $_POST['last']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $userid = mysqli_real_escape_string($conn, $_POST['userid']);
      $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

      //? is written because of Prepared Statemets. Prepared statements are more efficient and secure.
      $sql = "insert into users(user_first,user_last,user_email,user_userid,user_pwd) values(?,?,?,?,?);";

      //create a Prepared Statement.
      $stmt = mysqli_stmt_init($conn);
      //Prepare the Prepared Statement.
      if(!mysqli_stmt_prepare($conn, $sql)){
        echo "ERROR.";
      } else {
        //Bind the parameters with the respective one's.
        mysqli_stm_bind_param($stmt, "sssss", $first, $last, $email, $userid, $pwd);
        mysqli_stmt_execute($stmt);
      }

    ?>

  </body>
</html>
