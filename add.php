<?php
    require_once("con_db.php");
    $sql = "INSERT INTO lab (lab_id, lab_Mname, lab_time, lab_user,lab_pin)
    VALUES ('{$_POST['lab_id']}', '{$_POST['lab_Mname']}', '{$_POST['lab_time']}', '{$_POST['lab_user']}', '{$_POST['lab_pin']}')";
 
    if ($conn->query($sql) === TRUE) {
        sleep(1);
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>