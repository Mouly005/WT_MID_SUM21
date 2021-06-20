<?php
$name="";
$err_name="";
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$cpass="";
$err_cpass="";
$Email="";
$err_email="";
$code="";
$err_code="";
$num="";
$err_num="";
$gender="";
$err_gender="";
$day="";
$err_day
$year="";
$err_year="";
$month="";
$err_month="";
$bio="";
$err_bio="";
$source="";
$err_source="";

?>

<html>
<head></head>

<body>
<left>
<formaction=""method="post">
<fieldset>
<legend align="left">Club Member Register</legend>
<table>
<tr>
<td><span>Name</span></td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $name;?>"</td><td><span><?php echo $err_name;?><span></td>
</tr>
<tr>
<td><span>Unam<span></td>
<td>:</td>
<td><input type="text" name="Uname" value="<?php echo $uname;?>"</td><td><span><?php echo $err_Uname;?><span></td>

</tr>

<tr>
<td><span>Pass<span></td>
<td>:</td>
<td><input type="text" name="pass" value="<?php echo $pass;?>"</td><td><span><?php echo $err_pass;?><span></td>
</tr>

<tr>
<td><span>cpass<span></td>
<td>:</td>
<td><input type="text" name="cpass" value="<?php echo $cpass;?>"</td><td><span><?php echo $err_cpass;?><span></td>

</tr>

<tr>
<td><span>email<span></td>
<td>:</td>
<td><input type="text" name="email" value="<?php echo $email;?>"</td><td><span><?php echo $err_emaail;?><span></td>

</tr>
<tr>
<td><span>gender<span></td>
<td>:</td>
<td><input type="text" name="gender" value="<?php echo $gender;?>"</td><td><span><?php echo $err_gender;?><span></td>

</tr>
<tr>
<td><span>code<span></td>
<td>:</td>
<td><input type="text" name="code" value="<?php echo $code;?>"</td><td><span><?php echo $err_code;?><span></td>

</tr>
<tr>
<td><span>num<span></td>
<td>:</td>
<td><input type="text" name="num" value="<?php echo $num;?>"</td><td><span><?php echo $err_num;?><span></td>

</tr>
<tr>
<td><span>bio<span></td>
<td>:</td>
<td><input type="text" name="bio" value="<?php echo $bio;?>"</td><td><span><?php echo $err_bio;?><span></td>

</tr>

</table>
</body>
</head>
</html>