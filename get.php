<!DOCTYPE html>
<html>
<body>
<form name="form" action="<?php $_SERVER["PHP_SELF"];?>" method="get">
    <input type="text" name="id" id="id" placeholder="id">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="submit" name="submit" onclick="myFunction()">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_REQUEST['id'];
    $email = $_REQUEST['email'];
    if (empty($id) || empty($email)) {
        echo "Riempire i campi";
    } else {
      echo "id=".$id;
      echo "<br>";
      echo "email=".$email;
    }
  }
?>
 
</body>
</html>

