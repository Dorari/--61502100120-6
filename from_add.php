<h3>เพิ่มข้อมูล</h3>

<form action="add.php" method="post">
<table cellspacing="0" cellpadding="5" border="1">

  <tr>
    <td>รหัสภาพยนต์</td>
    <td><input type="int" name="lab_id"id="lab_id" ></td>
    </tr>
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
    <td><input type="submit" name="cmdSave" value="บันทึกข้อมูล"></td>
    </tr>
</form>