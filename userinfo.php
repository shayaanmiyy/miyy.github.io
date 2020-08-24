<?php

$con = mysqli_connect('localhost','root');

if ($con){
	echo"connection succesfil";
}else{
	echo"no connection";
}

mysqli_select_db($con, 'userinfodata');

$user = $_POST['user'];
echo "welcome mr $user";
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query ="INSERT INTO userinfodata (user, email, phone, comment) VALUES ('$user','$email','$phone','$comment')";

mysqli_query($con, $query);

echo "$query";

mysqli_query($con, $query);

header('location:index.php');
?>