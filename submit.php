<?PHP
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$emailMe = "benjaminnilsson1997@gmail.com";
$subject = "Portfolio - " . $subject;

mail($emailMe, $subject, $message);

?>