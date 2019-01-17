<?php 
require_once('connect.php');
if (isset($_POST['btn-submit'])) {
// $secretKey = '6LeQbmMUAAAAAMI5wc668dW5jg9vrreUUDgOsGaQ';
// $response = $_POST['g-recaptcha-response'];
// $remoteip = $_SERVER['REMOTE_ADDR'];
// $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteip";
//$resp = json_decode(file_get_contents($url));
	$sql = "INSERT INTO `contact` (`name`, `phone`, `facebook`, `message`, `date`)
	VALUES ('".$_POST['name']."',
		   '".$_POST['phone']."', 
		   '".$_POST['facebook']."', 
		   '".$_POST['message']."',
		   '".date("Y-m-d")."');";
			$result  = $conn->query($sql) or die ($conn->error);
			if ($result) {
			sendToLine();
			}

}

else{
echo "<script> alert('ส่งข้อมูลไม่สำเร็จ') </script>";
header('Refresh:0; url=../contact.php');

}
	

	function sendToLine() {

 		$text  = "มีผู้ติดต่อมาจาก website \n";
 		$text .= "ชื่อ :".$_POST['name']."\n";
 		$text .= " เบอร์โทรศัพท์ :" .$_POST['phone']."\n";
 		$text .= " facebook :".$_POST['facebook']."\n";
 		$text .= " message :".$_POST['message'];
 		

 		$message = array(
 			'message' => $text
 		);

 		notifly_message($message);
	}	

	function notifly_message($message){
	// line variable Const
	define('LINE_API',"https://notify-api.line.me/api/notify");
	define('LINE_TOKEN',"I0SEdiH5YXkeJ7xhRcTJxPRGBsJSMcGFFGwED8J5UpA");

		// http_build_query ให้มันสร้าง query string เอง
		$queryData = http_build_query($message,'','&');
		$headerOptions = array(
			'http' => array(
				'method'=>'POST',
				'header'=>"Content-Type: application/x-www-form-urlencoded\r\n"
						."Authorization: Bearer ".LINE_TOKEN."\r\n"
						."Content-Length: ".strlen($queryData)."\r\n",
						'content'=>$queryData
			)
				
		);
		$context = stream_context_create($headerOptions);
		$result = file_get_contents(LINE_API,FALSE,$context);
		$resp = json_decode($result);
		if($resp->status == 200){
		
		echo '<script> alert("ส่งข้อมูลสำเร็จ") </script>';
			header('Refresh:0; url=../contact.php');
		}else{
			echo '<script> alert("ส่งข้อมูลไม่สำเร็จ ติดต่อ admin") </script>';
			header('Refresh:0; url=../contact.php');
		}
		
	}





 ?>