<?php

//get data from form
$name= $_POST['name']};
$email= $_POST['email']};
$project=$_POST['project'];
$message= $_POST['message']};
$to="arifulhoque.tushar@gmail.com";
$subject="Mail From Website";
$txt="name=".$name."\r\n Email=".$email."\r\n Project=".$project."\r\n Message=".$message;
$headers="From:noreply@tusharcreative.github.io"."\r\n.
"CC:somebodyelse@example.com";
if($email!=Null){
	mail($to,$subject,$txt,$headers)
}
//redirect
header("Location:thankyou.html");

?>
