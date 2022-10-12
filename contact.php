<?php 
if(isset($_POST['sendmessage'])){
    $to = "eliasdengo5@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = $_POST['subject'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    echo '<script type="text/javascript">
       window.onload = function () { alert("Mail Sent. Thank you , we will contact you shortly."); } 
</script>'; 
     header('Location: https://eliasdengo.github.io/'); 
    }
?>