
<?php
    //get data from form  
    $name = $_POST['name'];
    $telefonas = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to = "dainaklis@gmail.com";


    $subject = "Žinutė nuo " .$name ;

    $txt = 
    " Vardas: ". $name .
    "\r\n ".
    "\r\n Telefonas: " . $telefonas.
    "\r\n ".
    "\r\n Email: " . $email .
    "\r\n ".
    "\r\n ". $message.
    "\r\n ".
    "\r\n ";

    $headers = "From: DainiusKarpavicius@dainiushostin.lt" ;

    if($email!=NULL)
    {
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    // header("Location:thankyou.html");        

    extract($_REQUEST);

    $file=fopen("saveContact.txt","a");

    fwrite($file,"\n");
    fwrite($file,"\n");
    fwrite($file,"----------- TIME --------------------" . "\n");

    fwrite($file,"Time zone: ". date_default_timezone_get() . "\n");

    date_default_timezone_set("Europe/Berlin");
    $localdate=date("Y-m-d H:i:s"). "\n";
    fwrite($file,"Message send time: " . $localdate);

    fwrite($file,"----------- MESSAGE -----------------" . "\n");

    fwrite($file, "Name: ");
    fwrite($file,$name . "\n");

    fwrite($file, "Phone Number: ");
    fwrite($file,$number . "\n");

    fwrite($file, "Email: ");
    fwrite($file,$email . "\n");

    fwrite($file, "Message: ");
    fwrite($file,$message . "\n");

    fwrite($file,"--------------- END -----------------" . "\n");

    fclose($file);
    header("location: contact.php");


?>