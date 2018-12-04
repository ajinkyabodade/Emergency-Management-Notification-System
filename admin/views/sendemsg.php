<?php
include('dbconnect.php');
include('checklogin.php');

if(isset($_GET['send']))
{

$sql5 = "select * from eevent where id=".$_GET['send'];
$q5 = $conn->query($sql5);
if($q5 ->num_rows==1)
{
$res5 = $q5->fetch_assoc();

$edesc = $res5['edesc'];
$state = $res5['estate'];
$city =  $res5['ecity'];
$area =  $res5['dadd'];
$ntype = '1';
$fname = $_SESSION['fname'];
}
echo $q5 ->num_rows;
echo $edesc;
$sql10 = "select * from user where state='".$state."' and city = '".$city."' and area = '".$area."'";
$q10 = $conn->query($sql10);



for ($i=0; $i < $q10->num_rows ; $i++) { 
   
$res10 = $q10->fetch_assoc();

$no =$res10['mobno'].', '.$no;

}






	// Account details
	$apiKey = urlencode('frEfnXI0iPQ-24fbHuIbWI97yqRmR75G4WKKybTj7M');
	
	// Message details
	
$no = $no.' '.'7875219661';	
echo $no;
echo $edesc;
	$numbers = array($no);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($edesc);

	$numbers = implode(',', $numbers);

	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;








date_default_timezone_set('Asia/Calcutta');


$smpt=$conn->prepare("insert into sendno (edesc,state,city,area,fname,ntype) value(?,?,?,?,?,?)");
$smpt->bind_param("ssssss", $edesc,$state,$city,$area,$fname,$ntype);
?>
<script type="text/javascript">
alert("Notifications Succesfully Generated....");
location="index.php";
</script>




<?php
$smpt->execute();
$smpt->close();
$conn->close();
}
?>