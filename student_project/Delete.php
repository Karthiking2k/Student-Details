<?php
$host='localhost';
$user='root';
$pass='';
$db='SCHOLARS';


//connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$sid=$_POST['sid'];

$sql="delete from CONTENT where sid='$sid'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();

?>