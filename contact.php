<?php

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments']) ){	
	   
			if (trim($_POST['name']) != ""  && trim($_POST['email']) != ""  && trim($_POST['comments']) != "" ){	
				
					

					$sendto  = "info@iahutt.com";
					
					$subject = "Formulario de contacto";
	 
					$message = "<table cellpadding='0' cellspacing='0'>";
					$message .= "<tr><td style='padding:3px 5px;'>Full Name:</td><td style='padding:3px 5px;'>".$_POST["name"]."</td></tr>";	
					$message .= "<tr><td style='padding:3px 5px;'>Email:</td><td style='padding:3px 5px;'>".$_POST["email"]."</td></tr>";					
					$message .= "<tr><td style='padding:3px 5px;'>Comments:</td><td style='padding:3px 5px;'>".$_POST["comments"]."</td></tr>";
					$message .= "</table>";

					$header = "Content-Type: text/html; charset=UTF-8\n";
					
					$header .= 'From: ia Hutt Web Site <info@iahutt.com> ' . "\r\n" .'Reply-To:  '. trim($_POST['email']) . "\r\n" .'X-Mailer: PHP/' . phpversion() . "\r\n";
					
					// $header .= 'Cc: ' .$pCCto. "\r\n";	 
		
					// $header .= 'Bcc: '. $pBCCto . "\r\n"; 		
			 
					mail($sendto, $subject, $message, $header);	
						
				 
				 header('location:'.$_POST["link"].'?thanks=true#thanksMessage');
				
				}			
	  		}
	
?>