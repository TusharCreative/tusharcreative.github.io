<?php

//get data from form
$name= $_POST['name']};
$email= $_POST['email']};
$message= $_POST['message']};
$to="arifulhoque.tushar@gmail.com";
$subject="Mail From Website";
$txt="name=".$name."\r\n Email=".$email."\r\n Project=".$project."\r\n Message=".$message=".$message;

$headers = "From:noreply@codeconia.com"."\r\n.
"cc:somebodyelse@example.com";
if($email!=Null){
	mail($to,$subject,$txt,$headers)
}
//redirect
header("Location:thankyou.html");

?>

