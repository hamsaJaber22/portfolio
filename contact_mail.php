<?php
$toEmail = "admin@phppot_samples.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";

if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}

?>