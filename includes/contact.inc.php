<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$emailfrom=$_POST['email'];
$sub=$_POST['subject'];
$mess=$_POST['message'];
$mailto="adiartfriendship@gmail.com";
$headers="FROM: ".$emailfrom;
$txt="You have recieved and email from".$name.".\n\n".$mess;
mail($mailto,$sub,$txt,$headers);
header("Location: ../index.php?mailsent");
exit();
}
else{
    header("Location: ../index.php?some error occurred");
exit();
}



?>