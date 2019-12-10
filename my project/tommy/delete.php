<?php 
  require_once("coonMySql.php");

  if (isset($_POST["action"]) && $_POST["action"]=="delete"){
  $sql = "DELETE FROM `students` WHERE `cID` = " . $_POST["cID"];
  // print "ok";
  // print $_POST["cID"];
  mysqli_query($conn,$sql);
  mysqli_close($conn);
  header("Location:data.php");
}
  $sql = "SELECT * FROM `students` WHERE `cID` = " . $_GET["id"];
  $result = mysqli_query($conn,$sql);
  $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
  mysqli_close($conn);
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>學生資料管理系統</title>
</head>
<body>
<h1 align="center">學生資料管理系統 - 刪除資料</h1>
<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>姓名</td><td><?php print $row["cName"];?></td>
    </tr>
    <tr>
      <td>性別</td><td>
     <?php if($row["cSex"]=="M") print "男";?>
     <?php if($row["cSex"]=="F") print "女";?>  
      </td>
    </tr>
    <tr>
      <td>生日</td><td><?php print $row["cBirthday"];?></td>
    </tr>
    <tr>
      <td>電子郵件</td><td><?php print $row["cEmail"];?></td>
    </tr>
    <tr>
      <td>電話</td><td><?php print $row["cPhone"];?></td>
    </tr>
    <tr>
      <td>住址</td><td><?php print $row["cAddr"];?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="hidden" name="action" value="delete">
      <input type="hidden" name="cID" value="<?php print $row["cID"];?>">
      <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
      </td>
    </tr>
  </table>
</form>
</body>
</html>