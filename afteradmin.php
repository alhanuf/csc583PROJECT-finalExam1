<?php

$username=$_POST['name'];
$password=$_POST['pas'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("toro");

$result=mysql_query("select * from adminview where Email='$username' and pass='$password'")  or die("failed to query database" .mysql_error());

//or die("failed to query database" .mysql_error());

$row =mysql_fetch_array($result);
if($row['Email']==$username && $row['pass']==$password) {

echo "login success ".$row['username'];

header("location:info.php");
}
else {
echo "failled login";
}
?>