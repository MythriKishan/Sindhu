<?php
session_start();

include('include/db.php');
function Redirect($url, $permanent = false)
  {
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
  }
  ?>
<?php
$name = $_SESSION['name'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $name;
// Write the contents back to the file
file_put_contents($file, $current);


$email = $_SESSION['email'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $email;
// Write the contents back to the file
file_put_contents($file, $current);


$phone = $_SESSION['mobile'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $phone;
// Write the contents back to the file
file_put_contents($file, $current);


$lmodel = $_SESSION['lmodel'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $lmodel;
// Write the contents back to the file
file_put_contents($file, $current);


$sno = $_SESSION['sno'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $sno;
// Write the contents back to the file
file_put_contents($file, $current);

$cused = $_SESSION['cused'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $cused;
// Write the contents back to the file
file_put_contents($file, $current);

$dname = $_SESSION['dname'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $dname;
// Write the contents back to the file
file_put_contents($file, $current);


$daddress = $_SESSION['daddress'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $daddress;
// Write the contents back to the file
file_put_contents($file, $current);


$dpurchase = $_SESSION['dpurchase'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $dpurchase;
// Write the contents back to the file
file_put_contents($file, $current);


$product = $_POST['productRadio'];
  $file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $product;
// Write the contents back to the file
file_put_contents($file, $current);


date_default_timezone_set('Asia/Kolkata');


$sql = "insert into giftredeem (name,email,mobile,lensmodel,sno,cused,dname,daddress,dpurchase,product,created) values ('".$name."','".$email."','".$phone."','".$lmodel."','".$sno."','".$cused."','".$dname."','".$daddress."','".$dpurchase."','".$product."','".date("Y-m-d H:i:s")."') ";

$result = mysql_query($sql);

if($result)
{
   $to = "mythri.kishan4@gmail.com";
   $subject = "Gift Redeem";
   // Email Template
   $message = "<b>Name : </b>". $name ."<br>";
   $message .= "<b>Contact Number : </b>".$phone."<br>";
   $message .= "<b>Email Address : </b>".$email."<br>";
   $message .= "<b>Lens Model : </b>".$lmodel."<br>";
   $message .= "<b>Serial No : </b>".$sno."<br>";
   $message .= "<b>Camera Used : </b>".$cused."<br>";
   $message .= "<b>Dealer Name : </b>".$dname."<br>";
   $message .= "<b>Dealer Address : </b>".$daddress."<br>";
   $message .= "<b>Date of Purchase : </b>".$dpurchase."<br>";
   $message .= "<b>Product Selected : </b>".$product."<br>";
   
   $header = "From:"+$email+" \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   
   if($retval)
   {
       			       //echo "Successfull";
				$user_id = 'https://bztran.com/message.php?msg=done';
				// echo $user_id;
				Redirect($user_id, false);		
			   }
			   else
			   {
			    
                  $user_id = 'https://bztran.com/message.php?msg=err';
                  Redirect($user_id, false);
			   
   }
}
   else
   {
        
                  $user_id = 'https://bztran.com/message.php?msg=fail';
                  Redirect($user_id, false);
   }





?>