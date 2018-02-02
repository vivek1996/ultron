<?php
define('DB_NAME','form');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
    die('Could not connect:'.mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
    die('Can not use'.DB_NAME.':'.mysql_error());
}
//echo"connected successfully";
$name=$_POST['name'];
$gender=$_POST['sex'];
$email=$_POST['mail'];
$mobile=$_POST['mbn'];
$colleg=$_POST['college'];
$depart=$_POST['branch'];
$city=$_POST['city'];
$events=implode(",",$_POST['e']); 
$workshops=implode(",",$_POST['w']);
$sql="INSERT INTO registercsi(NAME, GENDER,EMAILID,MOBILE,COLLEGE,DEPARTMENT,CITY,EVENTS,WORKSHOP) VALUES('$name','$gender','$email','$mobile','$colleg','$depart','$city','$events','$workshops')";
if (mysql_query($sql)) {
	 echo'<html><body bgcolor="green"><br><br><br><br><br><br><br><br><center><h1>Registered Successfully.<br>Confirmation Mail will be sent to your registered mail id.</h1></center></body></html>';
}
        else
        {
            echo mysql_error();
        }
mysql_close();
?>
     