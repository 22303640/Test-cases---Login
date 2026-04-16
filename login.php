<?php
  session_start();
  
  if(isset($_SESSION["name"]))
  {
    echo "<p> Already logged in </p>";
    header('Refresh: 3;url=welcome.php');
    exit();
  }
?>

<html>
<head>
<title>session</title>
</head>
<body>
<form name="form1" action="" method="POST" target="_self">
<p><strong>Username:</strong><br/>
<input type="text" name="user"/></p>
<p><strong>Password:</strong><br/>
<input type="password" name="password"/></p>
<p><input type="submit" value="send"/></p>
</form>
</body>
</html>

<?php
  //At this point you should retrieve the username and password from the DB and verify them.
  if (!empty( $_POST))
    if ($_POST["user"] == "John" && $_POST["password"] == "pass")
    {
    		$_SESSION["name"] = $_POST["user"];
        header('Location:welcome.php');
    }
    else
    {
      echo "<p> Wrong Username";
      header('Refresh: 3;url=login.php');
    }
?>
