<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body bgcolor="#defce8">
<?php
	if($_POST["usergender"]=="gender1")
	{
		print($_POST["username"] . "先生您好!<br>");
	} else{
		print($_POST["username"] . "小姐您好!<br>");
	}
	print "您的學歷為:" . $_POST["userschool"]  . "<br>";
    print "您喜歡的活動為:<br>";
    echo "<ul>";
         foreach ($_POST["activity"] as $value) {
         	echo "<li>" . $value ."</li>";
         }
    echo "</ul>";
    print "您對於臉書經群媒體的看法為:<br>" . $_POST["usertrouble"];
    
	 ?>	
	 <form action ="piettyt.php" method="post">
	 	<font size ="5" color="purple">帳號</font>
	 	<input type="text" name="usernameadd" id="usernameadd" required><br>
	 	<font size ="5">密碼</font>
	 	<input type="text" name="userpassword" id="userpassword" required><br>

      是否想做其他問卷查:<br>
     <input type ="radio" name="questioner" id="questioner" value="yes">是<!--單選 -->
     <input type ="radio" name="questioner" id="questioner" value="no">否	

	 	<input type="submit" name="登入">
	 </form>
</body>
</html>