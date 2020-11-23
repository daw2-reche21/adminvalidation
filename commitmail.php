<?php
$error = array();
$email = isset($_POST["correo"])?$_POST["correo"]:'';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
      $error[] = urldecode('Invalid email format');
  
}
if(empty($error)){
	echo $email.' Email entered succesfuly';
}else{
	header('Location:email.php?'.'error=' . join($error, urlencode('<br/>')));
}
?>
