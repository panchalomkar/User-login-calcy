
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="omkar";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
	//echo "connection success <br>";
}
/* $sql = "INSERT INTO `forms` (`rn`, `sn`, `cl`) VALUES ('26', 'omkar', 'msc')";

$result = mysqli_query($conn, $sql);
if($result){
	echo "data add<br>" ;
}
else{
	echo "";
	mysqli_error($conn);
}*/

?>