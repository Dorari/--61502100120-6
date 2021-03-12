<?php require_once("con_db.php");?>
<table style="width:100%;" border="1">

  <tr>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>วันเกิด</th>
    <th>pin</th>
    <th>จัดการ</th>
  </tr>
  <?php
  $sql = "SELECT * FROM lab";
 $result = $conn ->query($sql);

 
  while($rs = $result->fetch_object()){
  ?>
  <tr>
    <td><?=$rs->lab_id?></td>
    <td><?=$rs->lab_Mname?></td>
    <td><?=$rs->lab_time?></td>
    <td><?=$rs->lab_user?></td>
    <td><?=$rs->lab_pin?></td>
    <td>
</td>
  </tr>
  
  <?php } ?>
</table>
