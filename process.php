<?php

//Check all the variables that we're passing
if( isset($_GET['name']) )
	$arr['NAME'] = $_GET['name'];

if( isset($_GET['email']) )
	$arr['EMAIL ADDRESS'] = $_GET['email'];

if( isset($_GET['design']) )
	$arr['DESIGN'] = $_GET['design'];

if( isset($_GET['specs']) )
	$arr['LETTERPRESS'] = $_GET['specs'];

if( isset($_GET['piece']) )
	$arr['PROJECT TYPE'] = wordwrap(htmlentities($_GET['piece']), 70, "<br />");

if( isset($_GET['due_date']) )
	$arr['DUE DATE'] = $_GET['due_date'];

if( isset($_GET['number_of_pieces']) )
	$arr['NUMBER OF PIECES'] = $_GET['number_of_pieces'];

if( isset($_GET['quantity']) )
	$arr['QUANTITY'] = $_GET['quantity'];

/*
//Get the uploaded file information
$name_of_uploaded_file = basename($_FILES['attachment']['name']);

//get the file extension of the file
$type_of_uploaded_file = substr($name_of_uploaded_file, strrpos($name_of_uploaded_file, '.') + 1);

//size in KBs
$size_of_uploaded_file = $_FILES["attachment"]["size"]/1024;

//Settings
$max_allowed_file_size = 10000; // size in KB
$allowed_extensions = array("jpg", "jpeg", "gif", "bmp", "pdf", "png", "doc", "docx", "psd", "ai");
$upload_folder = '/constellation/files/uploads/';

//Validations
if($size_of_uploaded_file > $max_allowed_file_size ){
  die("Size of file should be less than $max_allowed_file_size");
}

//------ Validate the file extension -----
$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++){
  if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0){
    $allowed_ext = true;
  }
}

if(!$allowed_ext){
  die("The uploaded file is not supported file type. Only the following file types are supported: ".implode(',',$allowed_extensions));
}

//copy the temp. uploaded file to uploads folder
$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
$tmp_path = $_FILES["attachment"]["tmp_name"];

if(is_uploaded_file($tmp_path)){
  if(!copy($tmp_path,$path_of_uploaded_file)){
    die('error while copying the uploaded file');
  }
}

$arr['ATTACHMENT'] = "<a href='".$path_of_uploaded_file."'>".$path_of_uploaded_file.'</a>';
*/

//Create the different parts of the email
$subject = "Here is your estimate request!";
$to = 'hello@constellationco.com';
$from = $_GET['email'];

//Set up the headers
$headers =  "From: ".$from."\r\n";
$headers .= "Date: ".date('d m y h:i:s a')."\r\n";
$headers .= "Subject: ".$subject."\r\n";
$headers .= "Reply-To: ".$from."\r\n";
$headers .= "Sender: ".$to."\r\n";
$headers .= "Content-type: text/html\r\n";

//Create the body of the email
$body = "<html><body>";
$body .= '<body style="background-color:#dddddd;color:#636466;font-family: Helvetica, Verdana, Arial;margin:0px;padding:0px;"><center>';
$body .= '<div style="width:650px;background-color:#ffffff;padding-top:40px;padding-bottom:40px;text-align:left;border-left:2px solid #cccccc;';
$body .= 'border-right:2px solid #cccccc;border-top:2px solid #cccccc;"><span style="margin-left:50px;font-size:24px;font-weight:bold;color:4D4D4F">';
$body .= 'HERE IS YOUR</span><br /><span style="margin-left:50px;font-size:24px;font-weight:bold;color:4D4D4F">ESTIMATE REQUEST</span>';
$body .= '<img src="http://www.constellationco.com/wp-content/themes/constellation/images/star.png" title="star" style="padding-left:282px;" />';
$body .= '<hr style="width:545px;border:1px solid gray;"><table border="0" cellpadding="8" cellspacing="0" width="650" style="font-size:13px;vertical-align:text-top;">';

$odd = 1;
foreach( $arr as $key => $value ){
    if($odd&1){	//check to see if it's odd or even
		$body .= '<tr style="background-color:#ffffff;">'; //odd
	} else {
		$body .= '<tr style="background-color:#E6E7E8;">'; //even
	}
	$body .= '<th style="padding-left:50px;font-size:14px;font-weight:bold;" width="200px">';
	$body .= $key;
	$body .= '</th>';
	$body .= '<td>'.$value.'</td></tr>';

	$odd++; //increment odd
}

$body .= '</table><hr style="width:545px;border:1px solid gray;">';
$body .= '<span style="padding-left:50px;font-size:10px;">Original estimate request date: ';
$body .= date('n/d/Y');
$body .= '</span><br />';
$body .= '<span style="padding-left:50px;font-size:10px;">We respect your privacy and we\'ll never sell your personal information to anyone.</span>';
$body .= '</div><div style="margin:0px;padding:0px;width:650px;"><img src="http://www.constellationco.com/wp-content/themes/constellation/images/cut.png"';
$body .= 'title="Hand Crafted With Love" /></div><a href="http://www.constellationco.com" target="_blank">';
$body .= '<img src="http://www.constellationco.com/wp-content/themes/constellation/images/logoemail.png" title="Constellation & Co." ';
$body .= 'style="padding-top:10px;" /></a></center></body></html>';

//Send the email
ini_set("sendmail_from", $from);
mail($to, $subject, $body, $headers);

//Forward to thanks page
header('Location: http://www.constellationco.com/thanks');
?>