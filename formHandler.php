<?php   
if(isset($_POST['send message'])){
    $name=$_POST['name'];
    $mailfrom=$_POST['mail'];
    $subject=$_POST['subject'];
    $message=$_POST['message']; 

     $mailto="20bq1a12c0@vvit.net";
     $headers="From: ".$mailfrom;
     $txt="you have received an e-mail from".$name.".\n\n".$message;

    mail($mailto,$subject,$txt,$headers);
    header("Location:index.php?mailSend");
}

?>