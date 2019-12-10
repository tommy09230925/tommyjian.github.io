<?php
  require_once("coonMySql.php");
  $sql = "SELECT `students`.`cID`,`students`.`cName`,`students`.`cSex`,`students`.`cBirthday`,`students`.`cEmail`,`students`.`cPhone`,`students`.`cAddr`,SUM(`scorelist`.`score`) AS '總分',AVG(`scorelist`.`score`)AS '總平均' FROM `scorelist`,`students` WHERE `scorelist`.`cID`=`students`.`cID` GROUP BY`students`.`cID` ORDER BY `總分` DESC"; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>學生資料系統</title>
</head>
<body>
    <?php 
     if ($result = mysqli_query($conn,$sql)) {
         # code...
         $total = mysqli_num_rows($result);
     ?>
        <h1 align="center">學生資料管理系統</h1>
        <p align="center">目前資料筆數:<?php print $total; ?>
        ,<a href="add.php">新增學生資料</a></p>
        <table border="1" align="center" bgcolor="green">
           <tr>
               <th>座號</th>
               <th>姓名</th>
               <th>性別</th>
               <th>生日</th>
               <th>電子郵件</th>
               <th>電話</th>
               <th>住址</th>
               <th>總分</th>
               <th>總平均</th>
               <th>功能</th>
           </tr> 
     <?php 
       while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC)) {
           # code...
        print "<tr>";
        print "<td>". $row["cID"] . "</td>";
        print "<td>". $row["cName"] . "</td>";
        print "<td>". $row["cSex"] . "</td>";
        print "<td>". $row["cBirthday"] . "</td>";
        print "<td>". $row["cEmail"] . "</td>";
        print "<td>". $row["cPhone"] . "</td>";
        print "<td>". $row["cAddr"] . "</td>";
        print "<td>". $row["總分"] . "</td>";
        print "<td>". $row["總平均"] . "</td>";
        print "<td>GDGDGDGDG</td>";
        print "</tr>";
       }
       print "</table>";
      }
      ?>
</body>
</html>
<?php
mysqli_close($conn); 
 ?>