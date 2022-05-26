<?php
header("Content-type:text/html;charset=utf8");
$username=$_POST['username'];
$password=$_POST['password'];
//echo $username,$password;
require_once('conn.php');
$sql="select * from member where username='$username'";
$res=mysql_query($sql);
if($row=mysql_fetch_assoc($res)){
	echo "用户名存在";
echo $row['password'];
if($password==$row['password']){
	header('location:welcome.php?username=$username');
}else{
	header('location:index.php?error=2');
}
}else{
	header('location:index.php?error=1');
}
?>