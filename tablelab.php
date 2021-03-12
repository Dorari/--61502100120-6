<?php require_once("con_db.php");
if(isset ($_GET['delete'])){
    echo $_GET['id'];
    $sql = "DELETE FROM lab WHERE lab_id = '{$_GET['id']}'";
      if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
  }
?>
<body>
    <button onclick="window.location='from_add.php';">เพิ่มข้อมูล</button>
</body>


<form action="." method="get">
    <input type="text" name="search" id="search" placeholder="ค้นหา">
    <button type="submit" name="serach_click">ค้นหา</button>
</form>

<form action="." method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form><br>

<table style="width:100%;" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>pin</th>
    <th>จัดการ</th>
  </tr>
  <?php
  $sql = "SELECT * FROM lab";
  if(isset ($_GET['serach_click'])){
    $sql = "SELECT * FROM lab WHERE lab_Mname LIKE '%{$_GET['search']}%' OR lab_Mname LIKE '%{$_GET['search']}%' ";

  }



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
    <a href="form_edit.php?id=<?=$rs->lab_id?>">แก้ไข</a>
    <a href="?delete=1&id=<?php echo $row['m_id'];?>">ลบ</a>
    </td>

</td>
  </tr>
  
  <?php } ?>
</table>
