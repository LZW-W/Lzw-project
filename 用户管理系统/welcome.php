<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
*{font-size: 12px }
	</style>

</head>
<body>
	<table width="775" align="center">
	<tr> 
	<td colspan="3"><img src="images/m1.gif" alt=""></td> 
	</tr>
	<tr>
	<td width="179" style="background-image: url('images/m2.gif')" valign="top">
<form action="login.php" method="post">
<table width="160" align="center" style="text-align: center">
<tr height="30">
<td></td>
</tr>
<tr>
<td>欢迎您!</td>
</tr>
<tr>
<td><?php echo $_GET['username']; ?></td>
</tr>
<tr>
<td><a href="#">修改您的资料</a></td>
</tr>
<tr>
      <td>
     <a href="#">注销您的用户</a>
      </td>
</tr>

</table>
</form>
	</td>
	<td><img src="images/m3.gif" alt=""></td>
	<td><img src="images/m4.gif" alt=""></td>
	</tr>
	<tr>
	<td colspan="3"><img src="images/m5.gif" alt=""></td>
	</tr>
	</table>
</body>
</html>