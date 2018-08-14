<?php
	$name = $_POST["name"];
	$visitoremail = $_POST["email"];
	$message =  $_POST["message"];

	$email_from = "harshjoshi12358@gmail.com";

	$email_subject = "Civicart Customer Care";

	$email_body = 	"User Name: $name.\n".
					"User Email: $visitoremail.\n".
					"User Message: $message.\n";

		$to  = "harshjoshi2468@gmail.com";

		$headers = "From $email_from \r\n";

		$headers = "Replay-To: $visitoremail \r\n";

		mail($to,$email_subject,$email_body, $headers);

        if($to)
        {
            ?>
            <script>
                alert('Thank for submit your request we will resolve your issue within 48 hours');
                window.open('index.html','_self');
            </script>
            <?php
        }
        else
        {
            alert("Something Went To Wrong");
        }
        
?>