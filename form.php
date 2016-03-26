<?php
$con = mysqli_connect("localhost","test","passtest","phpmyadmin");

// Check connection
if (mysqli_connect_errno())
{
    echo "Paul: Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="INSERT INTO phpmyadmin.fiddlebook (name,email,phone,comment)
VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[comment]')";
// echo "$sql<br>";

if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
echo "Your Information Was Successfully Sent<br>";
mysqli_close($con);
// $to = "christian.kessinger@gmail.com";
$to = "christian";
$subject = "Fiddlebook Email";
$email = $_POST['email'] ;
$message = $_POST['comment'] ;
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers) ;
if($sent) {
    print "Your mail was sent successfully<BR>";
} else {
    print "We encountered an error sending your mail<BR>";
}
?>






