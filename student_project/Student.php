<?php
$host='localhost';
$user='root';
$pass='';
$db='SCHOLARS';


$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$sid=$_POST['sid'];
$sna=$_POST['sna'];
$sco=$_POST['sco'];

$sql="insert into content(sid,sna,sco) values('$sid','$sna','$sco')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>