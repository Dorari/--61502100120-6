<h1>  <a href="tablelab.php">Home</a> </h1>
<?php 
    require_once("con_db.php");
    $sql = "UPDATE lab SET
    lab_Mname = '{$_POST['lab_Mname']}',
    lab_time = '{$_POST['lab_time']}',
    WHERE lab_id = '{$_POST['lab_id']}' ";
 
    if ($conn->query($sql) === TRUE) {
        sleep(1);
        header("location:index.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
    $conn->close();
?>