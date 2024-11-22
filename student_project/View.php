<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: blue;
        }

        #hd {
            background-color: black;
            color: silver;
        }
    </style>
</head>
<body>

 <center><div id="hd">
        <h1><i>Student Details</i>
            <hr>
        </h1></center>

       <center> <div id="nav">
       <a href="Home2.html">Home</a>
            <a href="Student.html">Student Details</a>
            <a href="modify.html">Modify Details</a>
            <a href="Remove.html">Remove Details</a>
            <a href="View.php">View Details</a>
        </div></center>
    </div>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='SCHOLARS';

$conn=new mysqli($host,$user,$pass,$db);


$sql="select * from CONTENT";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['sid'].'</td>';
      echo '<td>'.$row['sna'].'</td>';
      echo '<td>'.$row['sco'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>