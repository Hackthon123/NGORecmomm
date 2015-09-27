<?php

require_once 'db_connect.php';

$user=$_POST['user'];
$pass=$_POST['pass'];

$qry=mysql_query("SELECT * FROM user WHERE user_name='$user'", $con);
if(!$qry)
{
mysql_close($con);
die("Query Failed: ". mysql_error());
}
else
{
$row=mysql_fetch_array($qry);
}

if($_POST['user']==$row["user_name"]&&$_POST['pass']==$row["pass_word"])
{
session_start();
$_SESSION['name']=$_POST['user'];
mysql_close($con);
header("Location:administration.php");
}
else
{
mysql_close($con);
header("Location:login.php?msg=Incorrect username or password");
}

?>
<?php mysql_close($con); ?>