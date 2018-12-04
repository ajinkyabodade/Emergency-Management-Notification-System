<?php
 $inNumber = $_REQUEST["inNumber"];
 $sender = $_REQUEST["sender"];
 $keyword = $_REQUEST["keyword"];
 $content = $_REQUEST["content"];
 $email = $_REQUEST["email"];
 $credits = $_REQUEST["credits"];
 $emergency='1';

$sender1 = substr($sender, 2);
 $content1=str_replace('LC4LX', '', $content);
 // Example: Writing to a database //
include('dbconnect.php');


$sql = "select * from user where mobno=$sender1";

$q = $conn->query($sql);
for($i=0; $i < $q->num_rows; $i++)
{
$res = $q->fetch_assoc();
$state=$res['state'];
$city=$res['city'];
$area=$res['area'];
$adharno=$res['adharno'];


date_default_timezone_set('Asia/Calcutta'); 
$smpt=$conn->prepare("insert into eevent (edesc,estate,ecity,dadd,adharno,mobno) value(?,?,?,?,?,?)");
$smpt->bind_param("ssssss", $content1,$state,$city,$area,$adharno,$sender1);

$smpt->execute();
$smpt->close();
$conn->close();
}
?>
