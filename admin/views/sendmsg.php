 <?PHP $sql500 = "select * from user where state='".$state."' and city = '".$city."' and area = '".$area."'";

$q500 = $conn->query($sql500);





for ($i=0; $i < $q500->num_rows ; $i++) { 
   
$res500 = $q500->fetch_assoc();

$no =$res500['mobno'].', '.$no;

}






	// Account details
	$apiKey = urlencode('frEfnXI0iPQ-24fbHuIbWI97yqRmR75G4WKKybTj7M');
	
	// Message details
	
$no = $no.' '.'7875219661';	
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


?>
