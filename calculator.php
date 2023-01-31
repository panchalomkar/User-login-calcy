<?php include("connection.php");
  session_start();

$res = $_POST['action'];
$val = $_POST['value'];
$output = "";

if($res=="sum"){
    $x=explode(",",$val);
    $output =array_sum($x);
}
else if($res=="max"){
    $x=explode(",",$val);
    $output =max($x);
}
else if($res=="min"){
    $x=explode(",",$val);
    $output =min($x);
}
else if($res=="mul"){
    $x =explode(",",$val);
   
    $output =array_product($x);
}
else if($res=="his"){
    $sql = 'SELECT * FROM calcy WHERE userid='.$val;
   $retval = mysqli_query($conn,$sql );
    $table = "<table class='table'><tr><th>Operator </th> 
    <th> Input</th> 
    <th>Output </th> 
</tr>";
   while($row = mysqli_fetch_array($retval)) {
        $table .= "<tr>";
            $table .= "<td>".$row['operation']."</td>";
            $table .= "<td>".$row['valdata']."</td>";
            $table .= "<td>".$row['result']."</td>";
            $table .= "</tr>";
   }
   $table .= "</table>";
    $output = $table;

}

$userid=$_SESSION["id"];
$today=date('Y-m-d');

if ($res != "his") {
    $query = "INSERT INTO calcy(userid,valdata,operation,result,createdate) 
VALUES ($userid,'" . $val . "','" . $res . "','" . $output . "','" . $today . "')";
    $data = mysqli_query($conn, $query);
}

echo $output;
?>