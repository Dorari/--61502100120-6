<h2>แก้ไขนักศึกษา <small><a href=".">ย้อนกลับ</a></small></h2>
<?php
    require_once("con_db.php");
    $sql = "SELECT * FROM lab WHERE lab_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $r = $result->fetch_assoc();
    }
?>
 
<form action="edit.php" method="post">
<table cellspacing="0" cellpadding="5" border="1">
 
<label for="lad_id">รหัสภาพยนต์ : </label>
    <?php echo $r['lad_id']; ?>
    <tr>
    <td>ชื่อภาพยนต์</td>
    <td><input type="text" name="lab_Mname"id="lab_Mname"></td>
    </tr>
    <tr>
    <td>เวลาที่เริ่มฉาย</td>
    <td><input type="date" name="lab_time"id="lab_time"value="<?php echo $r['lab_time']; ?>"></td>
    </tr>
    <tr>
    <td>ชื่อผู้ใช้งาน</td>
    <td> <input type="text" name="lab_user"id="lab_user"></td>
    </tr>
    <tr>
    <td>pin</td>
    <td><input type="text" name="lab_pin"id="lab_pin"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" value="ยืนยัน"></td>
    </tr>
</form>