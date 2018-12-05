<?php
 
  if($_POST){

                   $fname=$_POST['fname'];
                 
                   $contactno=$_POST['contactno'];
                 
                   $message=$_POST['message'];
                 
                   
        $mailto="info@el-ebadi.com";  //Enter recipient email address here
        $subject = "User Query submitted on el-ebadi.com ";

        $message_body = "<html>
                        <head>
                        <title>HTML email</title>
                        </head>
                        <body>
                        <table border='1' cellpadding='10'>
                        <tr>
                        <th>First Name</th>
                        
                        <th>Contact Number</th>
                       
                       
                        <th>message</th>
                       
                        </tr>
                        <tr>
                        <td>". $fname ."</td>
                       
                        <td>". $contactno ."</td>
                        
                        <td>". $message."</td>
                      
                        </tr>
                        </table>
                        </body>
                        </html>";
                        
$headers = "From: " . $fname . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

       if(mail($mailto,$subject,$message_body,$headers)){
          echo "Thank You";
       }else{
          echo "Mail not send";
       }

}

 

?>
<script>
window.setTimeout(function() {
    window.location = 'index.html';
  }, 2000);
</script>