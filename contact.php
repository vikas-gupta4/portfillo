<?php 

    if(isset($_POST['btn-send']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $feedback = $_POST['feedback'];
       if(empty($name) && empty($email) && empty($Feedback))
       {
           header('location:Thanks.php?error');
       }
       else
       {
        
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $mes .="Name: ".$name."<br />";
        $mes .="Email: ".$email."<br />";
        $mes .="feedback: ".$feedback."<br />";
        
           $to = "webdesginer844@gmail.com";
            $Mysubject = "Contact Enquery";
           if(mail($to,$Mysubject,$mes,$headers))
           {
               header("location:Thanks.php?success");
           }
       }
    }
    else
    {
        header("location:Thanks.php");
    }
?>