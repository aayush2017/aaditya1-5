<?php
// require_once 'SpamFilter/spamfilter.php';
require_once('include/db.php');
require_once('include/clsContact.php');
$objContact = new contactDetail();
$name = $_POST['unm'];
$email = $_POST['uemail'];
$phone = $_POST['umobile'];
$msg = $_POST['umess'];
$formName = $_POST['formName'];

$result1 = $objContact->saveContactEMail($name, $email, $phone, $msg, $formName);
mail($email,"NEW: Contact Me Request",'thanks For visiting','galaxeepro.com <'."info@galaxeepro.com".'>');
if ($result1) {	echo "1"; } else { echo "0"; }

?>