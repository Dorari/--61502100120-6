<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
require_once("con_db.php");
session_start();
if(isset($_POST['login'])) {
     $sql = "SELECT * FROM lab WHERE lab_user = '{$_POST['lab_user']}' AND lab_pin = '{$_POST['lab_pin']}'";
     $result = $conn->query($sql);
     if($result->num_rows > 0) {
         $row = $result->fetch_assoc();
         $_SESSION["lab_user"] = $row['lab_user'];
     } else {
         echo "<p>รหัสผิด</p>";
     }
 }
 if(isset($_POST['logout'])) {
    session_unset();
}
if(isset($_SESSION['lab_user'])) {
    require_once("tablelab.php");
} else {
    require_once("login.php");
}
?>


</body>

</html>
